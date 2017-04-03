<?php

  require('../function/php-db-function.php');
  require('../function/validation.php'     );

  $searchBy   = $searchByErr = "";
  $givenName  = "";
  $familyName = "";
  $room       = "";

  $error = false;

  if($_SERVER["REQUEST_METHOD"] == "POST") {

    if($_POST['findResident']) {
      echo 'Find a Resident Now!';
    } elseif($_POST['removeResident']) {
      echo 'Remove a Resident Now!';
    }

  }

?>

<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Resurrection College System</title>
  </head>

  <body>
    <h1>Remove a Resident</h1>
    <h2>Find a Resident</h2>
    <?php require('./findresident.php'); ?>
    <h2>Select a Resident</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <input type="submit" name="removeResident" id="removeResident" value="Remove">
    <form>
  </body>

</html>
