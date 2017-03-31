<?php

  /* Connects to the database
  */

  function connect() {

    $success = false;
    $message = '';

    $config = parse_ini_file('../config/config.ini');
    $conn   = mysqli_connect($config['database'],
                             $config['username'],
                             $config['password'],
                             $config['dbname'  ]);
    if($conn) {
      $success = true;
      $message  = $conn;
    } else {
      $success = false;
      $message = 'Could not connect to database: ' . mysqli_error();
    }

    $return[0] = $success;
    $return[1] = $message;

    return $return;

  }

  /* Disconnects from the database
  */

  function disconnect($conn) {
    mysqli_close($conn);
  }

  

  /* Creates a Resident
  */

  function createResident($givenName, $familyName, $conn) {

    $success = false;
    $message = '';

    $sql = "INSERT INTO Resident (givenName, familyName) " .
           "VALUES ('$givenName', '$familyName');        " ;

    $result = mysqli_query($conn, $sql);

    if($result) {
      $success = true;
      $message = mysqli_insert_id($conn);
    } else {
      $success = false;
      $message = 'Could not create resident: ' . mysqli_error();
    }

    $return[0] = $success;
    $return[1] = $message;

    return $return;

  }

  /* Destroys a Resident
  */

  function destroyResident($id, $conn) {

    $success = false;
    $message = '';

    $sql = "DELETE FROM Resident " .
           "WHERE id = '$id';    " ;

    $result = mysqli_query($conn, $sql);

    if($result) {
      $success = true;
      $message = '';
    } else {
      $success = false;
      $message = 'Could not remove resident: ' . mysqli_error();
    }

    $return[0] = $success;
    $return[1] = $message;

    return $return;

  }


  /* Returns a Resident
  */

  function getResident($id, $conn) {

    $success = false;
    $message = '';

    $sql = "SELECT * FROM Resident " .
           "WHERE id = '$id';      " ;

    $result = mysqli_query($conn, $sql);

    if($result) {
      $success = true;
      $message = mysqli_fetch_array($result, MYSQLI_ASSOC);
    } else {
      $success = false;
      $message = 'Resident does not exist: ' . mysqli_error();
    }

    
    $return[0] = $success;
    $return[1] = $message;

    return $return;

  }



  /* Returns a Resident's room
  */

  function getResidentRoom($id, $conn) {

    $success = false;
    $message = '';

    $sql = "SELECT wing, number FROM Room " .
           "WHERE residentId = '$id';     " ;

    $result = mysqli_query($conn, $sql);

    if($result) {
      $success = true;
      $message = mysqli_fetch_array($result, MYSQLI_ASSOC);
    } else {
      $success = false;
      $message = 'Could not return the Resident room: ' . mysqli_error();
    }

    
    $return[0] = $success;
    $return[1] = $message;

    return $return;

  }





  /* Sets a Resident's given name
  */

  function setResidentGivenName($id, $givenName, $conn) {

    $success = false;
    $message = '';

    $sql = "UPDATE Resident              " .
           "SET givenName = '$givenName' " .
           "WHERE id = '$id';            " ;

    $result = mysqli_query($conn, $sql);

    if($result) {
      $success = true;
      $message = '';
    } else {
      $success = false;
      $message = 'Could not set the Resident given name: ' . mysqli_error();
    }

    
    $return[0] = $success;
    $return[1] = $message;

    return $return;
  }
  

  /* Sets a Resident's family name
  */

  function setResidentFamilyName($id, $familyName, $conn) {

    $success = false;
    $message = '';

    $sql = "UPDATE Resident                " .
           "SET familyName = '$familyName' " .
           "WHERE id = '$id';              " ;

    $result = mysqli_query($conn, $sql);

    if($result) {
      $success = true;
      $message = '';
    } else {
      $success = false;
      $message = 'Could not set the Resident family name: ' . mysqli_error();
    }

    
    $return[0] = $success;
    $return[1] = $message;

    return $return;
  }
  

  /* Sets a Resident's room
  */

  function setResidentRoom($id, $room, $conn) {

    $success = false;
    $message = '';

    $wing   = substr($room,0,1);
    $number = substr($room,1,3);

    $sql = "UPDATE Room                                 " .
           "SET residentId = '$id'                      " .
           "WHERE wing = '$wing' AND number = '$number';" ;

    $result = mysqli_query($conn, $sql);

    if($result) {
      $success = true;
      $message = '';
    } else {
      $success = false;
      $message = 'Could not set the Resident room: ' . mysqli_error();
    }

    
    $return[0] = $success;
    $return[1] = $message;

    return $return;
  }
  


  /* Returns a list containg the ID of all Residents
  */

  function listResidents($conn) {

    $success = false;
    $message = '';

    $sql = "SELECT residentId FROM Room   " .
           "WHERE residentId IS NOT NULL; " ;

    $result = mysqli_query($conn, $sql);

    if($result) {
      $success = true;
      $message = $mysqli_fetch_array($result, MYSQLI_NUM);
    } else {
      $success = false;
      $message = 'Could not access Residents: ' . mysqli_error();
    }

    $return[0] = $success;
    $return[1] = $message;

    return $return;

  }



  /* Checks if a room is empty
  */

  function isRoomEmpty($room, $conn) {

    $success = false;
    $message = '';

    $wing   = substr($room,0,1);
    $number = substr($room,1,3);

    $sql = "SELECT id, residentId FROM Room             " .
           "WHERE wing = '$wing' AND number = '$number';" ;

    $result = mysqli_query($conn, $sql);

    if($result) {

      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
      $residentId = $row['residentId'];

      if(!$residentId) {
        $success = true;
        $message = '';
      } else {
        $success = false;
        $message = 'The Room is not empty';
      }
    } else {
      $success = false;
      $message = 'Could not check the Room';
    }


    $return[0] = $success;
    $return[1] = $message;

    return $return;

  }

?>
