<?php

if(isset($_GET['delete_menu'])){
    $delete_id = $_GET['delete_menu'];

    echo $delete_id;
    $delete_menu= "DELETE From `menu-table` where menu_id = $delete_id";
    $result_product = mysqli_query($con,$delete_menu);
    if($result_product){
        // echo "<script>alert('Product deleted')</script>";
        echo "<script>window.open('./index.php?all-menu','_self')</script>";
    }
}
?>