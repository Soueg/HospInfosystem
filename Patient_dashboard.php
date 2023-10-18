<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Laboratory Information Form</title>
    <link rel="stylesheet" href="style.css">
    <style>
           h1{
            margin-bottom: 20px;
            margin-left:130px;
                 color:#fff;
                 height: 40px;
                 width: 1000px;
                 background-color: rgb(38, 38, 245);
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                 padding-top: 15px;
                 border-radius: 5px;
        }
        form{
            text-align:left;
        }
    </style>
</head>
<body>
    <h1>Hospital Laboratory Information Form</h1>
    <form id="labForm" action="" method="post">
    <div class="form-group">
            <label for="Technician's Name">Technician's Name:</label>
            <input type="text" id="Technician's Name" name="Technician's Name" required>
        </div>
        <div class="form-group">
            <label for="Technician's ID">Technician's ID:</label>
            <input type="text" id="Technician's ID" name="Technician's ID" required>
        </div>
        <div class="form-group">
            <label for="patientName">Patient Name:</label>
            <input type="text" id="patientName" name="patientName" required>
        </div>
            <div class="form-group">
                <label for="patientID">Patient ID:</label>
            <input type="text" id="patientID" name="patientID" required>
        </div>
        <div class="form-group"> <label for="Gender">Gender:</label>
            <select id="Gender" name="Gender" required>
            <option value="Select your Gender">Select your Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select></div>
        <div class="form-group">
            <label for="testType">Test Type:</label>
           <input type="text" required>
        </div>
        <div class="form-group">
            <label for="testDate">Test Date:</label>
            <input type="date" id="testDate" name="testDate" required>
        </div>
        <div class="form-group">
            <label for="comments">Results:</label>
            <textarea id="comments" name="comments" rows="4"></textarea>
        </div>
        <center><button type="submit">Submit</button></center>
    </form>
    <div id="submissionResult"></div>

    <script>document.addEventListener("DOMContentLoaded", function () {
        const labForm = document.getElementById("labForm");
        const submissionResult = document.getElementById("submissionResult");
    
        labForm.addEventListener("submit", function (e) {
            e.preventDefault();
    
            const TechnicianName = document.getElementById("TechnicianName").value;
            const TechnicianID = document.getElementById("TechnicianID").value;
            const patientName = document.getElementById("patientName").value;
            const patientID = document.getElementById("patientID").value;
            const testType = document.getElementById("testType").value;
            const testDate = document.getElementById("testDate").value;
            const comments = document.getElementById("comments").value;
    
            // You can perform further processing or send the form data to a server here.
            // For now, we'll just display a submission message.
    
            submissionResult.innerHTML = `Form submitted successfully.<br>
            Patient Name: ${patientName}<br>
            Test Type: ${testType}<br>
            Test Date: ${testDate}<br>
            Comments: ${comments}`;
        });
    });
    </script>
    
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $technicianName = $_POST["Technician's_Name"];
    $technicianID = $_POST["Technician's_ID"];
    $patientName = $_POST["patientName"];
    $patientID = $_POST["patientID"];
    $gender = $_POST["Gender"];
    $testType = $_POST["testType"];
    $testDate = $_POST["testDate"];
    $comments = $_POST["comments"];

    // You can perform any additional processing here, such as saving to a database.
    // For now, we'll just print the data.

    echo "<h1>Medical Lab Form</h1>";
    echo "<p>Technician's Name: $technicianName</p>";
    echo "<p>Technician's ID: $technicianID</p>";
    echo "<p>Patient Name: $patientName</p>";
    echo "<p>Patient ID: $patientID</p>";
    echo "<p>Gender: $gender</p>";
    echo "<p>Test Type: $testType</p>";
    echo "<p>Test Date: $testDate</p>";
    echo "<p>Results: $comments</p>";
} else {
    echo "Invalid request.";
}
?>
</body>
</html>
