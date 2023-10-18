<?php
// Process the form submission and update the database with the doctor's description
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $patientId = $_POST['patient_id'];
    $doctorDescription = $_POST['doctor_description'];

    // Update the database (replace with your database code)
    // Example: $conn->query("UPDATE descriptions SET doctor_description = '$doctorDescription' WHERE patient_id = $patientId");

    // Redirect back to the doctor's page
    header('Location: doctor_page.php');
    exit();
}
?>
