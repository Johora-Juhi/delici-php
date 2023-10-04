<?php
include_once('./includes/connect.php');
// Check if 'selected_date' is set in the POST request
if (isset($_POST['selected_date'])) {
    $selected_date = $_POST['selected_date'];

    // Now you can use the $selected_date variable in your PHP code
    // echo 'Received input value: ' . $selected_date;

    $select_reservation = "SELECT * FROM `reservation_table` where reservation_date = '$selected_date' ";
    echo $select_reservation;
    $result = mysqli_query($con, $select_reservation);
    $count = mysqli_num_rows($result);
    echo "count" . $count;

    while($reservation= mysqli_fetch_assoc($result)){
        $slot= $reservation['slot_id'];
        $update_query = "UPDATE `slots` SET is_available = 0 where slot_id= $slot";
        $result_update = mysqli_query($con, $update_query);
    }

    // Add your additional PHP code here to process the selected date
    // For example, update the database or perform other operations.
} else {
    echo 'No date selected.';
}
