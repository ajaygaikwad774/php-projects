<?php include_once("core.php");
  include_once("database.php");
 ?>
<?php
       
        $id = $_GET['deleteId'];
        
        $sql = "delete from addmissiondetails where student_id = '$id' ";
        $query= mysqli_query($con,$sql);
        
        if($query){ 
          unlink("../images/photos/".$_GET['picture']);
          header("location:../adddetail.php");
        }
        
       
        
?>