<?php session_start();
 include "adheader.php";
require 'dbhinc.php';

if(isset($_POST["adlogin"])){
  $adminname = $_POST["adminname"];
  $adpassword = $_POST["adpassword"];
  $result = mysqli_query($con, "SELECT * FROM admininfo WHERE adminname = '$adminname'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($adpassword == $row['adpassword']){
      $_SESSION["login"] = true;
      $_SESSION["adminname"] = $row["adminname"];
	  if(!empty($_POST["remember"]))
	  {
		  setcookie ("adminname",$adminname,time()+ (1 * 60 *60));
		  setcookie ("adpassword",$adpassword,time()+ (1 * 60 *60));
		  header("Location: admin.php");
	  }
	  else{
	  setcookie ("adminname","");
	  setcookie ("adpassword","");
	  ?>
	  <script> window.location.href= 'admin.php'; </script>; <?php
	  }
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('Invalid Username'); </script>";
  }
}
?>
<link rel="stylesheet" href="admin.css">
<head>
	<title>Admin Login</title>
</head>
<body>
	</header>
	<div class="adminbox">
		<h1>Admin Login</h1>
		<form action= "" method="post">
			<p>Username</p>
			<input type="text" name="adminname" placeholder="Enter Username" required="" value= "<?php if (isset($_COOKIE["adminname"])) {echo $_COOKIE["adminname"];} ?>">
			<p>Password</p>
			<input type="Password" name="adpassword" placeholder="Enter Password" required="" value= "<?php if (isset($_COOKIE["adpassword"])) {echo $_COOKIE["adpassword"];} ?>">
			<center>Remember Me</center>
			 <input type="checkbox" name="remember">
			<input type="submit" name="adlogin" value="Login"><br>
			<!-- <a href="#">Forgot password ?</a><br> -->
			If you are an user, <a href="signinp.php">Click here.</a>
			<br>
			</form>
	 </body>
		</form>
	</div>
</body>