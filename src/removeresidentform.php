<?php

  require('../function/php-db-function.php');
  require('../function/validation.php'     );

  $messageErr = "";
  $searchBy   = $searchByErr = "";
  $givenName  = "";
  $familyName = "";
  $room       = "";

  $error = false;

  if($_SERVER["REQUEST_METHOD"] == "POST") {

    if($_POST['searchResident']) {

      if($_POST['searchByName']){
        echo 'Search By Name';
      } elseif ($_POST['searchByRoom']) {
        echo 'Search By Room';
      } else {
        echo 'Select one';
        $searchByErr = 'Select one search criteria';
      }


    } elseif($_POST['removeResident']) {
      echo 'Remove a Resident Now!';
    }

  }

?>

<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <title>Resurrection College System</title>
  </head>

  <body>
    <h1>Remove a Resident</h1>
    <h2>Search a Resident</h2>
    <p><span class="error"><?php echo $messageErr; ?></span></p>
    <?php require('./searchresident.php'); ?>
    <h2>Select a Resident</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <input type="submit" name="removeResident" id="removeResident" value="Remove">
    <form>
  </body>

</html>
