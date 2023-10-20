<!-- database connection  -->
<?php
include_once('./includes/connect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delici - Reservation</title>
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
    <!-- datepicker  -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(function() {
            $("#datepicker").datepicker();
        });
    </script>
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
                <a class="nav-link" href="./">Home</a>
                <a class="nav-link" href="./menu.php">Menu</a>
                <a class="nav-link" href="./about-us.php">About Us</a>
                <a class="nav-link" href="./our-chef.php">Our Chefs</a>
                <a class="nav-link" href="./contact.php">Contact</a>
                <a class="nav-link active" href="./reservation.php">Booking</a>
                </ul>
            </nav>
            <div class="button-container">
                <a href="./user_area/user-login.php" class="nav-button"> <button type="" class="theme-btn btn-style-one">
                        <span class="btn-wrap">
                            <span class="text-one">login</span>
                            <span class="text-two">login</span>
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
            <a class="nav-link" href="./">Home</a>
            <a class="nav-link" href="./menu.php">Menu</a>
            <a class="nav-link" href="./about-us.php">About Us</a>
            <a class="nav-link" href="./our-chef.php">Our Chefs</a>
            <a class="nav-link" href="./contact.php">Contact</a>
            <a class="nav-link" href="./reservation.php">Booking</a>
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
        <div class="image-layer" style="background-image: url(./images/background/banner-image-3.jpg);"></div>
        <div class="auto-container">
            <div class="inner">
                <div class="subtitle"><span>book your table</span></div>
                <div class="pattern-image"><img src="./images/icons/separator.svg" alt="" title=""></div>
                <h1><span>reservation</span></h1>
            </div>
        </div>
    </section>
    <!--End Banner Section -->
    <!--wrapper Section-->
    <div class="inner-page">
        <div class="left-bg"><img src="images/background/bg-5.png" alt="" title=""></div>
        <div class="right-bg"><img src="images/background/bg-6.png" alt="" title=""></div>
        <!-- reservation section  -->
        <div class="reservation">
            <div class="inner">
                <div class="small-heading">reservation</div>
                <div class="pattern-image"><img src="./images/icons/separator.svg" alt="" title=""></div>
                <div class="section-heading">
                    book a table
                </div>
                <div class="text">Restaurant will be open for all days, Sunday night will be closed, All booking payment is secured with credit card, no charges will be aplly for online booking. no refundable.</div>
                <p class="booking-info">Booking request <a href="tel:+88-123-123456">+88-123-123456</a> or fill out the order form</p>
                <form method="post" class="book-table-form">
                    <div class="input-group">
                        <div class="input-inner">
                            <i class="far fa-user icon"></i>
                            <select class="input-field input-select" name="person" id="" style="padding-left: 45px;">
                                <option value="1">1 Person</option>
                                <option value="2">2 Person</option>
                                <option value="3">3 Person</option>
                                <option value="4">4 Person</option>
                                <option value="5">5 Person</option>
                                <option value="6">6 Person</option>
                                <option value="7">7 Person</option>
                            </select>
                        </div>
                        <div class="input-inner">
                            <i class="far fa-calendar icon"></i>
                            <input type="text" class="input-field datepicker" id="datepicker" name="selected_date" placeholder="DD-MM-YYYY" readonly style="padding-left: 45px;">
                            <span class="fas fa-angle-down icon arrow-icon"></span>
                        </div>
                        <div class="input-inner">
                            <i class="far fa-clock icon"></i>
                            <select class="input-field input-select" name="slot" id="" style="padding-left: 45px;">
                                <option value="1">1 Person</option>
                                <option value="2">2 Person</option>
                                <option value="3">3 Person</option>
                                <option value="4">4 Person</option>
                                <option value="5">5 Person</option>
                                <option value="6">6 Person</option>
                                <option value="7">7 Person</option>
                            </select>
                        </div>
                        <div class="input-inner">
                            <button type="submit" class="form-btn btn-style-one" name="book-table" id="submit_btn" style="box-sizing: border-box;">
                                <span class="btn-wrap">
                                    <span class="text-one">book a table</span>
                                    <span class="text-two">book a table</span>
                                </span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- map section  -->
        <div class="map-container">
            <div class="map-section">
                <div class="contact-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d81392.11276571127!2d-74.03116502768826!3d40.70144849986174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sin!4v1667928043843!5m2!1sen!2sin" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="contact-us">
                    <div class="inner">
                        <div class="section-heading">new york</div>
                        <div class="contact-info">
                            <div class="heading">Contact us</div>
                            <div class="text">Restaurant St, Delici City, <br> London 9578, UK <br>
                                Call : <a href="tel:+88-123-123456">+88-123-123456</a> <br> Email : <a href="mailto:booking@domainname.com">booking@domainname.com</a>
                            </div>
                        </div>
                        <div class="separator"><span></span></div>
                        <div class="lunch-time">
                            <div class="heading">lunch time</div>
                            <div class="text">Monday to Sunday <br>
                                11.00 am - 2.30pm</div>
                        </div>
                        <div class="dinner-time">
                            <div class="heading">dinner time</div>
                            <div class="text">Monday to Sunday <br>
                                5.30 pm - 11.30 pm</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- location section  -->
        <div class="location-container">
            <div class="location-box">
                <div class="icon-box"><img src="./images/resource/ny.png" alt=""></div>
                <div class="section-heading-four">new york</div>
                <div class="text">Restaurant St, Delicious City, NY. <br>
                    +88-123-123456 <br>
                    booking@domainname.com</div>
                <div class="more-link"><a href="">get direction</a></div>
            </div>
            <div class="location-box">
                <div class="icon-box"><img src="./images/resource/dubai.png" alt=""></div>
                <div class="section-heading-four">dubai</div>
                <div class="text">520, Delicious City, Revenu Db. <br>
                    +88-123-123456 <br>
                    booking@domainname.com</div>
                <div class="more-link"><a href="">get direction</a></div>
            </div>
            <div class="location-box">
                <div class="icon-box"><img src="./images/resource/paris.png" alt=""></div>
                <div class="section-heading-four">paris</div>
                <div class="text">589, Delicious Avenue PS. <br>
                    +88-123-123456 <br>
                    booking@domainname.com</div>
                <div class="more-link"><a href="">get direction</a></div>
            </div>
            <div class="location-box">
                <div class="icon-box"><img src="./images/resource/toronto.png" alt=""></div>
                <div class="section-heading-four">toronto</div>
                <div class="text">Restaurant St, Delicious City, CA. <br>
                    +88-123-123456 <br>
                    booking@domainname.com</div>
                <div class="more-link"><a href="">get direction</a></div>
            </div>
        </div>
    </div>
    <!-- End wrapper Section  -->

    <!-- =============================================
 Footer section  
=====================================================-->
    <div class="footer">
        <div class="image-layer"></div>
        <div class="top-footer">
            <div class="info-box">
                <div class="inner">
                    <div class="logo"><a href="index.php" title="Delici - Restaurants HTML Template"><img src="./images/logo.png" alt="" title="Delici - Restaurants HTML Template"></a></div>
                    <div class="info">
                        <ul>
                            <li>Restaurant St, Delicious City, London 9578, UK</li>
                            <li><a href="mailto:booking@domainname.com">booking@domainname.com</a></li>
                            <li><a href="tel:+88-123-123456">Booking Request : +88-123-123456</a></li>
                            <li>Open : 09:00 am - 01:00 pm</li>
                        </ul>
                    </div>
                    <div class="separator">
                        <span></span><span></span><span></span>
                    </div>
                    <div class="subscribe">
                        <div class="heading-three">
                            Get News & Offers
                        </div>
                        <div class="text">Subscribe us &amp; Get <span>25% Off.</span></div>
                    </div>
                    <form action="" class="subscribe-form">
                        <div class="input-group">
                            <div class="input-icon">
                                <i class="icon far fa-envelope"></i>
                                <input name="email" type="email" class="input-field" placeholder="Your email" style="padding-left: 45px;">
                            </div>
                            <button type="submit" class="btn-style-one" name="subscribe" id="submit_btn">
                                <span class="btn-wrap">
                                    <span class="text-one">subscribe</span>
                                    <span class="text-two">subscribe</span>
                                </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="nav-box">
                <ul class="nav-container">
                    <li class="nav-link"><a href="">Home</a></li>
                    <li class="nav-link"><a href="">Menus</a></li>
                    <li class="nav-link"><a href="">About Us</a></li>
                    <li class="nav-link"><a href="">Our Chefs</a></li>
                    <li class="nav-link"><a href="">Contact</a></li>
                </ul>
            </div>
            <div class="nav-box last">
                <ul class="nav-container">
                    <li class="nav-link"><a href="#">facebook</a></li>
                    <li class="nav-link"><a href="">instagram</a></li>
                    <li class="nav-link"><a href="">twitter</a></li>
                    <li class="nav-link"><a href="">you tube</a></li>
                    <li class="nav-link"><a href="">google maps</a></li>
                </ul>
            </div>
        </div>
        <div class="bottom-footer">
            <div class="copyright">© 2023 Delici Restaurent. All Rights Reserved </div>
        </div>
    </div>

    <!-- js  -->
    <script src="./js/custom.js"></script>
    <!-- <script src="./test.js"></script> -->

    <!-- <script src="./js/modal.js"></script> -->
    <!-- jquery  -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->

    <!-- preloader js  -->
    <script src="./js/preloarder.js"></script>
    <!-- bootstrap js  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>