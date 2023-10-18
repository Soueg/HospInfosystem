<?php
// Connect to the database (replace with your database credentials)
$conn = new mysqli('localhost', 'username', 'password', 'myhmsdb');

// Prepare and bind the SQL statement
$sql = "INSERT INTO users (username, password, role) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $username, $password, $role);

// Set parameters and execute
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$role = $_POST['role'];

if ($stmt->execute()) {
    // Registration successful
    // ...
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and database connection
$stmt->close();
$conn->close();


// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user input from the registration form
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$role = $_POST['role'];

// Insert user data into the database
$sql = "INSERT INTO users (username, password, role) VALUES ('$username', '$password', '$role')";

if ($conn->query($sql) === TRUE) {
    // Registration successful
    session_start();
    $_SESSION["username"] = $username;
    $_SESSION["role"] = $role;

    // Redirect based on user's role
    if ($role === "doctor") {
        header("Location: doctor-panel.php");
    } elseif ($role === "admin") {
        header("Location: admin-panel1.php");
    }  elseif ($role === "labtech") {
        header("Location: labtech_dashboard.php");
    } elseif ($role === "pharmacy") {
        header("Location: pharmacy_dashboard.php");
    } elseif ($role === "receptionist") {
        header("Location: receptionist_dashboard.php");
    }

    exit();
} else {
    echo "Error: " . $conn->error;
}

// Close the database connection
$conn->close();
?>


$pid = $_SESSION['pid'];
  $username = $_SESSION['username'];
  $email = $_SESSION['email'];
  $fname = $_SESSION['fname'];
  $gender = $_SESSION['gender'];
  $lname = $_SESSION['lname'];
  $contact = $_SESSION['contact'];
