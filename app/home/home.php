<?php 
session_start();
$root_dir = __DIR__.'/../../';
include $root_dir.'config/init.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V6</title>
	
</head>
<body>
	
	<h3>This is home page</h3>
	<br>
	<?php 
	   print_r($_SESSION['user_id']);
	?>
		<br>
  		<a href="<?php echo ROOT_PATH?>app/auth/logout.php">Logout</a>
</body>
</html>