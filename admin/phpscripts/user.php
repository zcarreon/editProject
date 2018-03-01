<?php
  function createUser($fname, $username, $password, $email, $userLV){
    include("connect.php");
    $userString = "INSERT INTO tbl_user VALUES(NULL, '{$fname}', '{$username}', '{$password}', '{$email}', DEFAULT, '{$userLV}', 'no', DEFAULT)";
    $userQuery = mysqli_query($link, $userString);
    if($userQuery){
      redirect_to("admin_index.php");
    }else{
      $message = "<h3>There was a problem registering this user. Please contact Emergency Services.</h3>";
      return $message;
    }
    mysqli_close($link);
  }

  function editUser($id, $fname, $username, $password, $email){
      include("connect.php");
      $updateString = "UPDATE tbl_user SET user_fname = '{$fname}', user_name = '{$username}', user_pass = '{$password}', user_email = '{$email}', user_flogin = 'false' WHERE user_id = '{$id}'";
      //echo $updateString;
      $updatequery = mysqli_query($link, $updateString);
      if($updatequery){
        redirect_to("admin_index.php");
      }else{
        $message = "There was a problem changing your information, lease contact your web admin.";
        return $message;
      }
      mysqli_close($link);
  }

  function deleteuser($id) {
    //echo $id;
    include("connect.php");
    $delstring = "DELETE FROM tbl_user WHERE user_id={$id}";
    $delquery = mysqli_query($link, $delstring);
    if($delquery){
      redirect_to("../admin_index.php");
    }else{
      $message = "F%*k, HE'S UNKILLABLE!";
      return $message;
    }
  }
?>
