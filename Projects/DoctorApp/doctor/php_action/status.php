<?php 

include_once("database.php");
if ($_POST) {
    
      $id = $_POST["appointment_id"];
      $sql = "update appointment set status = 0  where id = '$id' ";
      $query = mysqli_query($con, $sql);

                if ($query) {
                    echo "updated";
                } else if (!$query) {
                   echo "failed";
                }
      
} 
  
?>