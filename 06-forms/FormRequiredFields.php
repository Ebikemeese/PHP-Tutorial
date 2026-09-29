<?php
/**
 * W3Schools PHP Tutorial: PHP Form Required Fields & Error Handling
 * 
 * Required form fields ensure necessary data is provided before processing.
 * If a required field is empty, an error message is set and displayed next to the field.
 */

// Define error and value variables and set to empty values
$nameErr = $emailErr = $genderErr = "";
$name = $email = $gender = $comment = "";

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Processing form request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate Name
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
    }

    // Validate Email
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
    }

    // Optional field (Comment)
    if (empty($_POST["comment"])) {
        $comment = "";
    } else {
        $comment = test_input($_POST["comment"]);
    }

    // Validate Gender (Radio)
    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = test_input($_POST["gender"]);
    }
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>PHP Form Required Fields Example</title>
    <style>
        .error { color: #FF0000; font-size: 0.9em; }
    </style>
</head>
<body>

    <h2>PHP Form Validation - Required Fields</h2>
    <p><span class="error">* required field</span></p>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] ?? ''); ?>">
        Name: <input type="text" name="name" value="<?php echo $name; ?>">
        <span class="error">* <?php echo $nameErr; ?></span>
        <br><br>

        E-mail: <input type="text" name="email" value="<?php echo $email; ?>">
        <span class="error">* <?php echo $emailErr; ?></span>
        <br><br>

        Comment: <textarea name="comment" rows="3" cols="30"><?php echo $comment; ?></textarea>
        <br><br>

        Gender:
        <input type="radio" name="gender" <?php if ($gender=="female") echo "checked"; ?> value="female">Female
        <input type="radio" name="gender" <?php if ($gender=="male") echo "checked"; ?> value="male">Male
        <input type="radio" name="gender" <?php if ($gender=="other") echo "checked"; ?> value="other">Other
        <span class="error">* <?php echo $genderErr; ?></span>
        <br><br>

        <input type="submit" name="submit" value="Submit">
    </form>

</body>
</html>
