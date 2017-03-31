<?php

  require('../function/php-db-core-function.php');



  function addResident($givenName, $familyName, $room) {

    $success = false;
    $message = '';

    $result = connect();
    if(!$result[0])
      return $result;
    $conn = $result[1];


    $result = createResident($givenName, $familyName, $conn);

    if($result[0]) {

      $id = $result[1];
      $result = isRoomEmpty($room, $conn);

      if($result[0]) {
        
        $result = setResidentRoom($id, $room, $conn);

        if($result[0]) {
          $success = true;
          $message = '';
        } else {

          $message = $result[1] . $message;
          $result = destroyResident($id, $conn);

          if($result[0]) {
            $success = false;
            $message = 'Resident could not be created.' . $result[1];
          } else {
            $success = false;
            $message = 'Resident could not be created. Please contact support.' . $result[1];
          }
        }

      } else {
        $success = false;
        $message = $result[1];
      }

    } else {
      $success = false;
      $message = $result[1];
    }

    $result[0] = $success;
    $result[1] = $message;

    disconnect($conn);

    return $result;

  }





  function removeResident($id) {

    $success = false;
    $message = '';

    $result = connect();
    if(!$result[0])
      return $result;
    $conn = $result[1];


    $result = getResidentRoom($id, $conn);
    if($result[0]) {
      
      $room = $result[1];
      $result = setResidentRoom($id, null, $room);

      if($result[0]) {
        
        $result = destroyResident($id, $conn);
        if($result[0]) {
          $success = true;
          $message = '';
        } else {

          $result = setResidentRoom($id, $room, $conn);
          if($result[0]) {
            $success = false;
            $message = 'Could not remove Resident.' . $result[1];
          } else {
            $success = false;
            $message = 'Could not remove Resident. Please contact support.' . $result[1];
          }

        }

      } else {
        $success = false;
        $message = $result[1];
      }

    } else {
      $success = false;
      $message = $result[1];
    }

    $result[0] = $success;
    $result[1] = $message;

    disconnect($conn);

    return $result;

  }




  function editResident($id, $givenName, $familyName) {

    $success = false;
    $message = '';

    $result = connect();
    if(!$result[0])
      return $result;
    $conn = $result[1];


    $result = setResident($id, $givenName, $familyName, $conn);

    if($result[0]) {
      $success = true;
      $message = '';
    } else {
      $success = false;
      $message = $result[1];
    }

    $result[0] = $success;
    $result[1] = $message;

    disconnect($conn);

    return $result;

  }



  function moveResident($id, $room) {

    $success = false;
    $message = '';

    $result = connect();
    if(!$result[0])
      return $result;
    $conn = $result[1];


    $result = getResidentRoom($id, $conn);
    if($result[0]) {

      $previousResidentRoom = $result[1];
      $result = setResidentRoom($id, null, $conn);

      if($result[0]) {

        $result = setResidentRoom($id, $room, $conn);

        if($result[0]) {
          $success = true;
          $message = '';
        } else {

          $message = $result[1];
          $result = setResidentRoom($id, $previousRoom, $conn);

          if($result[0]) {
            $success = false;
            $message = 'Could not move Resident.' . $result[1] . $message;
          } else {
            $success = false;
            $message = 'Could not move Resident. Please contact support.' . $result[1] . $message;
          }

        }


      } else {
        $success = false;
        $message = $result[1];
      }

    } else {
      $success = false;
      $message = $result[1];
    }

    $result[0] = $success;
    $result[1] = $message;

    disconnect($conn);

    return $result;

  }






  function viewResidents() {
    // TO DO
  }


?>
