<?php

session_start();

if(!isset($_SESSION['login']))
{
    $_SESSION['redirectURL'] =  $_SERVER['REQUEST_URI'];
    header('location:adminlogin.php');
}

include_once('config.php');

if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $q = " DELETE FROM applymembers WHERE id = '$id' ";
    
    if(mysqli_query($con, $q))
    {
    	?>
    	<script type="text/javascript">
    		 alert("record deleted successfully");
    		 window.location="adminprofile.php";
    	</script>

    	<?php
    }
}

?>
