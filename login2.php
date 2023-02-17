<?php
//create connection
$conn = mysqli_connect("localhost", "sara", "2222", "stock_managment");
if(!$conn) {echo 'Connection error:' .mysqli_connect_error();
};
//login page verification
if(isset($_POST['SignIn'])) 
{
	$username=$_POST['userid'];
	$password=$_POST['userpw'];
	$sql = "SELECT * FROM users where userid = '$username' AND userpw = '$password'";
	$query = mysqli_query($conn,$sql);
	
	if($query=!NULL) {
		$user_data = mysqli_fetch_assoc($query);
		header('location:index2.php');
	};
    echo "invalid username or password";
        //header('location:index.html');
};
?>
<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
<title> Login Webpage </title>
<br><br>
<style>
    h1{text-align: center;}
</style>
</head>
<body style = "background-color:#003333;">
<h1 style="color:#fff"> User Login </h1>
<form Action ="login2.php" method = "POST" style="color:#fff"> Username:
<input name = "user_id">
<br><br>
Password:
<input type = "password" name = "user_pw">
<br>
<input type = "submit" name = "SignIn" value = "Login">
</form>
</body>
</html>