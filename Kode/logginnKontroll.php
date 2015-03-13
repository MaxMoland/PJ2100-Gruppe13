<?php
session_start();
$username = mysql_real_escape_string($_POST['username']);
$password = mysql_real_escape_string($_POST['password']);
mysql_connect("localhost", "root","root") or die(mysql_error()); 
mysql_select_db("phplogin") or die("Kan ikke koble til database"); 
$query = mysql_query("SELECT * from users WHERE username='$username'");
$exists = mysql_num_rows($query); 
$table_users = "";
$table_password = "";
if($exists > 0) 
{
	while($row = mysql_fetch_assoc($query)) 
	{
		$table_users = $row['username'];
		$table_password = $row['password'];
	}
	if(($username == $table_users) && ($password == $table_password)) 
	{
		if($password == $table_password)
		{
			$_SESSION['user'] = $username; 
			header("location: hjem.php"); 
		}
	}
	else
	{
		Print '<script>alert("Feil passord!");</script>'; 
		Print '<script>window.location.assign("logginn.php");</script>';
	}
}
else
{
	Print '<script>alert("Feil brukernavn!");</script>'; 
	Print '<script>window.location.assign("logginn.php");</script>'; 
}
?>