<?php
session_start();
 include "hheader.php";
require 'dbhinc.php';

if(isset($_POST["login"])){
  $username = $_POST["username"];
  $password = $_POST["password"];
  $result = mysqli_query($con, "SELECT * FROM student_info WHERE username = '$username'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["username"] = $row["username"];?>
	  <Script>
	  window.location.href='index2.php';
	  </Script> 
<?php if(!empty($_POST["remember"]))
	  {
		setcookie ("username",$username,time()+ (1 * 60 *60));
		  setcookie ("password",$password,time()+ (1 * 60 *60));
	  }
	  else{
	  setcookie ("username","");
	  setcookie ("password","");
	  }

    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}
?>
<link rel="stylesheet" href="signin.css">
<head>
	<title>Student Login</title>
</head>
<body>
	</header>
	<div class="registrationbox">
		<h1>Student Login</h1>
		<form action= "" method="post">
			<p>Username</p>
			<input type="text" name="username" placeholder="Enter Username" required="" value= "<?php if (isset($_COOKIE["username"])) {echo $_COOKIE["username"];} ?>">
			<p>Password</p>
			<input type="Password" name="password" placeholder="Enter Password" required="" value= "<?php if (isset($_COOKIE["password"])) {echo $_COOKIE["password"];} ?>">
			<center>Remember Me</center>
			 <input type="checkbox" name="remember">
			<input type="submit" name="login" value="Login"><br>
			New at KIDCARE? <a href="signup.php">Click to SignUp.</a><br>
			If you are an admin, <a href="adlogin.php">Click here.</a>
			<br>
			</form>
	 </body>
		</form>
	</div>
</body>