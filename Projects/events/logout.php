<?php

   session_start();

   if(isset($_SESSION['login']))
   {
           session_destroy();
           ?>

           <script type="text/javascript">
           	
           	alert("you have sucessfully logged out!");
            window.location="adminlogin.php";
           </script>

           <?php

   }
   else
   {
          header('location:adminlogin.php');
   }
?>