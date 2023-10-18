<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Laboratory Results Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
        }

        h2 {
            color: #333;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        form {
            margin: 20px auto;
            max-width: 600px;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            text-align: left;
        }

        label, input, textarea {
            display: block;
            margin: 10px 0;
        }

        input, textarea {
            width: 100%;
            padding: 8px;
            font-size: 16px;
        }

        textarea {
            height: 100px;
        }
    </style>
</head>
<body>
    <h2>Patient Laboratory Results</h2>
    <form>
        <h3>Patient information</h3>
        <label for="patientName">Patient Name:</label>
        <input type="text" id="patientName" required>

        <label for="patientID">Patient ID:</label>
        <input type="text" id="patientID" required>



        <hr>

       <h3>  Laboratory Results</h3>
        <label for="bloodPressure">Blood Pressure:</label>
        <input type="text" id="bloodPressure" required>

        <label for="height">Height (in cm):</label>
        <input type="text" id="height" required>

        <label for="weight">Weight (in kg):</label>
        <input type="text" id="weight" required>

        <label for="bloodGroup">Blood Group:</label>
        <input type="text" id="bloodGroup" required>

        <label for="urine">Urine Analysis:</label>
        <input type="text" id="urine" required>

        <label for="diabetes">Diabetes (mg/dL):</label>
        <input type="text" id="diabetes" required>

        <label for="hypertension">Hypertension (mmHg):</label>
        <input type="text" id="hypertension" required>

        <label for="cholesterol">Cholesterol (mg/dL):</label>
        <input type="text" id="cholesterol" required>

        <label for="labResults">Lab Results:</label>
        <textarea id="labResults" required></textarea>

        <button type="button" onclick="submitResults()">Submit Results</button>
    </form>


</body>
</html>
