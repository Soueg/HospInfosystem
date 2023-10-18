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
        body {
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
            width: 100%;
            height: 100vh;
            background-image: linear-gradient(rgba(19, 6, 100000, 0.7),rgba(0,0,40,0.7)),url(hospital.jpg);
            background-position:center;
            background-size:cover;
            position: relative;
        }

        .login-container {
            width: 600px;
            height: 730px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

         p {
            margin-bottom: 20px;
                 color:#fff;
                 height: 40px;
                 width: 600px;
                 background-color: rgb(38, 38, 245);
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                 padding-top: 20px;
                 border-radius: 5px;
                 

        }
        .form-group {
            position: relative;
            text-align: left;
            margin-bottom: 20px;
    
        }

        .form-group label {
            position: absolute;
            bottom: 10px;
            left: 0;
            right: 0; 
            text-align: center; 
            pointer-events: none;
            transition: 0.3s ease all;
        }

        .form-group input {
            width: 70%;
            margin-left: 70px;
            padding: 10px;
            border: none;
            border-bottom: 2px solid #007BFF;
            outline: none;
            font-size: 16px;
        }
        #logout-button:hover {
    background-color: #0056b3;
}
.logt{
    position: absolute;
    top: 10px; 
    right: 10px;
    padding: 10px 20px;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    background-color: rgb(38, 38, 245);}

        .form-group input:focus {
            border-bottom: 2px solid #FF5733;
        }

        .form-group input:focus + label,
        .form-group input:valid + label {
            transform: translateY(-25px);
            font-size: 14px;
            text-align: center;
            color: #007BFF;
        }

        .login-button {
            width: 25%;
            padding: 10px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 20px;
            cursor: pointer;
        }

        .login-button:hover {
            background-color: #0056b3;
     transform: scale(1.3);
     background: blue;
     box-shadow: 2px 2px 2px #000;
     z-index: 2;
        }








    </style>
</head>
<body>
    <h1>Hospital Laboratory Information Form</h1>
    <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="Labform" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Hospital Laboratory Information Form</h3>
                                <form method="post" action="func9.php">
                                <div class="row register-form">
    <form id="labForm" action="func9.php" method="post">
    <div class="form-group">
            <label for="Technician's Name">Technician's Name:</label>
            <input type="text" id="Technician's Name" name="Tname" required>
        </div>
        <div class="form-group">
            <label for="Technician's ID">Technician's ID:</label>
            <input type="text" id="Technician's ID" name="Tid" required>
        </div>
        <div class="form-group">
            <label for="patientName">Patient Name:</label>
            <input type="text" id="patientName" name="Pname" required>
        </div>
            <div class="form-group">
                <label for="patientID">Patient ID:</label>
            <input type="text" id="patientID" name="Pid" required>
        </div>
        <div class="form-group"> <label for="Gender">Gender:</label>
            <select id="Gender" name="gender" required>
            <option value="Select your Gender">Select your Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select></div>
        <div class="form-group">
            <label for="testType">Test Type:</label>
           <input type="text" name="Ttype" required>
        </div>
        <div class="form-group">
            <label for="testDate">Test Date:</label>
            <input type="date" id="testDate" name="Tdate" required>
        </div>
        <div class="form-group">
            <label for="comments">Results:</label>
            <textarea id="comments" name="Results" rows="4"></textarea>
        </div>
        <center><a href="func9.php"><button type="submit">Submit</button></a></center>
    </form>
</body>
</html>