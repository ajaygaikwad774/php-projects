<?php

   session_start();

   if(isset($_SESSION['login']))
   {
           session_destroy();
           $_SESSION['login'] = false;
           ?>

           <script type="text/javascript">
           	
           	alert("you have sucessfully logged out!");
            window.location="memberlogin.php";
           </script>

           <?php

   }
   else
   {
          header('location:memberlogin.php');
   }
?>