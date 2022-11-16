<?php include "hheader.php"; ?> 
<link rel="stylesheet" href="signin.css">
<title>Registration Form</title>

	<div class="registrationbox">
		<h1>Registration Form</h1>
		
		<form action= "" method="post">
			<p>Username</p>
			<input type="text" name="username" placeholder="Enter Username" required="">
			<p>First Name</p>
			<input type="text" name="firstname" placeholder="Enter First Name" required="">
			<p>Last Name</p>
			<input type="text" name="lastname" placeholder="Enter Last Name" required="">
			<p>Class</p>
			<input type="text" name="class" placeholder="Class" required="">
			<br>
			<p>Gender</p>
            <br>
            <select name="gender">
                <option name= "gender" value="">Select Gender</option>
                <option name= "gender" value="f">Female</option>
                <option name= "gender" value="m">Male</option>
                <option name= "gender" value="o">Other</option>
            </select>
			<br>
			<p>Curriculum</p>
            <br>
            <select name="curriculum">
                <option name= "curriculum" value="">Select Curriculum</option>
                <option name= "curriculum" value="ev">English Version</option>
                <option name= "curriculum" value="em">English Medium</option>
                <option name= "curriculum" value="bm">Bangla Medium</option>
            </select>
			<br>
			<p>Guardian's Name</p>
			<input type="text" name="gname" placeholder="Guardian's name" required="">
            <!-- <br>
			<p>Region</p>
            <br>
             <select name="Area">
                <option value="">Select Area</option>
                <option value="Dhanmondi">Dhanmondi</option>
                <option value="Gulshan">Gulshan</option>
                <option value="Farmgate">Farmgate</option>
                <option value="Lalmatia">Lalmatia</option>
                <option value="Mohammadpur">Mohammadpur</option>
                <option value="Moghbazar">Moghbazar</option>
				<option value="Bashundhara">Bashundhara</option>
				<option value="Uttara">Uttara</option>

            </select> -->
            <br>
            <p>Address</p>
			<input type="text" name="address" placeholder="Enter Address" required="">
			<p>Guardian's Phone Number</p>
			<input type="number" name="gpnumber" placeholder="Enter Phone Number" required="">
			<p>Password</p>
			<input type="Password" name="password" placeholder="Enter Password" required="">
			<p>Confirm Password</p>
			<input type="Password" name="cpassword" placeholder="Re-enter Password" required="">
			<br>
			<input type="submit" name="submit" value="Sign Up"><br>
			
			Already have an account ?  <a href="signinp.php"> Click to Sign In</a>
		<br>
		<br>
		</form>
	<?php
	if(isset($_POST['submit']))
	{
	$username = $_POST['username'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$class = $_POST['class'];
	$gender = $_POST['gender'];
	$curriculum = $_POST['curriculum'];
	$gname = $_POST['gname'];
	$address = $_POST['address'];
	$gpnumber = $_POST['gpnumber'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];
	include "dbhinc.php";
	$username = test_input($_POST["username"]);
	$password = test_input($_POST["password"]);
	$duplicate = mysqli_query($con, "SELECT * FROM student_info WHERE username = '$username'");
    if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $username)) {
		echo '<script>alert("Invalid username format")</script>';
    }
	else if (count(explode(' ', $username)) > 1) {
		echo '<script>alert("Invalid username format")</script>';	  }
	else if(mysqli_num_rows($duplicate) > 0){
	  echo '<script>alert("Username Already Taken")</script>';
	}
	else if (!preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", $password)) {
		echo '<script>alert("Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.")</script>';

	}
	else if ($password != $cpassword){
	    echo '<script>alert("Passwords does not match")</script>';
	}
	else{
		$sql = "INSERT INTO student_info (username, first_name, last_name, class, gender, curriculum, guardian_name, address, guardian_number, password) VALUES ('$username','$firstname','$lastname','$class','$gender','$curriculum','$gname','$address','$gpnumber','$password');";
		
		mysqli_query($con, $sql);
		echo '<script>alert("Registration Successful!! Please Login")</script>';
?>
	  <Script>
	  window.location.href='signinp.php';
	  </Script> 
<?php
	}	
	}

	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	?>
	</div>