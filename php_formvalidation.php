<form method="POST" action="process_form.php">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name"><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email"><br>

    <input type="submit" value="Submit">
</form>



<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    // Define variables to store user input
    $name = $_POST["name"];
    $email = $_POST["email"];

    // Create an array to store validation errors
    $errors = [];

    // Validate the Name field
    if (empty($name)) {
        $errors[] = "Name is required.";
    } elseif (!preg_match("/^[a-zA-Z ]+$/", $name)) {
        $errors[] = "Name can only contain letters and spaces.";
    }

    // Validate the Email field
    if (empty($email)) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    // Check if there are any validation errors
    if (empty($errors)) {
        // Data is valid, process the form (e.g., save to a database)
        echo "Form submitted successfully!";
    } else {
        // Display validation errors to the user
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }
}

?>
