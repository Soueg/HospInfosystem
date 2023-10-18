<!DOCTYPE html>
<html>
<head>
    <title>Doctor's Form</title>
    <style>
        h1{
            background-color: rgb(38, 38, 245);
                 color:#fff;
                 height: 40px;
                 width: 600px;
                 font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                 padding-top: 20px;
                 border-radius: 5px;
                 margin-top: none;
        }
        #btn2{
            background-color:  blue;
            color: #fff;
            border-radius: 3px;
            border-style: none;
            height: 30px;
            width: 100px;
            font-size: medium;
            font-weight: 600;
            margin-left: 40px;
            
        }
        #btn2:hover{
     
     transform: scale(1.3);
     background: blue;
     box-shadow: 2px 2px 2px #000;
     z-index: 2;}
     .name1, .name2, .name3, .phone, .email, .DOB, .address, .city {
        border: none;
        border-bottom: 2px solid silver;
     }
    </style>
</head>
<body>
    <center>

<h1>DOCTOR-PATIENT FORM</h1>

<form action="submit_form.php" method="post">
    <label for="patient_name"><strong>Patient Name:</strong></label>
    <input type="text" id="patient_name" name="patient_name" required><br><br>

    <label for="age"><strong>Age:</strong></label>
    <input type="number" id="age" name="age" required><br><br>
    <label for="gender"><strong>Gender:</strong></label>
    <input type="radio" id="male" name="gender" value="male" required>
    <label for="male"><strong>Male</strong></label>
    <input type="radio" id="female" name="gender" value="female" required>
    <label for="female"><strong>Female</strong></label><br><br>

    <label for="email"><strong>Email:</strong></label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="phone"><strong>Phone:</strong></label>
    <input type="tel" id="phone" name="phone" required><br><br>

    <label for="symptoms"><strong>Symptoms:</strong></label><br>
    <textarea id="symptoms" name="symptoms" rows="4" cols="50" required></textarea><br><br>

    <label for="appointment_date"><strong>Preferred Appointment Date:</strong></label>
    <input type="date" id="appointment_date" name="appointment_date" required><br><br>

   <center> <button type="submit" id="btn2">Submit &rarr;</button></center>
</form>

</center>


</body>
</html>
