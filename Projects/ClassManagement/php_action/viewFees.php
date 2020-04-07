<?php  
     include_once("core.php");
     include_once("database.php");
      
      if(isset($_POST["student_id"]))  
      {
      $output = ''; 
      $id = $_POST["student_id"];
      $query = "select * from fee_section where sid = '$id'";
      $result = mysqli_query($con, $query);   
       
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">
           <tr>
              <th> Name </th>
              <th> Paid Fee </th>
              <th> Date Of Installment</th>
              <th> Remark </th>
           </tr>
           ';

      while($row = mysqli_fetch_array($result))  
      {  
 
           $output .= '  
                <tr> 
                     <td width="10%">'.$row["name"].'</td>
                     <td width="70%">'.$row["takeFee"].'</td>  
                     <td width="70%">'.$row["dof"].'</td>
                     <td width="70%">'.$row["remark"].'</td>
                </tr>  
                ';  
      }  
      $output .= "</table> </div> <br>";  
      echo $output;


      }

 ?>