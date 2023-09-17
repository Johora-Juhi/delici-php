<?php
$con = mysqli_connect('localhost', 'root','', 'delici');
if (!$con) {
    die(mysqli_error($con));
}
