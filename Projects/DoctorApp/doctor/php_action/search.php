<?php
include_once("database.php");
if (isset($_POST) & !empty($_POST)) {


    $time_slot = mysqli_real_escape_string($con, $_POST['time_slot']);

    $selectSql = "SELECT * from appointment where time_slot = '$time_slot'";

    $result = mysqli_query($con, $selectSql);

    $count = mysqli_num_rows($result);

    if ($count > 0) {
        $counter = 0;
        echo '

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
                                               <td> <button type="button" id='.$row['id'].' class="btn btn-info edit_data" ';  if($row['status'] == 0) { 
                                                   echo ' style="background-color:red"  disabled > ON '; } else { echo ' > OFF '; } echo ' </button> </td>
                                            </tr>
                                            ';
        }
        echo '
                                    </tbody>
                                </table>
                    
                
            </div>';
    } else if ($count == 0) {
        $value = "Details Not Found";
        echo '
                 <div class="alert" style="background-color:lightblue; color:black;" ><button style="color:green;" type="button" class="close" data-dismiss="alert">&times;</button>' . $value . '</div>
                
              ';
    }
}

?>
