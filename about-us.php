<!-- database connection  -->
<?php
include_once('./includes/connect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us - Delici</title>
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
    <!-- owl carousel  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <!-- Include Owl Carousel JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

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
            <a class="nav-link" href="#">Home</a>
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
    <section class="inner-banner">
        <div class="image-layer" style="background-image: url(./images/background/banner-image-1.jpg);"></div>
        <div class="auto-container">
            <div class="inner">
                <div class="subtitle"><span>our story</span></div>
                <div class="pattern-image"><img src="./images/icons/separator.svg" alt="" title=""></div>
                <h1><span>about us</span></h1>
            </div>
        </div>
    </section>
    <!--End Banner Section -->

    <!-- Who we are   -->
    <div class="about-container">
        <div class="left-bg"><img src="images/background/bg-10.png" alt="" title=""></div>
        <div class="right-bg"><img src="images/background/bg-11.png" alt="" title=""></div>
        <div class="small-heading">who we are</div>
        <div class="pattern-image"><img src="./images/icons/separator.svg" alt="" title=""></div>
        <div class="side-heading">A modern restaurant with a menu that will make your mouth water. Servicing delicious food <span> since 45 years</span>. Enjoy our seasonal menu and experience the beauty of naturalness</div>
        <div class="about-box">
            <div class="content-box">
                <div class="text">Lorem Ipsum is simply dummy text of the printingand typesetting industry lorem Ipsum has been the industrys standard dummy text ever since the when an unknown printer took a galley of type and scrambled it to make a type specimen book It has survived.</div>
                <div class="signature"><img src="./images/resource/signature-1.png" alt="" title=""></div>
                <div class="author">andrew joe - founder</div>
                <div class="video-box">
                    <div class="image"><a href="https://www.youtube.com/watch?v=ZETY_l3GVQg" class="lightbox-image"><img src="images/resource/about-image-1.jpg" alt=""></a>
                        <a href="https://www.youtube.com/watch?v=ZETY_l3GVQg" class="lightbox-image play-btn"><span class=" fas fa-play"><i class="ripple"></i></span></a>
                    </div>
                </div>
            </div>
            <div class="image-box">
                <div class="image">
                    <img src="./images/resource/about-image-2.jpg" alt="">
                </div>
            </div>
            <div class="contact-us">
                <div class="inner">
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
                    <div class="separator"><span></span></div>
                    <div class="contact-info">
                        <div class="heading">Contact us</div>
                        <div class="text">Restaurant St, Delici City, <br> London 9578, UK <br>
                            <a href="tel:+88-123-123456">+88-123-123456</a> <br> <a href="mailto:booking@domainname.com">booking@domainname.com</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="fact-counter">
            <div class="fact-block">
                <div class="fact-count">
                    <div class="count-box"><span class="count-text" data-stop="150" data-speed="2000">0</span><i>+</i></div>
                </div>
                <div class="fact-title">daily order</div>
            </div>
            <div class="fact-block">
                <div class="fact-count">
                    <div class="count-box"><span class="count-text" data-stop="82" data-speed="1500">0</span><i>+</i></div>
                </div>
                <div class="fact-title">Special Dishes</div>
            </div>
            <div class="fact-block">
                <div class="fact-count">
                    <div class="count-box"><span class="count-text" data-stop="35" data-speed="1000">0</span><i>+</i></div>
                </div>
                <div class="fact-title">expert chef</div>
            </div>
            <div class="fact-block">
                <div class="fact-count">
                    <div class="count-box"><span class="count-text" data-stop="10" data-speed="1000">0</span><i>+</i></div>
                </div>
                <div class="fact-title">awards won</div>
            </div>
        </div>
    </div>
    <!-- experience Section  -->
    <div class="experience-container">
        <div class="right-bg"><img src="images/background/bg-12.png" alt="" title=""></div>
        <div class="image">
            <img src="./images/background/image-5.jpg" alt="">
        </div>
        <div class="experience-section">
            <div class="small-heading">35 YEAR OF EXPERIENCE</div>
            <div class="pattern-image"><img src="./images/icons/separator.svg" alt="" title=""></div>
            <div class="section-heading">Award Winning Chef</div>
            <div class="text">Lorem Ipsum is simply dummy text of the printingand typesetting industry lorem Ipsum has been the industrys standard dummy text ever since the when an unknown printer took a galley of type.</div>
            <div class="signature"><img src="./images/resource/signature-2.png" alt="" title=""></div>
            <div class="author">HENRY - EXCUTIVE CHEF</div>
            <a href="./our-chef.php" class="theme-btn btn-style-two" style="box-sizing: border-box;">
                <span class="btn-wrap">
                    <span class="text-one">meet out team</span>
                    <span class="text-two">meet out team</span>
                </span>
            </a>
        </div>
    </div>
    <div class="experience-container alternate">
        <div class="left-bg"><img src="images/background/bg-13.png" alt="" title=""></div>
        <div class="image">
            <img src="./images/background/image-6.jpg" alt="">
        </div>
        <div class="experience-section">
            <div class="small-heading">DELIGHTFUL EXPERIENCE</div>
            <div class="pattern-image"><img src="./images/icons/separator.svg" alt="" title=""></div>
            <div class="section-heading">Dinner, Event or Party?</div>
            <div class="text">Lorem Ipsum is simply dummy text of the printingand typesetting industry lorem Ipsum has been the industrys standard dummy text ever since the when an unknown printer took a galley of type.</div>

            <a href="./menu.php" class="theme-btn btn-style-two" style="box-sizing: border-box;">
                <span class="btn-wrap">
                    <span class="text-one">discover now</span>
                    <span class="text-two">discover now</span>
                </span>
            </a>
        </div>
    </div>
    <!-- Services section  -->
    <div class="services-container">
        <div class="left-bg"><img src="images/background/bg-14.png" alt="" title=""></div>
        <div class="right-bg"><img src="images/background/bg-15.png" alt="" title=""></div>
        <div class="small-heading">OUR SERVICES</div>
        <div class="pattern-image"><img src="./images/icons/separator.svg" alt="" title=""></div>
        <div class="section-heading">Exquisite Restaurant in City</div>
        <div class="services-section">
            <div class="service-col">
                <div class="service-box">
                    <div class="image-box">
                        <img src="./images/resource/s-icon-1.png" alt="">
                    </div>
                    <div class="info-box">
                        <div class="section-heading-four">Door Delivery</div>
                        <div class="text">Lorem Ipsum is simply dummy printing and typeset industry lorem Ipsum has been.</div>
                    </div>
                </div>
                <div class="service-box alternate">
                    <div class="info-box">
                        <div class="section-heading-four">fine dining</div>
                        <div class="text">Lorem Ipsum is simply dummy printing and typeset industry lorem Ipsum has been.</div>
                    </div>
                    <div class="image-box">
                        <img src="./images/resource/s-icon-2.png" alt="">
                    </div>
                </div>
            </div>
            <div class="service-col alternate">
                <div class="service-box alternate">
                    <div class="info-box">
                        <div class="section-heading-four">Outdoor Catering</div>
                        <div class="text">Lorem Ipsum is simply dummy printing and typeset industry lorem Ipsum has been.</div>
                    </div>
                    <div class="image-box">
                        <img src="./images/resource/s-icon-3.png" alt="">
                    </div>
                </div>
                <div class="service-box">
                    <div class="image-box">
                        <img src="./images/resource/s-icon-4.png" alt="">
                    </div>
                    <div class="info-box">
                        <div class="section-heading-four">Banquets Hall</div>
                        <div class="text">Lorem Ipsum is simply dummy printing and typeset industry lorem Ipsum has been.</div>
                    </div>

                </div>
            </div>
            <div class="image-col"><img src="./images/resource/service-image.png" alt=""></div>
        </div>
    </div>
    <!-- Testimonial section  -->
    <div class="testimonial-container" style="box-sizing: border-box;">
        <div class="image-layer"></div>
        <div class="title-box">
            <div class="small-heading">TESTIMONIALS</div>
            <div class="pattern-image"><img src="./images/icons/separator.svg" alt="" title=""></div>
            <div class="section-heading">What People Are Saying</div>
        </div>
        <div class="carousel-box" style="box-sizing: border-box;">
            <div class="testimonial-slider owl-theme owl-carousel">
                <!--Slide Item-->
                <div class="testi-block">
                    <div class="quote-icon"><img src="images/icons/quotes-1.png" alt="" title=""></div>
                    <div class="rating"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></div>
                    <div class="text">The taste of food was really amazing, Wow ! outstanding dinner made by Mater chef John Rute, I never forget this delicious food experience.</div>
                    <div class="auth-info">
                        <div class="image"><img src="images/resource/author-thumb-4.jpg" alt=""></div>
                        <div class="auth-title">willium joe</div>
                        <div class="location">New York</div>
                    </div>
                </div>

                <!--Slide Item-->
               <div class="testi-block">
                        
                            <div class="quote-icon"><img src="images/icons/quotes-1.png" alt="" title=""></div>
                            <div class="rating"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></div>
                            <div class="text">Hygienic food &amp; fresh enviroment, everyone had a wonderful delite experience. It was FABULOUS! great experience at The Italian gourmet.</div>
                            <div class="auth-info">
                                <div class="image"><img src="images/resource/author-thumb-5.jpg" alt=""></div>
                                <div class="auth-title">Theresa Tin</div>
                                <div class="location">Chicago</div>
                            </div>
                        
                    </div>

                <!--Slide Item-->
                <div class="testi-block">
                    <div class="quote-icon"><img src="images/icons/quotes-1.png" alt="" title=""></div>
                    <div class="rating"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></div>
                    <div class="text">Special treat to dine, It was wow experience food was really delicious! outstanding dinner made by Mater chef, food experience was unfogetable!</div>
                    <div class="auth-info">
                        <div class="image"><img src="images/resource/author-thumb-6.jpg" alt=""></div>
                        <div class="auth-title">Michel Byrd</div>
                        <div class="location">Denmark</div>
                    </div>
                </div>

                <!--Slide Item-->
                <div class="testi-block">
                    <div class="quote-icon"><img src="images/icons/quotes-1.png" alt="" title=""></div>
                    <div class="rating"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></div>
                    <div class="text">The taste of food was really amazing, Wow ! outstanding dinner made by Mater chef John Rute, I never forget this delicious food experience.</div>
                    <div class="auth-info">
                        <div class="image"><img src="images/resource/author-thumb-4.jpg" alt=""></div>
                        <div class="auth-title">willium joe</div>
                        <div class="location">New York</div>
                    </div>
                </div>

                <!--Slide Item-->
               <div class="testi-block">
                        
                            <div class="quote-icon"><img src="images/icons/quotes-1.png" alt="" title=""></div>
                            <div class="rating"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></div>
                            <div class="text">Hygienic food &amp; fresh enviroment, everyone had a wonderful delite experience. It was FABULOUS! great experience at The Italian gourmet.</div>
                            <div class="auth-info">
                                <div class="image"><img src="images/resource/author-thumb-5.jpg" alt=""></div>
                                <div class="auth-title">Theresa Tin</div>
                                <div class="location">Chicago</div>
                            </div>
                        
                    </div>

                <!--Slide Item-->
                <div class="testi-block">
                    <div class="quote-icon"><img src="images/icons/quotes-1.png" alt="" title=""></div>
                    <div class="rating"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></div>
                    <div class="text">Special treat to dine, It was wow experience food was really delicious! outstanding dinner made by Mater chef, food experience was unfogetable!</div>
                    <div class="auth-info">
                        <div class="image"><img src="images/resource/author-thumb-6.jpg" alt=""></div>
                        <div class="auth-title">Michel Byrd</div>
                        <div class="location">Denmark</div>
                    </div>
                </div>

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