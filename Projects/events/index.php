

	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="shortcut icon" href="img/fav.jpg">
	    <meta charset="UTF-8">
	 <title> College Events Management </title>
            <link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/main.css">
	</head>
		<body>
            <header class="default-header">
				<div class="container">
					<div class="header-wrap">
						<div class="header-top d-flex justify-content-between align-items-center">
							<div class="logo">
								<a href="#home"><img src="img/logo.png" height="88px" width="200px" alt="Invalid_Location"></a>
							</div>
							<div class="main-menubar d-flex  align-items-center">
								<nav class="hide">
									<a href="#home">Home</a>
									<a href="#upcoming">Events</a>
									<a href="adminlogin.php">Admin Login</a>
									<a href="memberlogin.php">Member Login</a>   
								</nav>
								<div class="menu-bar"><span class="lnr lnr-menu"></span></div>
							</div>
						</div>
					</div>

					<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Apply for Membership</button>
					    
				</div>
			</header>
			<!-- End Header Area -->

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>
				<div class="container">
						<div class="row fullscreen align-items-center justify-content-center" style="height: 915px;">
							
						</div>
					
				</div>
			</section>
			<!-- End banner Area -->
<div class="modal" id="myModal">
  <div class="modal-dialog" >
    <div class="modal-content" style="width: 700px;">

      <!-- Modal Header -->
      <div class="modal-header" >
        <h4 class="modal-title">MemberShip Form</h4>
        <button type="submit"  class="close" data-dismiss="modal">&times;</button>
      </div>
	  <br>
             
			 <div class="container"> 
                      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  <div class="form-group row">
    <label for="fname" class="col-sm-2 col-form-label">First Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="fname" name="fname" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="lname" class="col-sm-2 col-form-label">Last Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="lname" name="lname" required="required" >
    </div>
  </div>
    <div class="form-group row">
    <label for="rn" class="col-sm-2 col-form-label">Roll Number</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="rn" name="rn" required="required" >
    </div>
  </div>
  <div class="form-group row">
    <label for="dept" class="col-sm-2 col-form-label">Department </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="dept" name="dept" required="required" >
    </div>
  </div>
  <div class="form-group row">
    <label for="dept" class="col-sm-2 col-form-label">Year </label>
    <div class="col-sm-10">
      <input type="radio" name="year" value="FE"> FE &nbsp; &nbsp; <input type="radio" name="year" value="SE"> SE &nbsp;&nbsp; <input type="radio" name="year" value="TE" > TE &nbsp;&nbsp; <input type="radio" name="year" value="BE" > BE 
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label">Email </label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email" name="email" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="amount" class="col-sm-2 col-form-label">Mobile Number </label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="mobile" name="mobile"  required="required">
    </div> 	
  </div>
  <div class="form-group row">
    <label for="amount" class="col-sm-2 col-form-label">Amount </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="amount" name="amount" value="350" readonly="readonly">
    </div>
  </div>
   <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" name="submit" class="btn btn-success btn-lg">Save</button>
    </div>
  </div>
        </form>     
		</div>			 
    </div>
  </div>
</div>
			<!-- End facilities Area -->

<?php
  
   

    
   include_once('config.php');
    if(isset($_POST['submit']))
    {
       $rn = $_POST["rn"];
       
       $sql = "INSERT INTO applymembers(firstname,lastname,roll_number,department,year,email,mobile,amount)
        VALUES ('".$_POST["fname"]."','".$_POST["lname"]."','".$_POST["rn"]."','".$_POST["dept"]."','".$_POST["year"]."','".$_POST["email"]."','".$_POST["mobile"]."','".$_POST["amount"]."')";
    
     $query = mysqli_query($con,$sql);

     if($query)
     {
     	?>

     	<script type="text/javascript">
     		alert(" Thankyou for applying for membership ");
     		window.location="token.php?id=<?php echo $rn ?>";
     	</script>

     	<?php
     }
     else
     {
     	?>

     	<script type="text/javascript">
     		alert(" Something went wrong <?php echo "".mysqli_error($con) ?> ");
     		window.location="index.php";
     	</script>

     	<?php
     	
     }
    }

?>


			<!-- Start events Area -->
			<section class="events-area section-gap" id="upcoming">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-8 pb-80 header-text">
							<h1>Upcoming Events</h1>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing <br> labore  et dolore magna aliqua.
							</p>
						</div>
					</div>
					<div class="row no-padding">
						<div class="col-lg-6 col-sm-6">
							<div class="single-events row no-padding">
								<div class="col-lg-4 ">
									<img src="img/e4.jpg" alt="">
								</div>
								<div class="col-lg-7 details">
									<a href="#">
										<h4>PUBG</h4>
									</a>
									<p>
										inappropriate behavior Lorem ipsum dolor sit amet, consectetur.
									</p>
									<p class="meta"><span class="lnr lnr-heart"></span> <span class="likes">50 likes</span> <span class="lnr lnr-bubble"></span> <span class="likes">30 comments</span></p>
								</div>
							</div>
					    </div>
						<div class="col-lg-6 col-sm-6">
							<div class="single-events row no-padding">
								<div class="col-lg-4 ">
									<img src="img/e4.jpg" alt="">
								</div>
								<div class="col-lg-7 details">
									<a href="#">
										<h4>Mini-Militia</h4>
									</a>
									<p>
										inappropriate behavior Lorem ipsum dolor sit amet, consectetur.
									</p>
									<p class="meta"><span class="lnr lnr-heart"></span> <span class="likes">05 likes</span> <span class="lnr lnr-bubble"></span> <span class="likes">06 comments</span></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End events Area -->
 
<footer>
	
     <div id="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="copyright">
						<p>
						  <span>&copy; All right reserved. design by RAIT student under guidance of Madhav vyas sir </span>
						</p>
					</div>
				</div>
				<div class="col-lg-6">
					<ul class="social-network">
						<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
        <br>
	</div>
    
 </footer>	

	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="js/cdnpopper.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
	<script src="js/main.js"></script>
		</body>
	</html>
