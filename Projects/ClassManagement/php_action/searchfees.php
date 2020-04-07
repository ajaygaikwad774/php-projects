<?php include_once("core.php");
  include_once("database.php"); 

 if(isset($_POST) & !empty($_POST))
  {
    $studentId =  $_POST['studentId'];
    $sql = "SELECT * from addmissionDetails where student_id = '$studentId'";
    
    $query = mysqli_query($con,$sql);
    $result = mysqli_fetch_array($query);

    $id = $result['id'];
    $student_id = $result['student_id'];
    $name = $result['first_name']." ".$result['last_name'];
    $courses = $result['courses'];
    $totalFees = $result['totalFees'];
    $paidFees = $result['paidFees'];
    $balanceFees = $result['balanceFees'];

    $count = mysqli_num_rows($query);

    if($count > 0){
        echo '<table class="table  table-striped table-bordered table-responsive" > 
               <tr>
                <th> Student ID </th>
                <th>  Name </th>
                <th>  Course Details </th>
                <th> Total Fees </th>
                <th> Paid Fees </th>
                <th> Balance Fees </th> 
                <th> Pay Fees </th> 
               </tr> 
               <tr>
                <td> '.$student_id.'</td>
                <td> '.$name.'</td>
                <td> '.$courses.'</td>
                <td> '.$totalFees.'</td>
                <td> '.$paidFees.'</td>
                <td> '.$balanceFees.'</td>
                <td> <button class="btn btn-success edit_data" type="submit" data-toggle="modal" data-target="#exampleModal" id='.$id.'> Take Fees </button></td>
               </tr>
              </table>';
    }
    else if($count == 0)
    {
        if(empty($studentId) || $studentId == "")
        {
           echo "<span style='color: red; font-size: 12px;'> Student Id cannot be empty!. </span>";
        }
        else
        {
          $value = "Student ID Not Found";
          echo '<div class="alert" style="background-color:lightblue; color:black;" ><i class="mdi mdi-alert-circle" style="color:black;" ></i><button style="color:green;" type="button" class="close" data-dismiss="alert">&times;</button>'.$value.'</div>';
          
        }
    }

  }

 ?>