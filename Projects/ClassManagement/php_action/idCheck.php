<?php include_once("core.php");
  include_once("database.php"); 

 if(isset($_POST) & !empty($_POST))
  {
    $studentId =  $_POST['studentId'];
    
    $sql = "SELECT * from addmissionDetails where student_id = '$studentId'";

    $result = mysqli_query($con,$sql);

    $count = mysqli_num_rows($result);

    if($count > 0){
        echo "<span style='color: red; font-size: 12px;'> Hey!  Student ID ="." ".$studentId." "." already exist </span>";
    }
    else if($count == 0)
    {
        if(empty($studentId) || $studentId == "")
        {
           echo "<span style='color: red; font-size: 12px;'> Student Id cannot be empty!. </span>";
        }
        else
        {
           
          if(preg_match("/^[0-9]{2}[A-Z]{2}[0-9]{4}/",$studentId))
          {

            echo "<span style='color: green; font-size: 12px;'> Student ID = "." ".$studentId." "." Is Available  </span>"; 
            
          }
          else
          {
            echo "<span style='color: red; font-size: 12px;'> Invalid Student Id Format!. eg. 18CI**** </span>";
          }
        }
    }

  }

 ?>