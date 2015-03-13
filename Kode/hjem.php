<html>
<head>
<title>hjem</title>
</head>
<?php
session_start();
if($_SESSION['user']){ 
}
else{
header("location: startsiden.php"); 
}
$user = $_SESSION['user']; 
?>
<body>
<h2>Home Page</h2>


<p>Hello <?php Print "$user"?>!</p> 
<a href="loggut.php">Trykk her for å logge ut</a><br/><br/>
</body>
</html>
