  <!DOCTYPE html>
  <html>
  <head>
    <title> Logg Inn </title>
    <meta charset="UTF-8">
    <style type="text/css">
      .konteiner {
       margin: 50px auto;
       width: 640px;
     }

     .logginn {
       position: relative;
       margin: 0 auto;
       padding: 20px 20px 20px;
       width: 310px;
     }
     #logo {
      position: relative;
      text-align: center;
    }
  </style>
</head>
<body>
  <div id="logo">
    <img src="./Bilder/WACT.jpg" width="300">
  </div>
  <div class="container">
    <div class="logginn">
      <h1>Logg Inn</h1>
      <form method="post" action="logginnKontroll.php">
        <p><input type="text" name="username" value="" placeholder="Brukernavn"></p>
        <p><input type="password" name="password" value="" placeholder="Passord"></p>
        <p class="husk_meg">
          <label>
           <label>
            <input type="checkbox" name="husk_meg" id="husk_meg">
          </label>
        </label>
      </p>
      <p class="submit"><input type="submit" name="submit" value="Logg inn"></p>
    </form>
  </div>

  <div class="login-hjelp">
    <p>Glemt passord? <a href="glemtPassord.php">Trykk her for å resette det</a>.</p>
  </div>
</div>
</body>
</html>