<?php  
     include_once("core.php");
     include_once("database.php");
      
      if(isset($_POST["student_id"]))  
      {

      $id = $_POST["student_id"];
      $query = "select * from addmissiondetails where id = '$id'";
      $result = mysqli_query($con, $query);  
      $row = mysqli_fetch_array($result); 
      echo json_encode($row);

      }

 ?>