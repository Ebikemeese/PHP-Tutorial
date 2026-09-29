<?php
/**
 * W3Schools PHP Tutorial: PHP File Upload
 * 
 * Rules for File Upload Forms:
 * 1. Form must use method="post"
 * 2. Form must have enctype="multipart/form-data" attribute
 * 3. File data is populated in the $_FILES superglobal
 * 
 * $_FILES properties:
 * - $_FILES['file']['name']: The original name of the file on client machine
 * - $_FILES['file']['type']: The mime type of the file
 * - $_FILES['file']['size']: The size in bytes of the uploaded file
 * - $_FILES['file']['tmp_name']: The temporary filename in which the file was stored on server
 * - $_FILES['file']['error']: The error code associated with this file upload
 */

$statusMsg = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES["fileToUpload"])) {
    $targetDir = __DIR__ . "/uploads/";
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0755, true);
    }

    $fileName = basename($_FILES["fileToUpload"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
    $uploadOk = 1;

    // Check if file already exists
    if (file_exists($targetFilePath)) {
        $statusMsg = "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size (e.g., limit to 500 KB)
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        $statusMsg = "Sorry, your file is too large (max 500KB).";
        $uploadOk = 0;
    }

    // Allow certain file formats
    $allowedTypes = ["jpg", "png", "jpeg", "gif", "txt", "pdf"];
    if (!in_array($fileType, $allowedTypes)) {
        $statusMsg = "Sorry, only JPG, JPEG, PNG, GIF, TXT & PDF files are allowed.";
        $uploadOk = 0;
    }

    // Attempt upload
    if ($uploadOk == 1) {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFilePath)) {
            $statusMsg = "The file " . htmlspecialchars($fileName) . " has been uploaded.";
        } else {
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP File Upload Tutorial</title>
</head>
<body>

    <h2>PHP File Upload Example</h2>
    <?php if (!empty($statusMsg)): ?>
        <p><strong>Status:</strong> <?php echo $statusMsg; ?></p>
    <?php endif; ?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] ?? ''); ?>" method="post" enctype="multipart/form-data">
        Select image or document to upload (Max 500KB):
        <br><br>
        <input type="file" name="fileToUpload" id="fileToUpload">
        <br><br>
        <input type="submit" value="Upload File" name="submit">
    </form>

</body>
</html>
