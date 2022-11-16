<?php session_start(); ?>

<?php include "adheader.php"; ?> 
<link rel="stylesheet" href="admin.css">
<title>New Daycare Alert</title>

<body>

    <div class="adminbox">
		<h1>New Daycare Input</h1>
		
		<form action="" method="post">
			<p>Daycare Name</p>
			<input type="text" name="dname" placeholder="Enter Day Care name" required="">
			<p>Class</p>
			<input type="text" name="class" placeholder="Class" required="">
			<br>
			<p>Curriculum</p>
            <br>
            <select name="curriculum">
                <option name= "curriculum" value="">Select Curriculum</option>
                <option name= "curriculum" value="English Version">English Version</option>
                <option name= "curriculum" value="English Medium">English Medium</option>
                <option name= "curriculum" value="Bangla Medium">Bangla Medium</option>
            </select>
			<br>
			<p>Phone Number</p>
			<input type="number" name="number" placeholder="Phone Number" required="">
           
			<p>Region</p>
            <br>
            <select name="Area">
                <option name= "Area"  value="">Select Area</option>
                <option name="Area" value="Dhanmondi">Dhanmondi</option>
                <option name="Area" value="Gulshan">Gulshan</option>
                <option name="Area" value="Farmgate">Farmgate</option>
                <option name="Area" value="Lalmatia">Lalmatia</option>
                <option name="Area" value="Mohammadpur">Mohammadpur</option>
                <option name="Area" value="Moghbazar">Moghbazar</option>
				<option name="Area" value="Bashundhara">Bashundhara</option>
				<option name="Area" value="Uttara">Uttara</option>
				<option name="Area" value="Banasree">Banasree</option>
            </select>
            
            <br>
            <p>Address</p>
			<input type="text" name="address" placeholder="Enter Address" required="">
			<br>
			<p>Address in Maps</p>
			<input type="text" name="addressinmap" placeholder="Enter current/updated map location" required="" >
			<br>
			<p>Monthly Fees</p>
			<input type="number" name="mofees" placeholder="Enter monthly fees" required="">
			<br>
            <p>Admission Fees</p>
			<input type="number" name="adfees" placeholder="Enter admission fees" required="">
			<br>
			<input type="submit" name="submit" value="Submit"><br>
			
			
		<br>
		</form>

		<?php
	if(isset($_POST['submit']))
	{
		$daycarename = $_POST['dname'];
		$class = $_POST['class'];
		$curriculum = $_POST['curriculum'];
		$phonenumber = $_POST['number'];
		$region = $_POST['Area'];
		$address = $_POST['address'];
		$addressinmap = $_POST['addressinmap'];
		$monthlyfee = $_POST['mofees'];
		$admissionfee = $_POST['adfees'];
		$website = $_POST['website'];
	include "dbhinc.php";
	$duplicate = mysqli_query($con, "SELECT * FROM daycare WHERE name = '$daycarename'");
	if(mysqli_num_rows($duplicate) > 0){
	  echo '<script>alert("Daycare Already exist")</script>';
	}else{
		$sql = "INSERT INTO daycare (name, class, curriculum, website, phone,  address,addressinmap, region, monthfee, admissionfee) 
		VALUES ('$daycarename','$class','$curriculum','$website','$phonenumber','$address','$addressinmap','$region','$monthlyfee','$admissionfee');";
		
		mysqli_query($con, $sql);
	echo '<script>alert("Input Successful!!")</script>';
	}	
	}
	?>
	</div>


</body>