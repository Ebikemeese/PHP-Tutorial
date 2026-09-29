<?php
/**
 * W3Schools PHP Tutorial: PHP Form Handling
 * 
 * PHP superglobals $_GET and $_POST are used to collect form-data.
 * Both GET and POST create an associative array of key/value pairs,
 * where keys are the names of the form controls and values are the input data from the user.
 */

// Handle incoming mock submission or actual web submission
$name = "";
$email = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars($_POST['name'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    echo "Form Submitted via POST:\n";
    echo "Welcome $name\n";
    echo "Your email address is: $email\n";
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>PHP Form Handling Example</title>
</head>
<body>

    <h2>PHP Form Handling (POST Method)</h2>
    <!-- When user fills out form and clicks Submit, form-data is sent to file specified in action -->
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] ?? ''); ?>" method="post">
        Name: <input type="text" name="name" value="John Doe"><br><br>
        E-mail: <input type="text" name="email" value="john@example.com"><br><br>
        <input type="submit" value="Submit Form">
    </form>

    <h2>PHP Form Handling (GET Method Explanation)</h2>
    <p>
        Information sent from a form with the GET method is visible to everyone (all variable names
        and values are displayed in the URL). GET also has limits on the amount of information to send.
    </p>

</body>
</html>
