<!-- database connection  -->
<?php
include_once('./includes/connect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Delici</title>
    <!-- stylesheet  -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./test.css">
    <!-- <link rel="stylesheet" href="./test.css"> -->

    <!-- favicon  -->
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
    <link rel="icon" href="./images/favicon.png" type="image/x-icon">
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

</head>

<body>
    <!-- Main Header  -->
    <div class="header-container">
        <div class="top-header">
            <div class="top-header-info">
                <ul class="top-left">
                    <li>
                        <i class="icon fas fa-map-marker-alt" style="padding: 0; color:white; min-width:14px"></i>
                        Restaurant St, Delicious City, London 9578, UK
                    </li>
                    <li>
                        <i class="icon far fa-clock" style="padding: 0; color:white;"></i>
                        Daily : 8.00 am to 10.00 pm
                    </li>
                </ul>
                <ul class="top-right">
                    <li>
                        <a href="tel:+11234567890">
                            <i class="icon fas fa-phone" style="padding: 0; color:white;"></i>
                            +1 123 456 7890
                        </a>
                    </li>
                    <li>
                        <a href="mailto:booking@restaurant.com">
                            <i class="icon far fa-envelope" style="padding: 0; color:white;"></i>
                            booking@restaurant.com
                        </a>
                    </li>
                </ul>
            </div>


        </div>
        <div class="main-header">
            <div class="logo"><a href="index.html" title="Delici - Restaurants HTML Template"><img src="./images/logo.png" alt="" title="Delici - Restaurants HTML Template"></a></div>
            <nav class="nav-container">
                <a class="nav-link" href="#">Home</a>
                <a class="nav-link" href="#">Menu</a>
                <a class="nav-link" href="#">About Us</a>
                <a class="nav-link" href="#">Our Chefs</a>
                <a class="nav-link" href="#">Contact</a>
                </ul>
            </nav>
            <div class="button-container">
                <a href="" class="nav-button">
                    <button type="" class="theme-btn btn-style-one">
                        <span class="btn-wrap">
                            <span class="text-one">find a table</span>
                            <span class="text-two">find a table</span>
                        </span>
                    </button>
                </a>
                <!-- Hidden Nav Toggler -->
                <div class="info-toggler">
                    <button class="info-bar-opener">
                        <span class="hamburger">
                            <span class="top-bun"></span>
                            <span class="meat"></span>
                            <span class="bottom-bun"></span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Header  -->

    <!--Info Back Drop-->
    <div class="info-back-drop"></div>

    <!-- Hidden Bar -->
    <div class="info-bar">
        <div class="cross-icon"><span class="fa-solid fa-close"></span></div>
        <div class="logo-box"><a href="index.html" title="Delici - Restaurants HTML Template"><img src="./images/resource/sidebar-logo.png" alt="" title="Delici - Restaurants HTML Template"></a></div>
        <div class="image-box"><img src="./images/resource/sidebar-image.jpg" alt="" title=""></div>

        <nav class="nav-container">
            <a class="nav-link" href="#">Home</a>
            <a class="nav-link" href="#">Menu</a>
            <a class="nav-link" href="#">About Us</a>
            <a class="nav-link" href="#">Our Chefs</a>
            <a class="nav-link" href="#">Contact</a>
            </ul>
        </nav>

        <p class="side-heading">Visit Us</p>
        <p>Restaurant St, Delicious City, <br>London 9578, UK</p>
        <p>Open: 9.30 am - 2.30pm</p>
        <p><a href="mailto:booking@domainame.com">booking@domainame.com</a></p>

        <div class="separator"><span></span></div>
        <div class="booking-info">
            <div class="bk-title">Booking request</div>
            <div class="bk-no"><a href="tel:+88-123-123456">+88-123-123456</a></div>
        </div>
        <!-- </div> -->
    </div>
    <!--End Hidden Bar -->

    <!-- Inner Banner Section -->
    <section class="inner-banner">
        <div class="image-layer" style="background-image: url(./images/background/banner-image-2.jpg);"></div>
        <div class="auto-container">
            <div class="inner">
                <div class="subtitle"><span>delicious & amazing</span></div>
                <div class="pattern-image"><img src="./images/icons/separator.svg" alt="" title=""></div>
                <h1><span>Our Menu</span></h1>
            </div>
        </div>
    </section>
    <!--End Banner Section -->

    <!--Menu Section -->
    <!-- Appetizers section -->
    <section class="menu-section menu-two">
        <div class="right-bg"><img src="./images/background/bg-19.png" alt="" title=""></div>
        <p class="small-heading">STARTER MENU</p>
        <div class="pattern-image"><img src="./images/icons/separator.svg" alt="" title=""></div>
        <p class="section-heading">Appetizers</p>
        <div class="menu-container ">
            <!-- get all available menu in the category  -->
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
                $modal_id = $menu['menu_id']; // Unique ID for modal 
            ?>
                <!-- each menu card  -->
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
                </div>
                <!-- end of while loop  -->
            <?php
            }
            ?>
        </div>
    </section>
    <!-- end Appetizers section  -->

    <!-- Main Dishes section -->
    <section class="menu-section menu-two">
        <div class="left-bg"><img src="./images/background/bg-20.png" alt="" title=""></div>
        <p class="small-heading">FRESH & HYGINE</p>
        <div class="pattern-image"><img src="./images/icons/separator.svg" alt="" title=""></div>
        <p class="section-heading">Main Dishes</p>
        <div class="menu-container ">
            <!-- get all available menu in the category  -->
            <?php
            $root = "http://localhost/Delici-Client/";
            $category = 'Main Dishes';
            $select_query = "SELECT * FROM `menu-table` WHERE menu_category = '$category'";
            $result = mysqli_query($con, $select_query);
            while ($menu = mysqli_fetch_array($result)) {
                $title = $menu['menu_name'];
                $menu_speciality = $menu['menu_speciality'];
                $menu_price = $menu['menu_price'];
                $menu_category = $menu['menu_category'];
                $menu_image = $menu['menu_image'];
                $menu_description = $menu['menu_description'];
                $modal_id = $menu['menu_id']; // Unique ID for modal 
            ?>
                <!-- each menu card  -->
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
                </div>
                <!-- end of while loop  -->
            <?php
            }
            ?>
        </div>
    </section>
    <!-- End Main dishes section  -->

    <!-- Private events Section  -->
    <section class="private-events-container">
        <div class="private-events">
            <div class="inner">
                <p class="section-heading-two">private events</p>
                <p class="section-info">Book your special day with us to create a great memory to cherish forever.</p>
                <div class="separator"><span></span></div>
                <div class="booking-info">
                    <div class="bk-title">Booking request</div>
                    <div class="bk-no"><a href="tel:+88-123-123456">+88-123-123456</a></div>
                </div>
                <button type="" class="theme-btn btn-style-one">
                    <span class="btn-wrap">
                        <span class="text-one">book now</span>
                        <span class="text-two">book now</span>
                    </span>
                </button>
            </div>
        </div>
        <div class="image-section">
            <div class="image"><img src="./images/resource/featured-8.jpg" alt=""></div>
            <div class="image"><img src="./images/resource/featured-9.jpg" alt=""></div>
        </div>

    </section>
    <!-- End Private events Section  -->

    <!-- Banquet Hall Section  -->
    <section class="banquet-hall-container">
        <div class="image-section">
            <div class="image"><img src="./images/resource/featured-10.jpg" alt=""></div>
            <div class="image"><img src="./images/resource/featured-11.jpg" alt=""></div>
        </div>
        <div class="banquet-hall">
            <div class="inner">
                <p class="section-heading-two">banquet hall</p>
                <p class="section-info">Book your special day with us to create a great memory to cherish forever.</p>
                <div class="separator"><span></span></div>
                <div class="booking-info">
                    <div class="bk-title">Booking request</div>
                    <div class="bk-no"><a href="tel:+88-123-123456">+88-123-123456</a></div>
                </div>
                <button type="" class="theme-btn btn-style-one">
                    <span class="btn-wrap">
                        <span class="text-one">book now</span>
                        <span class="text-two">book now</span>
                    </span>
                </button>
            </div>
        </div>

    </section>
    <!-- End Banquet Hall Section  -->

    <!-- Desserts section -->
    <section class="menu-section menu-two">
        <div class="right-bg"><img src="./images/background/bg-22.png" alt="" title=""></div>
        <p class="small-heading">SWEET & SWEET</p>
        <div class="pattern-image"><img src="./images/icons/separator.svg" alt="" title=""></div>
        <p class="section-heading">Desserts</p>
        <div class="menu-container ">
            <!-- get all available menu in the category  -->
            <?php
            $root = "http://localhost/Delici-Client/";
            $category = 'Desserts';
            $select_query = "SELECT * FROM `menu-table` WHERE menu_category = '$category'";
            $result = mysqli_query($con, $select_query);
            while ($menu = mysqli_fetch_array($result)) {
                $title = $menu['menu_name'];
                $menu_speciality = $menu['menu_speciality'];
                $menu_price = $menu['menu_price'];
                $menu_category = $menu['menu_category'];
                $menu_image = $menu['menu_image'];
                $menu_description = $menu['menu_description'];
                $modal_id = $menu['menu_id']; // Unique ID for modal 
            ?>
                <!-- each menu card  -->
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
                </div>
                <!-- end of while loop  -->
            <?php
            }
            ?>
        </div>
    </section>
    <!-- Drinks Menu section -->
    <section class="menu-section menu-two">
        <div class="left-bg"><img src="./images/background/bg-23.png" alt="" title=""></div>
        <p class="small-heading">hot & cold</p>
        <div class="pattern-image"><img src="./images/icons/separator.svg" alt="" title=""></div>
        <p class="section-heading">Drinks Menu</p>
        <div class="menu-container ">
            <!-- get all available menu in the category  -->
            <?php
            $root = "http://localhost/Delici-Client/";
            $category = 'Drinks Menu';
            $select_query = "SELECT * FROM `menu-table` WHERE menu_category = '$category'";
            $result = mysqli_query($con, $select_query);
            while ($menu = mysqli_fetch_array($result)) {
                $title = $menu['menu_name'];
                $menu_speciality = $menu['menu_speciality'];
                $menu_price = $menu['menu_price'];
                $menu_category = $menu['menu_category'];
                $menu_image = $menu['menu_image'];
                $menu_description = $menu['menu_description'];
                $modal_id = $menu['menu_id']; // Unique ID for modal 
            ?>
                <!-- each menu card  -->
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
                </div>
                <!-- end of while loop  -->
            <?php
            }
            ?>
        </div>
    </section>

    <div class="footer">
        <div class="top-footer">
            
        </div>
    </div>

    <!-- js  -->
    <!-- <script src="./js/custom.js"></script> -->
    <script src="./test.js"></script>

    <!-- <script src="./js/modal.js"></script> -->
    <!-- jquery  -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- preloader js  -->
    <script src="./js/preloarder.js"></script>
    <!-- bootstrap js  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>