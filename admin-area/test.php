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
    <link rel="stylesheet" href="../css/global.css">
    <!-- <link rel="stylesheet" href="../css/style.css"> -->
    <!-- favicon  -->
    <link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon">
    <link rel="icon" href="../images/favicon.png" type="image/x-icon">
    <!-- bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- fontawosome  -->
    <!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet" /> -->
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
    <link rel="stylesheet" href="./text.css">

</head>

<body>

    <div class="">
        <p class="small-heading">All available menu</p>
        <div class="pattern-image"><img src="../images/icons/separator.svg" alt="" title=""></div>
        <p class="section-heading">Appetizers</p>

        <div class="menu-container">
            <?php
            $root = "http://localhost/Delici-Client/";

            $category = 'Appetizers';
            $select_query = "SELECT * FROM `menu-table` WHERE menu_category = 'Desserts'";
            $result = mysqli_query($con, $select_query);
            while ($menu = mysqli_fetch_array($result)) {
                $title = $menu['menu_name'];
                $menu_speciality = $menu['menu_speciality'];
                $menu_price = $menu['menu_price'];
                $menu_category = $menu['menu_category'];
                $menu_image = $menu['menu_image'];
                $menu_description = $menu['menu_description'];
                // echo $title;
            ?>
                <div class="menu">
                    <div class="menu-box">
                        <div class="menu-image"><img src="<?= $root ?>uploads/<?= $menu_image ?>" alt=""></div>
                        <div class="menu-info">
                            <div class="title">
                                <p class="menu-title"><?= $title ?> </p>
                                <span class="divider"></span>
                                <p class="price">$<?= $menu_price ?></p>
                            </div>
                            <p class="menu-desc"><?= $menu_description ?></p>
                        </div>
                    </div>
                    <button id="open-btn" class="hover-button btn-style-one">
                        <span class="btn-wrap">
                            <span class="text-one">add menu</span>
                            <span class="text-two">add menu</span>
                        </span>
                    </button>
                    <!-- Modal Background and Modal -->
                    <div id="modal-background">
                        <div id="modal">
                            <span id="close-btn">&times;</span>
                            <p><?= $title ?></p>
                            <div class="buttons">
                                <button class="yes">
                                    YES
                                </button>
                                <button class="no">
                                    NO
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            <?php
            }
            ?>
        </div>

        <!-- Modal Open Button -->
        <button>
            OPEN THE MODAL
        </button>


    </div>


    <!-- js  -->
    <script src="../js/custom.js"></script>
    <!-- <script src="../js/modal.js"></script> -->
    <!-- jquery  -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- preloader js  -->
    <script src="../js/preloarder.js"></script>
    <!-- bootstrap js  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>