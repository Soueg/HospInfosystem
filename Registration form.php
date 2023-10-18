<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
            width: 100%;
            height: 100vh;
            background-image: linear-gradient(rgba(0,0,40,0.7),rgba(0,0,40,0.7)),url(hospital.jpg);
            background-position:center;
            background-size:cover;
            position: relative;
        }

        .login-container,
        .Registration-container {
            width: 600px;
            height: 480px;
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
        }
    </style>
</head>
<body>
    <div class="Registration-container">
        <p>HOSPITAL INFORMATION MANAGEMENT STYSTEM</p>
        <form action="Register.php" method="post">
            <div class="form-group">
                <input type="text" id="username" name="username" required>
                <label for="username">Username</label>
            </div>
            <div class="form-group">
                <input type="password" id="password" name="password" required>
                <label for="password">Password</label>
            </div>
                <div class="form-group">
                <label for="role">Role</label>
                    <select name="role" required>
                         <option value="select">select</option>
                         <option value="receptionist">Receptionist</option>
                         <option value="doctor">Doctor</option>
                         <option value="labtech">Lab Tech</option>
                         <option value="admin">Admin</option>
                         <option value="pharmacy">pharmacy</option>
                        </select>
                </div>
                <div>
            <button class="login-button" type="submit">Register</button>
            </div>
        </form>
    </div>
    </html>