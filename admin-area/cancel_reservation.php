<?php

if(isset($_GET['cancel_reservation'])){
    $id = $_GET['cancel_reservation'];
    $cancel_reservation= "UPDATE `reservation_table` SET book_status='Canceled' where reservation_id = $id";
    $result_product = mysqli_query($con,$cancel_reservation);
    if($result_product){
        echo '
        <script>
            Swal.fire({
                title: "Success!",
                text: "Canceled successfully!",
                icon: "success",
            });
        </script>';
        echo "<script>window.open('./index.php?all-reservation','_self')</script>";
    }
}
?>