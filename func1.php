<?php
session_start();
$con=mysqli_connect("localhost","root","","myhmsdb");
if(isset($_POST['docsub1'])){
	$dname=$_POST['username3'];
	$dpass=$_POST['password3'];
	$query="select * from doctb where username='$dname' and password='$dpass';";
	$result=mysqli_query($con,$query);
	if(mysqli_num_rows($result)==1)
	{
    while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
    
		      $_SESSION['dname']=$row['username'];
      
    }
		header("Location:doctor-panel.php");
	}
	else{
    // header("Location:error2.php");
    echo("<script>alert('Invalid Username or Password. Try Again!');
          window.location.href = 'Log in.php';</script>");
  }
}


// if(isset($_POST['update_data']))  
//   $result=mysqli_query($con,$query);
//   if(mysqli_num_rows($result)==1)
//   {
//     $_SESSION['username']=$username;
//     header("Location:admin-panel.php");
//   }
//   else
//     header("Location:error2.php");
  



function display_docs()
{
	global $con;
	$query="select * from doctb";
	$result=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($result))
	{
		$name=$row['name'];
		# echo'<option value="" disabled selected>Select Doctor</option>';
		echo '<option value="'.$name.'">'.$name.'</option>';
	}
}

// if(isset($_POST['doc_sub']))
// {
// 	$name=$_POST['name'];
// 	$query="insert into doctb(name)values('$name')";
// 	$result=mysqli_query($con,$query);
// 	if($result)
// 		header("Location:adddoc.php");
// }
?>