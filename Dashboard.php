<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: Registration form.php');
    exit();
}

// Check the user's role to display appropriate content
if ($_SESSION['role'] == 'patient') {
    // Display patient dashboard content
    echo "Welcome, Patient " . $_SESSION['username'];
    // Add patient-specific content here
} elseif ($_SESSION['role'] == 'doctor') {
    // Display doctor dashboard content
    echo "Welcome, Doctor " . $_SESSION['username'];
    // Add doctor-specific content here
} else {
    // Handle other roles or errors here
}
?>
