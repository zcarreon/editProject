<?php
	require_once('phpscripts/config.php');
	confirm_logged_in();
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Welcome to your admin panel</title>
</head>
<body>
	<?php echo $_SESSION['user_name'];  ?>
	<a href="admin_usercreate.php">Create User</a>
	<a href="admin_edituser.php">Edit User</a>
	<a href="admin_deleteuser.php">Delete a User</a>
	<a href="admin_login.php">Sign Out</a>
</body>
</html>
