<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <title>Resurrection College System</title>
  </head>

  <body>

    <h1>Adding a New Resident</h1>
    <p><?php echo $_GET['givenName'] . ' ' . $_GET['familyName'] ?> was added successfully.</p>
    <p><button type="button" onclick="window.location.href='./home.php'">Go to Home Page</button></p>

  </body>
</html>
