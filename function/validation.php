<?php

  function validateInput($data, $name) {

    $success = false;
    $message = '';

    if(empty($data)) {
      $success = false;
      $message = $name . ' cannot be empty.';
    } else {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);

      $success = true;
      $message = $data;
    }

    $result[0] = $success;
    $result[1] = $message;

    return $result;

  }

?>
