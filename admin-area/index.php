<!-- database connection  -->
<?php
include_once('../includes/connect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Delici</title>
    <!-- stylesheet  -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- <link rel="stylesheet" href="../css/style.css"> -->
    <!-- favicon  -->
    <link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon">
    <link rel="icon" href="../images/favicon.png" type="image/x-icon">
    <!-- bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- fontawosome  -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <!-- sweetalert  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.min.css">
    <!-- <link rel="stylesheet" href="sweetalert2.min.css"> -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.all.min.js"></script>
    <!-- <script src="sweetalert2.all.min.js"></script> -->

</head>

<body>

    <div>
        <!-- Preloader -->
        <!-- <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">x</div>
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="D" class="letters-loading">
                                D
                            </span>
                            <span data-text-preloader="E" class="letters-loading">
                                E
                            </span>
                            <span data-text-preloader="L" class="letters-loading">
                                L
                            </span>
                            <span data-text-preloader="I" class="letters-loading">
                                I
                            </span>
                            <span data-text-preloader="C" class="letters-loading">
                                C
                            </span>
                            <span data-text-preloader="I" class="letters-loading">
                                I
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Preloader End -->
        <div class="main-container">
            <div class="dashboard-container">
                <!-- side-nav  -->
                <div class="sidebar">
                    <div class="logo"><a href="../index.php" title="Delici - Restaurants HTML Template"><img src="../images/logo.png" class="text-light" alt="" title="Delici - Restaurants HTML Template"></a></div>
                    <ul class="navbar-container">
                        <li>
                            <a  class="nav-list" href="./index.php?add-menu" style=" text-decoration:none; color: #a2a2a2;">
                            <i class="fa-solid fa-utensils" style="color: #e4c590;"></i>
                            <p>Add Menu</p>
                            </a>
                            
                        </li>
                        <li class="nav-list">
                            <i class="fa-solid fa-plate-wheat" style="color: #e4c590;"></i>
                            <a href="">All Menu</a>
                        </li>
                        <li class="nav-list">
                            <i class="fa-solid fa-list-check" style="color: #e4c590;"></i>
                            <a href="">All Reservation</a>
                        </li>
                        <!-- <li class="nav-list">All Menu</li>
                        <li class="nav-list">All Reservation</li> -->
                        <li class="nav-list"></li>
                        <li></li>
                    </ul>
                </div>
                <!-- main-content  -->
                <div class="main-content">
                    <div class="dashboard-header">
                        <p class="dash">Dashboard</p>
                    </div>
                    <div class="all-content">
                        <?php
                        if (isset($_GET['add-menu'])) {
                            include_once('./add-menu.php');
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <!-- js  -->
    <script src="../js/custom.js"></script>
    <!-- jquery  -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- preloader js  -->
    <script src="../js/preloarder.js"></script>
    <!-- bootstrap js  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>