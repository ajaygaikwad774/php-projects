<?php include_once("core.php");
  include_once("database.php");


  if(!empty($_POST))
  {
       $sid = $_POST['sid'];
       $name = $_POST['full_name'];
       $totalFee = $_POST['totalFees'];
       $takeFee = $_POST['paidFees'];
       $balanceFee = $_POST['balanceFees'];
       $dof = $_POST['dof'];
       $remark = $_POST['remark'];

       $sql = "insert into fee_section(sid,name,totalFee,takeFee,balanceFee,dof,remark)
            values('$sid','$name','$totalFee','$takeFee','$balanceFee','$dof','$remark')";

       $insertQuery = mysqli_query($con,$sql);

       $selectSql = "select takeFee from fee_section where sid='$sid'";

       $result = mysqli_query($con, $selectSql);

       while($row = mysqli_fetch_array($result))  
       {  
      	 $sum = $sum + $row['takeFee']; 
       }
       
       $updateSql = "UPDATE addmissiondetails set paidFees = '$sum', balanceFees = '$balanceFee' 
                      where id = '$sid' ";
       
       $updateQuery = mysqli_query($con,$updateSql);

  }

 ?>

