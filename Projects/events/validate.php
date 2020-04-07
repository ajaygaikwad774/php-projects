<?php
  


include_once('config.php');

if(isset($_POST['submit']))
{
    $username = $_POST['username'];

    $password = $_POST['password'];
    
    
    $sql = "select * from adminlogindetails where username = '$username' and password = '$password' ";
    
    $result = mysqli_query($con,$sql);
                
   
   $row = mysqli_fetch_array($result);

	
  
    if($row['username'] == $username && $row['password'] == $password)
    {
        
        if(!isset($_SESSION['login']))
        {
          session_start();
          $_SESSION['login'] = true;
          header('location:adminprofile.php');
        }
        else
        {
            header('location:adminprofile.php');
        } 
    }
    else
    {
    	?>

    	<script type="text/javascript">
    		window.location ="adminlogin.php?id=2";
    	</script>

    	<?php
    }
}
?>