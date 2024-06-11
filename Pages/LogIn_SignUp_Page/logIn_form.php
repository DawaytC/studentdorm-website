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

    $email = $conn->real_escape_string($_POST['email']);
    $pass = $_POST['password'];

    // Select query to check user credentials
    $select = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($select);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Verify the password
        if (password_verify($pass, $row['password'])) {
            // Set session variables
            $_SESSION['username'] = $row['username'];
            $_SESSION['email'] = $row['email'];

            // Redirect to homePage.html
            header('Location: /Pages/Home Page/index.html');
            exit();
        } else {
            echo '<script>alert("Incorrect email or password!"); window.location.href="logIn.php"</script>';
            exit();
        }
    } else {
        echo '<script>alert("Incorrect email or password!"); window.location.href="logIn.php"</script>';
        exit();
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>
