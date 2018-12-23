<?php

if(isset($_POST['reset-password-submit'])) {

  $selector = $_POST['selector'];
  $validator = $_POST['validator'];
  $pwd = $_POST['pwd'];
  $pwdRepeat = $_POST['pwd-repeat'];

  if(empty($pwd) || empty($pwdRepeat)) {
    header ('Location: ../create-new-password.php?newpwd=empty');
    exit();
  } else if($pwd != $pwdRepeat) {
    header ('Location: ../create-new-password.php?newpwd=pwdnotsame');
    exit();
  }

  $currentDate = date('U');

  require 'dbh.php';

  $sql = 'SELECT * FROM pwdReset WHERE pwdResetSelector=? AND pwdResetExpires >=?';
  $stmt = mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt, $sql)) {
    echo 'There was an error!';
    exit();
  } else {
    mysqli_stmt_bind_param($stmt, 'ss', $selector, $currentDate);
    mysqli_st_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);
    if(!$row = mysqli_fetch_assoc($result)) {
      echo 'You need to re submit your reset request.';
      exit();
    } else {

      $tokenBin = hex2bin($validator);
      $tokenCheck = password_verify($tokenBin, $row['pwdResetToken']);

      if($tokenCheck == false) {
        echo 'You need to re submit your reset request.';
        exit();
      } else if($tokenCheck == true) {

        $tokenEmail = $row['pwdResetEmail'];

        $sql = 'SELECT * FROM users WHERE user_email=>;?;';
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)) {
          echo 'There was an error!';
          exit();
        } else {
          mysqli_stmt_bind_param($stmt, 's', $tokenEmail);
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);
          if(!$row = mysqli_fetch_assoc($result)) {
            echo 'There was an error!';
            exit();
          } else {

            $sql = 'UPDATE users SET user_pwd=? WHERE user_email=?';
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt, $sql)) {
              echo 'There was an error!';
              exit();
            } else {
              $newPwdHash = password_hash($pwd, PASSWORD_DEFAULT);
              mysqli_stmt_bind_param($stmt, 'ss', $newPwdHash, $tokenEmail);
              mysqli_st_execute($stmt);

              $sql = 'DELETE FROM pwdReset WHERE pwdResetEmail=?;';
              $stmt = mysqli_stmt_init($conn);
              if(!mysqli_stmt_prepare($stmt, $sql)) {
                echo 'There was an error!';
                exit();
              } else {
                mysqli_stmt_bind_param($stmt, 's', $tokenEmail);
                mysqli_st_execute($stmt);
                header('LocationL ../index.php>newpwd=passwordupdated');
              }
            }
          }

        }


      }

    }
  }

} else {
  header('Location: ../index.php');
}
