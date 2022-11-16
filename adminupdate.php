<?php session_start(); ?>

<?php include "adheader.php"; ?> 
<?php include "lsindex.php"; ?> 
<link rel="stylesheet" href="admin.css">
<title>Update Daycare </title>

<body>
    <div class="adminbox">
		<h1>Update Daycare</h1>
		
		<form action="" method="post">
			<p>Daycare id</p>
			<input type="number" name="dc_id" placeholder="Enter Day Care id" required="">
			<p>Daycare Name</p>
			<input type="text" name="dname" placeholder="Enter Day Care name" required="">
			<br>
			<p>Phone Number</p>
			<input type="number" name="number" placeholder="Phone Number" >
           
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
			<input type="text" name="address" placeholder="Enter current/updated Address" required="" >

			<br>
			
			<input type="submit" name="update_stud_data" value="Submit"><br>
			
			
		<br>
		</form>


		<?php
	if(isset($_POST['update_stud_data']))
	{
		$id = $_POST['dc_id'];
		$daycarename = $_POST['dname'];
		
		$phonenumber = $_POST['number'];
		$region = $_POST['Area'];
		$address = $_POST['address'];
		
		
	include "dbhinc.php";
	$query = "UPDATE daycare SET  name='$daycarename', phone='$phonenumber',  address='$address', region='$region' WHERE id='$id'";
	$query_run = mysqli_query($con, $query);
	
	if($query_run)
	{
		echo '<script>alert("Updated successfully!!")</script>';
	}
	}
	?>
	</div>

</body>