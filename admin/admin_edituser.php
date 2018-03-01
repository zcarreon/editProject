<?php
  //ini_set('display_errors',1); //for MAC
  //error_reporting(E_ALL);
  require_once("phpscripts/config.php");
  //confirm_logged_in();
  $id = $_SESSION['user_id'];
  //echo $id;
  $tbl = "tbl_user";
  $col = "user_id";
  $popForm = getSingle($tbl, $col, $id);
  $found_user = mysqli_fetch_array($popForm, MYSQLI_ASSOC);
  //echo $found_user;

  if(isset($_POST["submit"])){
    $fname = trim($_POST["fname"]);
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);
    $email = trim($_POST["email"]);
    $result = editUser($id, $fname, $username, $password, $email);
    $message = $result;
  }
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Create a User</title>
<link href="css/main.css" rel="stylesheet">
</head>
<body>
  <h1>Welcome, User. You can Edit your Account Here.</h1>
  <?php
    if(!empty($message)){
      echo $message;
    }
  ?>
  <form action="admin_edituser.php" method="post">
    <label>First Name:</label>
    <input type="text" name="fname" placeholder="First Name" value="<?php echo $found_user['user_fname'];?>">
    <br>
    <label>Username:</label>
    <input type="text" name="username" placeholder="Username" value="<?php echo $found_user['user_name'];?>">
    <br>
    <label>Password:</label>
    <input type="text" name="password" placeholder="Password" value="<?php echo $found_user['user_pass'];?>">
    <br>
    <label>Email:</label>
    <input type="text" name="email" placeholder="Email" value="<?php echo $found_user['user_email'];?>">
    <br>
    <input type="submit" name="submit" value="Update Information">
  </form>
</body>
</html>
