<?php
/**
 * W3Schools PHP Tutorial: PHP Complete Form Example
 * 
 * A complete, secure registration form demonstrating:
 * - Proper sanitization with test_input()
 * - Required field validation
 * - Format validation (regex for name, filters for email and URL)
 * - Retaining input values after form submission (sticky forms)
 * - Safe HTML entity output
 */

// Define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";
$formSubmittedSuccessfully = false;

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $isValid = true;

    // Validate Name
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
        $isValid = false;
    } else {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $nameErr = "Only letters and white space allowed";
            $isValid = false;
        }
    }

    // Validate Email
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
        $isValid = false;
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
            $isValid = false;
        }
    }

    // Validate Website (optional)
    if (!empty($_POST["website"])) {
        $website = test_input($_POST["website"]);
        if (!filter_var($website, FILTER_VALIDATE_URL)) {
            $websiteErr = "Invalid URL";
            $isValid = false;
        }
    }

    // Validate Comment (optional)
    if (!empty($_POST["comment"])) {
        $comment = test_input($_POST["comment"]);
    }

    // Validate Gender
    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
        $isValid = false;
    } else {
        $gender = test_input($_POST["gender"]);
    }

    if ($isValid) {
        $formSubmittedSuccessfully = true;
    }
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>PHP Complete Form Example</title>
    <style>
        .error { color: #d9534f; font-weight: bold; }
        .success { color: #5cb85c; font-weight: bold; background: #e8f5e9; padding: 10px; border-radius: 4px; }
        .form-box { background: #f9f9f9; padding: 20px; border: 1px solid #ddd; border-radius: 6px; max-width: 500px; }
        label { display: block; margin-top: 10px; font-weight: bold; }
        input[type=text], textarea { width: 100%; padding: 8px; box-sizing: border-box; }
    </style>
</head>
<body>

<div class="form-box">
    <h2>Complete PHP Form Example</h2>
    <p><span class="error">* required field</span></p>

    <?php if ($formSubmittedSuccessfully): ?>
        <div class="success">Form submitted successfully!</div>
    <?php endif; ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] ?? ''); ?>">
        <label>Name: <span class="error">* <?php echo $nameErr; ?></span></label>
        <input type="text" name="name" value="<?php echo $name; ?>">

        <label>E-mail: <span class="error">* <?php echo $emailErr; ?></span></label>
        <input type="text" name="email" value="<?php echo $email; ?>">

        <label>Website: <span class="error"><?php echo $websiteErr; ?></span></label>
        <input type="text" name="website" value="<?php echo $website; ?>">

        <label>Comment:</label>
        <textarea name="comment" rows="4"><?php echo $comment; ?></textarea>

        <label>Gender: <span class="error">* <?php echo $genderErr; ?></span></label>
        <input type="radio" name="gender" <?php if ($gender=="female") echo "checked"; ?> value="female"> Female
        <input type="radio" name="gender" <?php if ($gender=="male") echo "checked"; ?> value="male"> Male
        <input type="radio" name="gender" <?php if ($gender=="other") echo "checked"; ?> value="other"> Other

        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</div>

<?php if ($formSubmittedSuccessfully): ?>
    <h3>Your Sanitized Input:</h3>
    <p><strong>Name:</strong> <?php echo $name; ?></p>
    <p><strong>Email:</strong> <?php echo $email; ?></p>
    <p><strong>Website:</strong> <?php echo $website; ?></p>
    <p><strong>Comment:</strong> <?php echo $comment; ?></p>
    <p><strong>Gender:</strong> <?php echo $gender; ?></p>
<?php endif; ?>

</body>
</html>
