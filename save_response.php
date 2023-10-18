<?php
// Process the form submission and save the lab technician's response
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $descriptionId = $_POST['description_id'];
    $labResponse = $_POST['lab_response'];

    // Update the database (replace with your database code)
    // Example: $conn->query("UPDATE descriptions SET lab_response = '$labResponse' WHERE description_id = $descriptionId");

    // Redirect back to the lab tech's page
    header('Location: labtech_page.php');
    exit();
}
?>
