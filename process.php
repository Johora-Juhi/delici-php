<?php
include_once('./includes/connect.php');
// Check if 'selected_date' is set in the POST request
if (isset($_POST['selected_date'])) {
    $selected_date = $_POST['selected_date'];

    // Now you can use the $selected_date variable in your PHP code
    // echo 'Received input value: ' . $selected_date;

    $select_reservation = "SELECT * FROM `slots` WHERE NOT EXISTS ( SELECT * FROM `reservation_table` WHERE `reservation_table`.`reservation_date` = '$selected_date' AND `reservation_table`.`slot_id` = `slots`.`slot_id` ); ";
    // echo $select_reservation;
    $result = mysqli_query($con, $select_reservation);
    while ($menues = mysqli_fetch_assoc($result)) {
                $id = $menues['slot_id'];
                $slot = $menues['slot_time'];
                echo "<option value='$id'>$slot</option>";
            }

    // while($reservation= mysqli_fetch_assoc($result)){
    //     $slot= $reservation['slot_id'];
    //     $select_query = "SELECT * FROM `slots` WHERE slot_id != $slot";
    //     $result_options = mysqli_query($con, $select_query);
    //     $row_num = mysqli_num_rows($result_options);
    //     while ($menues = mysqli_fetch_assoc($result_options)) {
    //         $id = $menues['slot_id'];
    //         $slot = $menues['slot_time'];
    //         echo "<option value='$id'>$slot</option>";
    //     }
    //     // $update_query = "UPDATE `slots` SET is_available = 0 where slot_id= $slot";
    //     // $result_update = mysqli_query($con, $update_query);
    // }

    // Add your additional PHP code here to process the selected date
    // For example, update the database or perform other operations.
} else {
    echo 'No date selected.';
}
