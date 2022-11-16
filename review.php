<?php session_start(); ?>
<?php include "header.php"; 
?>
<link rel="stylesheet" href="review.css">
<body>
	      <!--------- Start Reviews -------->
		  <div class="customer-reviews-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>User Reviews</h2>
						<p>"Clear feedback is the foundation of progress."</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 mr-auto ml-auto text-center">
					<div id="reviews" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner mt-4">
							<?php include "dbhinc.php";
							$s = mysqli_query($con,"select * from review  limit 10");	
							 while($r = mysqli_fetch_array($s))
							 {
							 ?>
							<div class="carousel-item text-center ">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="quotations-button.png" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">
									<?php echo $r['name']; ?>
								</strong></h5>

								<h6 class="text-dark m-0">Daycare name : <?php echo $r['dn']; ?></h6>
								<h6 class="text-dark m-0">Review : <?php echo $r['review']; ?></h6>
							</div>
						<?php } ?>
							<div class="carousel-item text-center active">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="quotations-button.png" alt="">
								</div>
								
							</div>
							
						</div>
						<a class="carousel-control-prev" href="#reviews" role="button" data-slide="prev">
							<i class="fa fa-angle-left" aria-hidden="true"></i>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#reviews" role="button" data-slide="next">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
							<span class="sr-only">Next</span>
						</a>
                    </div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Customer Reviews -->
	<!-- Start All Pages -->
	<center> <img src="feedback.jpg" style="background-color: red"> </center>
	<!-- End All Pages -->
	
	<!-- Start Contact -->
	
	<div class="contact-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
				<div class="heading-title text-center">
						<br>
						<h1>Service excellence is our primary goal.</h1>
						<br>
						<h1>Review Daycare</h1>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
					<form  action="" method="post">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<!-- <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required data-error="Please enter your name"> -->
									<div class="help-block with-errors"></div>
								</div>                                 
							</div>
								<div class="col-md-12">
								<div class="form-group"> 
  <select class="custom-select d-block form-control" id="guest" name="dn" required data-error="Please Select Daycare">>
    <option disabled selected>-- Select Daycare --</option>
    <?php
        include "dbinc.php";  // Using database connection file here
        $records = mysqli_query($con, "SELECT name From daycare");  // Use select query here 

        while($data = mysqli_fetch_array($records))
        {
            echo "<option value='". $data['name'] ."'>" .$data['name'] ."</option>";  // displaying data in option menu
        }	
    ?>  
  </select>
								</div>
								<div class="col-md-12">
								<div class="form-group">
									<select class="custom-select d-block form-control" id="guest" name="rev" required data-error="Please Select Option">
									<option disabled selected>-- Your Review --</option>  
									<option value="Excellent">Excellent</option>
									  <option value="Good">Good</option>
									  <option value="Poor">Poor</option>
									  <option value="Very Poor">Very Poor</option>
									  
									</select>
									<div class="help-block with-errors"></div>
								</div> 
							</div>
								<div class="submit-button text-center">
									<button name="sb" class="btn btn-common" id="submit" type="submit">Add Review</button>
									<div id="msgSubmit" class="h3 text-center hidden"></div> 
									<div class="clearfix"></div> 
								</div>
							</div>
						</div>            
					</form>
					<?php
					if(isset($_POST['sb']))
					{
						$nm =  $_SESSION['username'];
						$rev = $_POST['rev'];
						$des = $_POST['dn'];
						include "dbhinc.php";
						mysqli_query($con,"insert into review(name, review, dn) values('$nm','$rev','$des')");
						echo '<script>alert("Review added")</script>';
						}	

					?>
				</div>
			</div>
		
		</div>
	</div>
