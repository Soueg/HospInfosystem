<!DOCTYPE html> 
<html> 
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Login Page </title>
<style>
body {
     font-family: Arial, Helvetica, sans-serif;
     background-color: #ccc;
     text-align:center;
     width:40%;
	 margin:0 auto;
     padding:20px;
     @media(max-width:600px){
                            .container{
                                      display:flex;
					                  flex-direction:column;
					                  }
                            }
}
form { 
        border: 3px solid #f1f1f1;
        width: 500px;
		height:400px;
        justify-content:center;		
}
h1 {
    text-align:center;
}

.button { 
        background-color: #008CBA; 
        width: 100px;
		height:30px;
        color: black; 
        padding: 0px; 
        margin: 10px 0px; 
        border: none; 
        cursor: pointer;
        border-radius:100px;
}
 
input[type=text], input[type=password] { 
        width: 50%; 
        margin: 8px 0;
        padding: 12px 20px; 
        display: inline-block; 
        border: 2px solid blue;
		color: dodgerBlue;
        border-radius:100px;
}
.button:hover { 
        opacity: 0.2;
        background-color: #0056b3;		
} 
.container { 
        width: 450px;
		height:350px;
		padding: 25px; 
        background-color: lightblue;
		justify-content:center;
} 
</style> 
</head>  
<body>  
    <center> 
	       <h1> User Login Form </h1>
    </center>
    
    <form action="login.php" method="post">
        <div class="container">
		    <div>
            <input type="text" placeholder="Enter Username" name="username" required>
			</div>
			<div>
            <input type="password" placeholder="Enter Password" name="password" required>
			</div>
			<div>
            <input type="submit" value="Login" class="button">
			</div>
			<div>
			    <b><a href=""> Forgot Password? </a></b>
		    </div>
			<div> Not a Member?   
			    <b><a href="Registration form.php"> Register Here Now </a></b>
		    </div>
        </div> 
     </form>   
</body>   
</html>