
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="shortcut icon" href="img/fav.jpg">
	    <meta charset="UTF-8">
	 <title> Member Login </title>
            <link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/main.css">
			
		<script type="text/javascript">

                 function preventBack()
                 {
                     window.history.forward();
                 }
                 setTimeout("preventBack()",0);

                window.onunload = function() { null   };
        </script>
</head>
<body>
    <header class="default-header">
				<div class="container">
					<div class="header-wrap">
						<div class="header-top d-flex justify-content-between align-items-center">
							<div class="logo">
								<a href="#home"><img src="img/logo.png" height="88px" width="200px" alt="Invalid_Location"></a>
							</div>
							<div class="main-menubar d-flex align-items-center">
								<nav class="hide">
									<a href="index.php#home">Home</a>
									<a href="index.php#upcoming">Events</a>
									<a href="adminlogin.php">Admin Login</a>
									<a href="memberlogin.php">Member Login</a>
                                </nav>
								<div class="menu-bar"><span class="lnr lnr-menu"></span></div>
							</div>
						</div>
					</div>
				</div>
	</header>
		
 <section >
      
<br>
<br>  
<br>
<br>  
<br>
<br>      
   <div class="container py-5">
     <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 mx-auto">

                    <!-- form card login -->
                    <div class="card rounded-0 border-success">
                        <div class="card-header border-success">
                            <h3 class="mb-0 text-center">Member Login</h3>
                        </div>
                        <div class="card-body">
                            <form action= "authenticate.php" class="form" role="form"  id="formLogin"  method="POST">
                                <div class="form-group">
                                    <label for="uname1"><span class="text-capitalize fa fa-user-circle-o fa-lg "> Username </span>  </label>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="uname" id="uname"  required="required">

                                </div>
                                <div class="form-group">
                                    <label for="pwd1"><span class="text-capitalize fa fa-key fa-lg"> Password </span> </label>
                                    <input type="password" class="form-control form-control-lg rounded-0" name="pass" id="pass" required autocomplete="new-password" required="required">
                                    
                                </div>
                                <div>
                                    <label class="custom-control custom-checkbox">
                                      <input type="checkbox" class="custom-control-input">
                                      <span class="custom-control-indicator"></span>
                                      <span class="custom-control-description small text-dark">Remember me on this computer</span>
                                    </label>
                                </div>
                                <button type="submit" name="submit" class="btn btn-success btn-lg float-right" id="btnLogin">Login</button>
                            </form>
                        </div>
                        <!--/card-block-->
                    </div>
                    <!-- /form card login -->

                </div>


            </div>
            <!--/row-->

        </div>
        <!--/col-->
    </div>
    <!--/row-->
</div>
<!--/container-->
      
</section>

<script src="js/vendor/jquery-2.2.4.min.js"></script>
<script src="js/cdnpopper.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/main.js"></script>

</body>
</html>
