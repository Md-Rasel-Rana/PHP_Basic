<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Define variables to store user input
    $name = $_POST["name"];
    $email = $_POST["email"];

    // Create an instance of the FormValidator class
    $validator = new FormValidator();

    // Validate the Name field
    $nameError = $validator->validateName($name);

    // Validate the Email field
    $emailError = $validator->validateEmail($email);

    // Check if there are any validation errors
    if (empty($nameError) && empty($emailError)) {
        // Data is valid, process the form (e.g., save to a database)
        echo "Form submitted successfully!";
    } else {
        // Display validation errors to the user
        echo $nameError . "<br>";
        echo $emailError . "<br>";
    }
}
?>
