<?php
// Retrieve descriptions that need lab responses from the database (replace with your database code)
$descriptions = [
    ['description_id' => 1, 'patient_id' => 1, 'doctor_description' => 'Description 1'],
    // Add more descriptions here
];

foreach ($descriptions as $description) {
    echo "<p>{$description['doctor_description']}</p>";
    echo "<form action='save_response.php' method='post'>";
    echo "<input type='hidden' name='description_id' value='{$description['description_id']}'>";
    echo "<input type='text' name='lab_response' placeholder='Enter lab response'>";
    echo "<button type='submit'>Send Response</button>";
    echo "</form>";
}
?>
