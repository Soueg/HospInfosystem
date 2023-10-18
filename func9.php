<?php
// Connect to the database (replace with your database credentials)
$conn = new mysqli("localhost", "root", " ", "myhmsdb");

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $technicianName = $_POST['Tname'];
    $technicianID = $_POST['Tid'];
    $patientName = $_POST['Pname'];
    $patientID = $_POST['Pid'];
    $gender = $_POST['gender'];
    $testType = $_POST['Ttype']; // You need to add the 'name' attribute to this input field
    $testDate = $_POST['Tdate'];
    $results = $_POST['Results'];

    // Insert data into the database
    $sql = "INSERT INTO lab (Tname, Tid, Pname, Pid, gender, Ttype, Tdate, Results) 
            VALUES ('$technicianName', '$technicianID', '$patientName', '$patientID', '$gender', '$testType', '$testDate', '$results')";

    if ($conn->query($sql) === TRUE) {
        // Redirect to the doctor-panel page
        header('Location: doctor-panel.php');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>

