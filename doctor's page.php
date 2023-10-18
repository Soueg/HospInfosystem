<?php
// Retrieve patient data and descriptions from the database (replace with your database code)
$patients = [
    ['patient_id' => 1, 'patient_name' => 'Patient 1', 'doctor_description' => 'Description 1'],
    ['patient_id' => 2, 'patient_name' => 'Patient 2', 'doctor_description' => 'Description 2'],
    // Add more patient data here
];

foreach ($patients as $patient) {
    echo "<p>{$patient['patient_name']}</p>";
    echo "<form action='send_to_lab.php' method='post'>";
    echo "<input type='hidden' name='patient_id' value='{$patient['patient_id']}'>";
    echo "<input type='text' name='doctor_description' placeholder='Enter description'>";
    echo "<button type='submit'>Send to Lab</button>";
    echo "</form>";
    echo "<a href='view_responses.php?patient_id={$patient['patient_id']}'>View Responses</a>";
}
?>
