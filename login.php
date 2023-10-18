<?php
session_start();


// Connect to the database (replace with your database credentials)
$conn = new mysqli("localhost", "root", " ", "myhmsdb");

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user input from the login form
$username = $_POST['username'];
$password = $_POST['password'];

// Retrieve user data from the database
$sql = "SELECT id, username, password, role FROM users WHERE username = '$username'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();

    // Verify the password
    if (password_verify($password, $row['password'])) {
        // Store user information in the session
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['role'] = $row['role'];

        // Redirect users based on their role
        if ($row['role'] == 'pharmacy') {
            header('Location: pharmacy_dashboard.php');
        } elseif ($row['role'] == 'doctor') {
            header('Location: doctor-panel.php');
        } elseif($row['role'] == 'admin') {
            header('Location: admin-panel.php');
        }elseif($row['role'] == 'labtech') {
            header('Location: labtech_dashboard.php');
    }elseif($row['role'] == 'receptionist') {
        header('Location: receptionist_dashboard.php');
    } else {
        echo "Invalid password.";
    }
} else {
    echo "User not found.";
}
}
// Close the database connection
$conn->close();
?>
