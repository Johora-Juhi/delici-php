<!-- database connection  -->
<?php
include_once('./includes/connect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delici - Restaurant</title>
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
    <!-- swiper Slider  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
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
                <a class="nav-link active" href="./">Home</a>
                <a class="nav-link" href="./menu.php">Menu</a>
                <a class="nav-link" href="./about-us.php">About Us</a>
                <a class="nav-link" href="./our-chef.php">Our Chefs</a>
                <a class="nav-link" href="./contact.php">Contact</a>
                </ul>
            </nav>
            <div class="button-container">
                <a href="./reservation.php" class="nav-button"> <button type="" class="theme-btn btn-style-one">
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
            <a class="nav-link active" href="./">Home</a>
            <a class="nav-link" href="./menu.php">Menu</a>
            <a class="nav-link" href="./about-us.php">About Us</a>
            <a class="nav-link" href="./our-chef.php">Our Chefs</a>
            <a class="nav-link" href="./contact.php">Menu</a>
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
    <div class="banner-container">
        <div class="banner-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide-item">
                    <div class="image-layer" style="background-image: url(./images/main-slider/slider-1.jpg);"></div>
                    <div class="content">
                        <div class="subtitle"><span>delightful experience</span></div>
                        <div class="pattern-image"><img src="images/icons/separator.svg" alt="" title=""></div>
                        <h1><span>Flavors Inspired by <br>the Seasons</span></h1>
                        <div class="text">Come with family &amp; feel the joy of mouthwatering food</div>
                        <a href="menu-list.php" class="theme-btn btn-style-two">
                            <span class="btn-wrap">
                                <span class="text-one">view our menu</span>
                                <span class="text-two">view our menu</span>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide slide-item">
                    <div class="image-layer" style="background-image: url(./images/main-slider/slider-2.jpg);"></div>
                    <div class="content">
                        <div class="subtitle"><span>amazing & delicious</span></div>
                        <div class="pattern-image"><img src="images/icons/separator.svg" alt="" title=""></div>
                        <h1><span>Where every flavor <br>tells a story</span></h1>
                        <div class="text">Come with family &amp; feel the joy of mouthwatering food</div>
                        <a href="menu-list.php" class="theme-btn btn-style-two">
                            <span class="btn-wrap">
                                <span class="text-one">view our menu</span>
                                <span class="text-two">view our menu</span>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide slide-item">
                    <div class="image-layer" style="background-image: url(./images/main-slider/slider-3.jpg);"></div>
                    <div class="content">
                        <div class="subtitle"><span>Tradational & Hygine</span></div>
                        <div class="pattern-image"><img src="images/icons/separator.svg" alt="" title=""></div>
                        <h1><span>Flavors Inspired by <br>the Seasons</span></h1>
                        <div class="text">For the love of <br>delicious food</div>
                        <a href="menu-list.php" class="theme-btn btn-style-two">
                            <span class="btn-wrap">
                                <span class="text-one">view our menu</span>
                                <span class="text-two">view our menu</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="swiper-button-prev"><span class="fa-solid icon fa-angle-left"></span></div>
                <div class="swiper-button-next"><span class="fa-solid icon fa-angle-right"></span></div>
        </div>
        <div class="book-btn"><a href="reservation.php" class="theme-btn"><span class="icon"><img src="images/resource/book-icon-1.png" alt="" title=""></span><span class="txt">book a table</span></a></div>
    </div>
    <!--End Banner Section -->

    <!-- We Offer top notch  -->
<div class="offer-container">
    <div class="small-heading">FLAVORS FOR ROYALTY</div>
    <div class="pattern-image"><img src="./images/icons/separator.svg" alt="" title=""></div>
    <div class="section-heading">we offer top notch</div>
    <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum has been the industrys standard dummy text ever.</div>
</div>

    <!-- quote section  -->


    <!-- meet our chef   -->
    <div class="meet-chef-container">
        <div class="left-bg"><img src="./images/background/bg-27.png" alt="" title=""></div>
        <div class="small-heading">EXPERIENCED TEAM</div>
        <div class="pattern-image"><img src="./images/icons/separator.svg" alt="" title=""></div>
        <div class="section-heading">Meet Our Chef</div>
        <div class="team-container">
            <div class="team-block">
                <div class="image">
                    <img src="images/resource/team-1.jpg" alt="">
                    <div class="overlay-box">
                        <div class="overlay-inner">
                            <!-- Social Box -->
                            <ul class="social-box">
                                <li><a href="https://www.facebook.com/" class="fab fa-facebook-f"></a></li>
                                <li><a href="https://www.twitter.com/" class="fab fa-twitter"></a></li>
                                <li><a href="https://dribbble.com/" class="fab fa-dribbble"></a></li>
                                <li><a href="https://www.linkedin.com/" class="fab fa-linkedin"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="heading-three"><a href="#">Willium Joe</a></div>
                <div class="designation">Master chef</div>
                <div class="text">Lorem Ipsum is simply dummy printing and typeset industry lorem Ipsum has been the industrys.</div>
            </div>
            <div class="team-block">
                <div class="image">
                    <img src="images/resource/team-2.jpg" alt="">
                    <div class="overlay-box">
                        <div class="overlay-inner">
                            <!-- Social Box -->
                            <ul class="social-box">
                                <li><a href="https://www.facebook.com/" class="fab fa-facebook-f"></a></li>
                                <li><a href="https://www.twitter.com/" class="fab fa-twitter"></a></li>
                                <li><a href="https://dribbble.com/" class="fab fa-dribbble"></a></li>
                                <li><a href="https://www.linkedin.com/" class="fab fa-linkedin"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="heading-three"><a href="#">Steave Den</a></div>
                <div class="designation">Master chef</div>
                <div class="text">Lorem Ipsum is simply dummy printing and typeset industry lorem Ipsum has been the industrys.</div>
            </div>
            <div class="team-block">
                <div class="image">
                    <img src="images/resource/team-3.jpg" alt="">
                    <div class="overlay-box">
                        <div class="overlay-inner">
                            <!-- Social Box -->
                            <ul class="social-box">
                                <li><a href="https://www.facebook.com/" class="fab fa-facebook-f"></a></li>
                                <li><a href="https://www.twitter.com/" class="fab fa-twitter"></a></li>
                                <li><a href="https://dribbble.com/" class="fab fa-dribbble"></a></li>
                                <li><a href="https://www.linkedin.com/" class="fab fa-linkedin"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="heading-three"><a href="#">Lily Sopy</a></div>
                <div class="designation">Master chef</div>
                <div class="text">Lorem Ipsum is simply dummy printing and typeset industry lorem Ipsum has been the industrys.</div>
            </div>
        </div>

    </div>

    <!-- Footer section  -->
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