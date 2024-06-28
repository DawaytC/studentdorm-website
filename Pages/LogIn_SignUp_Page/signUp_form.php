<?php
session_start();

if (isset($_POST['submit'])) {
    // Database connection details
    $servername = "localhost";
    $username = "root";
    $password = ""; // Ensure no space between the quotes if no password
    $dbname = "uniresidence_db";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Escape user inputs for security
    $name = $conn->real_escape_string($_POST['username']);
    $email = $conn->real_escape_string($_POST['email']);
    $pass = $_POST['password'];
    $cpass = $_POST['cpassword'];

    // Function to validate password strength
    function validate_password($password) {
        $pattern = '/^(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*])[A-Za-z\d!@#$%^&*]{8,}$/';
        return preg_match($pattern, $password);
    }

    // Check if the user already exists
    $select = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $select->bind_param("s", $email);
    $select->execute();
    $result = $select->get_result();

    if ($result->num_rows > 0) {
        echo '<script>alert("User already exists!"); window.location.href="signUp.php";</script>';
    } else {
        if ($pass != $cpass) {
            echo '<script>alert("Passwords do not match!"); window.location.href="signUp.php";</script>';
        } else if (!validate_password($pass)) {
            echo '<script>alert("Password must be at least 8 characters long and include at least one uppercase letter, one digit, and one special character."); window.location.href="signUp.php";</script>';
        } else {
            // Hash the password
            $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);

            // Get the current date and time
            $registration_date = date('Y-m-d H:i:s');

            // Insert the new user into the database along with the registration date
            $insert = $conn->prepare("INSERT INTO users (username, email, password, registration_date) VALUES (?, ?, ?, ?)");
            $insert->bind_param("ssss", $name, $email, $hashed_pass, $registration_date);

            if ($insert->execute()) {
                // Redirect to the login page after successful sign-up
                echo '<script>alert("Sign Up successful!"); window.location.href="logIn.php";</script>';
            } else {
                echo '<script>alert("Error: ' . $conn->error . '"); window.location.href="signUp.php";</script>';
            }
        }
    }

    // Close connection
    $conn->close();
}
?>
