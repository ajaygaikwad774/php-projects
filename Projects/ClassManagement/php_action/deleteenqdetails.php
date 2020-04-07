<?php include_once("core.php");
  include_once("database.php");
 ?>
<?php
       
        $id = $_GET['delete_id'];

        $sql = "delete from enquiry_details where id = '$id' ";
        $query= mysqli_query($con,$sql);
        
        if($query){
          
          header("location:../enqdetail.php");
           
        }
        
       
        
?>