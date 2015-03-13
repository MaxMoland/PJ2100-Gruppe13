<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" >
  <title>registrering</title>
  <style type="text/css">
    body{
      background-color: white;
    }
    #logo{
      position: relative;
      text-align: center;
    }
    .wrap{
      position: auto;
      text-align: center;
    }
  </style>
</head>
<body>
  <div id="logo">
    <img src="./Bilder/WACT.jpg">
  </div>

  <section class="wrap">
    <h1>Registrer deg her</h1>
    <h4>Side for studenter ved Westerdals</h4>       
    <form action="registrering.php" method="POST">
      Fornavn: <input type="text" name="firstname"><br>
      Etternavn: <input type="text" name="lastname"><br>
      Brukernavn: <input type="text" name="username"><br>
      Passord: <input type="text" name="password"><br>
      Epost adresse: <input type="text" name="email"><br>
      <input type="submit" value="Registrer">
    </form>
  </section>
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $firstname = mysql_real_escape_string($_POST['firstname']);
  $lastname = mysql_real_escape_string($_POST['lastname']);
  $username = mysql_real_escape_string($_POST['username']);
  $password = mysql_real_escape_string($_POST['password']);
  $email = mysql_real_escape_string($_POST['email']);
  $bool = true;

  mysql_connect('localhost', 'root','root') or die(mysql_error()); 
  mysql_select_db('phplogin') or die('Kan ikke koble til database'); 
  $query = mysql_query('Select * from users'); 
  while($row = mysql_fetch_array($query))
  {
    $table_users = $row['username']; 
    if($username == $table_users) 
    {
      $bool = false; 
      Print '<script>alert("Brukernavnet er allerede i bruk!");</script>'; 
      Print '<script>window.location.assign("registrering.php");</script>'; 
    }
  }

  if($bool)
  {
    mysql_query("INSERT INTO users (firstname, lastname, username, password, email) VALUES ('$firstname','$lastname','$username','$password','$email')");
    Print '<script>alert("Registrering vellykket!");</script>';
    Print '<script>window.location.assign("logginn.php");</script>';
  }

}
?>