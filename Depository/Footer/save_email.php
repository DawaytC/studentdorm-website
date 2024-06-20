<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize the email input
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);

    // Validate email format
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Database connection details
        $servername = "localhost";  // Change this to your database server
        $username = "root"; // Change this to your database username
        $password = ""; // Change this to your database password
        $dbname = "uniresidence_db";   // Change this to your database name

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare SQL statement to insert email into a table named 'subscribers'
        $sql = "INSERT INTO get_in_touch (email) VALUES (?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email); // 's' indicates the type is string

        // Execute the prepared statement
        if ($stmt->execute()) {
            echo "Email saved successfully!";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement and connection
        $stmt->close();
        $conn->close();
    } else {
        echo "Invalid email format";
    }
} else {
    // Redirect or handle if the form wasn't submitted properly
    echo "Form submission error";
}
?>

