
<?php 
          

if(!$_GET['id'] == null)
{
      $token = $_GET['id'];

      include_once('config.php');

      $sql= "select id,firstname,lastname,year,roll_number,amount from applymembers where roll_number = '$token'";
          
      $query = mysqli_query($con, $sql) ;

      $row  = mysqli_fetch_array($query);

 }
 else
 {
    header("location:index.php");
 }

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title> Transaction-id = 1232345766 </title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="lib/bootstrap.css" rel="stylesheet" />
	  <!-- CUSTOM STYLE  -->
    <link href="css/custom-style.css" rel="stylesheet" />
    <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css' />


       <script type="text/javascript">
    function printpage() {
        //Get the print button and put it into a variable
        var printButton = document.getElementById("printpagebutton");
        var  backButton = document.getElementById("back");
        //Set the print button visibility to 'hidden' 
        printButton.style.visibility = 'hidden';
        backButton.style.visibility = 'hidden';
        //Print the page content
        window.print()
        //Set the print button to 'visible' again 
        //[Delete this line if you want it to stay hidden after printing]
        printButton.style.visibility = 'visible';
        backButton.style.visibility = 'visible';
    }


</script>
</head>
<body>
 <div class="container">
     
      <div class="row pad-top-botm ">
         <div class="col-lg-6 col-md-6 col-sm-6 ">
            <img src="img/logo.png" style="padding-bottom:20px; height: 200px; width: 350px; " /> 
         </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
            
               <strong> Ramrao Adik Institute of Technology  </strong>
              <br />
                  <i>Address :</i>Sector 7, Nerul,  
              <br />
                  Navi Mumbai - 400706,
              <br />
                  Maharashtra.
              
         </div>
     </div>
     <div  class="row text-center contact-info">
         <div class="col-lg-12 col-md-12 col-sm-12">
             <hr />
             <span>
                 <strong>Email : </strong>  rait@rait.ac.in
             </span>
             <span>
                 <strong>Call : </strong>  +91 22 27709574 
             </span>
              <span>
                 <strong>Fax : </strong>   +91 22 27709573 
             </span>
             <hr />
         </div>
     </div>
     <div  class="row pad-top-botm client-info ">
         <div class="col-lg-6 col-md-6 col-sm-6" style="padding-bottom:20px;">
         <h4>  <strong>Membership Details</strong> </h4>
           <strong> <b> Name : </b>  <?php echo $row['firstname']."".$row['lastname']; ?> </strong>
          <br />
          <b> Roll Number : <?php echo $row['roll_number']; ?> </b> 
         </div>
         
          <div class="col-lg-6 col-md-6 col-sm-6">
            
               <h4>  <strong>Payment Details </strong></h4>
                      <b>Membership Fees :  350 RS. </b>
              <br />
         </div>
     </div>
     <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12">
           <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th> Sr. No.</th>
                                    <th> Roll Number  </th>
                                    <th> Name </th>
                                    <th> Year </th>
                                     <th>Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><?php echo $row['roll_number']; ?></td>
                                    <td><?php echo $row['firstname']."".$row['lastname']; ?></td>
                                    <td><?php echo $row['year']; ?> </td>
                                    <td> <?php echo $row['amount']." Rs"; ?> </td>
                                </tr>
                                
                                
                            </tbody>
                        </table>
               </div>
             <hr />
             <div class="ttl-amts">
               <h5>  <strong> Total Amount : 350 Rs </strong> </h5>
             </div>
         </div>
     </div>
       <br>
       <br>
      <div class="row">
         <div class="col-lg-8 col-md-8 col-sm-8">
            <strong> Accountant Signature </strong> 
         </div>

      </div>
     
      <div class="row pad-top-botm">
         <div class="col-lg-12 col-md-12 col-sm-12">
             <hr />
          <a href="#" class="btn btn-primary btn-lg" id="printpagebutton" onclick="printpage()"  >Print Token</a>
             &nbsp;&nbsp;&nbsp;
              <a href="index.php" id="back" class="btn btn-success btn-lg" >Back</a>

             </div>
         </div>
 </div>

</body>
</html>
