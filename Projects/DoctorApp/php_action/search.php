<?php
include_once("database.php");
if (isset($_POST) & !empty($_POST)) {


    $time_slot = mysqli_real_escape_string($con, $_POST['time_slot']);

    $selectSql = "SELECT * from appointment where time_slot = '$time_slot'";

    $result = mysqli_query($con, $selectSql);

    $count = mysqli_num_rows($result);

    if ($count > 0) {
        $counter = 0;
        echo ' <div class="container-fluid">
                <!-- Table -->
                <div class="row">
                    <div class="col">
                        <div class="card">

                            <!-- Light table -->
                            <div class="table-responsive">
                                <table class="table align-items-center table-flush table-hover">
                                    <thead class="thead-light">
                                        <tr>
                                            <th> Sr No.</th>
                                            <th>Name</th>
                                            <th>Mobile Number</th>
                                            
                                            <th>Time Slot</th>
                                            <th>Booking Date</th>
                                            <th>Booking Time</th>
                                            <th> Status </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         ';
        while ($row = mysqli_fetch_assoc($result)) {
            $counter = $counter + 1;
            echo '
                                            <tr>
                                               <td> ' . $counter . '</td>
                                               <td> ' . $row['name'] . '</td>
                                               <td>' . $row['mobile'] . '</td>
                                               <td>' . $row['time_slot'] . '</td>
                                               <td>' . date('d/m/Y', strtotime($row['booking_date'])) . '</td>
                                               <td>' . $row['booking_time'] . '</td>
                                               <td><span  '; if($row['status'] == 0) { echo ' class="text-success" >●</span> 
                                               <b>Inside</b> '; } else { echo ' class="text-danger" > ● </span> 
                                                <medium> Outside </medium> '; } echo '
                                               </td>
                                            </tr>
                                            ';
        }
        echo '
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
    } else if ($count == 0) {
        $value = "Details Not Found";
        echo '
        <div class="container-fluid">
                <!-- Table -->
                <div class="row">
                    <div class="col">
                        <div class="card">
                        <br>
                             <div class="alert" style="background-color:lightblue; color:black;" ><button style="color:green;" type="button" class="close" data-dismiss="alert">&times;</button>' . $value . '</div>
                        </div>
                    </div>
                </div>     
        </div>';
    }
}

?>

<html>

</html>