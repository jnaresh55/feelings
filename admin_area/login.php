<?php
session_start();
include("includes/db.php");
?>

<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<title>Admin Panel</title>
<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
<h2>ADMIN PANEL </h2>

<div class="cont">
  
  <div class="form">
    <form method="post" action="">
      <h1>Admin Login</h1>
      <input type="text"
             class="user"
			 name="admin_email"
             placeholder="Username" required="required"/>
      <input type="password" 
             class="pass"
			 name="password"
             placeholder="Password" required="required"/>
      <input type="submit" name="login"  class="login" value="Login" />
    </form>
  </div>
  
</div>
</body>
</html>

<?php
if(isset($_POST['login'])){
	
	$user_email = $_POST['admin_email'];
	$user_pass = $_POST['password'];
	
	$sel_admin = "select * from admin where admin_email='$user_email' AND admin_pass='$user_pass'";
	
	$run_admin = mysqli_query($con, $sel_admin);
	
	$check_admin = mysqli_num_rows($run_admin);
	
	if($check_admin==1){
		
		$_SESSION['admin_email']=$user_email;
		
		echo "<script>window.open('index.php','_self')</script>";
	}
	else{
		echo "<script>alert('Admin Email or Password is incorrect, try again')</script>";
	}
}

?>