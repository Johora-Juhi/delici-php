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
                <h1><span>Our Menu 3</span></h1>
            </div>
        </div>
    </section>
    <!--End Banner Section -->
<!--Menu Section -->
<div class="all-menu-container">
    <!-- Appetizers section -->
    <section class="menu-section">
        <div class="right-bg"><img src="./images/background/bg-19.png" alt="" title=""></div>
        <p class="small-heading">STARTER MENU</p>
        <div class="pattern-image"><img src="./images/icons/separator.svg" alt="" title=""></div>
        <p class="section-heading">Appetizers</p>
        <div class="menu-container">
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
                    <!-- button for modal  -->
                    <button class="hover-button btn-style-one popup-trigger" data-popup-trigger="<?= $modal_id ?>">
                        <span class="btn-wrap">
                            <span class="text-one">make changes</span>
                            <span class="text-two">make changes</span>
                        </span>
                    </button>

                    <!-- menu update  -->
                    <?php
                    $approot = $_SERVER['DOCUMENT_ROOT'] . "/Delici-Client/";
                    $nameErr = $specialityErr = $priceErr = $categoryErr = $imageErr = $descriptionErr = "";

                    if ($_SERVER["REQUEST_METHOD"] == "POST") {

                        $edit_id = $_POST['id'];
                        // name input validation 
                        if (empty($_POST["name"])) {
                            $nameErr = " * Name is required";
                            $name = '';
                        } else {
                            $name = $_POST["name"];
                            // check if name only contains letters and whitespace
                            if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                                $nameErr = " Only letters and white space";
                                $name = '';
                            }
                        }

                        // speciality input validation 
                        $speciality = $_POST["speciality"];

                        // price input validation 
                        if (empty($_POST["price"])) {
                            $priceErr = " * Price is required";
                            $price = '';
                        } else {
                            $price = $_POST["price"];
                            // check if price only contains numbers or number string
                            if (!is_numeric($price)) {
                                $priceErr = " Invalid price";
                                $price = '';
                            }
                        }

                        // category input validation 
                        if (empty($_POST["category"])) {
                            $categoryErr = " * Category is required";
                        } else {
                            $category = $_POST["category"];
                        }

                        // image field validation 
                        if (empty($_FILES['image']['name'])) {
                            $image = $menu_image;
                        } else {
                            $uploadOk = 1;
                            $fileInfo = getimagesize($_FILES["image"]["tmp_name"]);
                            if ($fileInfo !== false) {
                                // It's an image
                                $mime = $fileInfo["mime"]; // Get the MIME type of the image

                                if ($mime != "image/jpg" && $mime != "image/jpeg" && $mime != "image/png" && $mime != "image/gif") {
                                    $imageErr = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                                    $uploadOk = 0;
                                }

                                if ($_FILES["image"]["size"] > 500000) { // check image size
                                    $imageErr = "Sorry, your file is too large.";
                                    $uploadOk = 0;
                                }
                            } else {
                                $imageErr = "The uploaded file is not an image.";
                                $uploadOk = 0;
                            }

                            // picture upload
                            if ($uploadOk != 0) {

                                $file_name = "IMG_" . time() . "_" . $_FILES['image']['name'];
                                $_target = $_FILES['image']['tmp_name'];
                                $destination = $approot . "uploads/" . $file_name;
                                $is_file_moved = move_uploaded_file($_target, $destination);
                                if ($is_file_moved) {
                                    $image = $file_name;
                                } else {
                                    $imageErr =  "Sorry, there was an error uploading your file.";
                                    $uploadOk = 0;
                                }
                            }
                        }

                        // description field validation 
                        if (empty($_POST["description"])) {
                            $descriptionErr = " * description is required";
                        } else {
                            $description = $_POST["description"];
                        }

                        // post operation of fields are not empty 
                        if ($name != '' and $price != '' and $category != '' and $image != '' and $description != '') {
                            $insert_query = "UPDATE `menu-table` SET menu_name = '$name', menu_speciality = '$speciality', menu_price ='$price', menu_category =  '$category', menu_image = '$image', menu_description = '$description', time =  NOW() WHERE menu_id = $edit_id ";
                            $result = mysqli_query($con, $insert_query);
                            if ($result) {
                                echo "<script>window.open('./index.php?all-menu','_self')</script>";
                                echo '
                            <script>
                                Swal.fire({
                                    title: "Success!",
                                    timer: 2000,
                                    text: "Menu added successfully!",
                                    icon: "success",
                                });
                            </script>';
                            }
                        }
                    }
                    ?>
                    <!-- Modals -->
                    <div class="popup-modal shadow" data-popup-modal="<?= $modal_id ?>">
                        <div class="edit-modal">
                            <span id="close-btn" class="popup-modal__close">&times;</span>
                            <!-- edit form  -->
                            <form action="" class="edit-form-container" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id" class="input-field" value="<?= $modal_id ?>">
                                <div class="input-group">
                                    <div class="input-inner">
                                        <input type="text" name="name" class="input-field" placeholder="<?= $title ?>" value="<?= $title ?>">
                                        <p style="margin-bottom: 0; padding-top: 10px; text-align: start; color: brown"> <small> <?php echo "" . $nameErr; ?></small></p>
                                    </div>
                                    <div class="input-inner">
                                        <input type="text" name="speciality" class="input-field" placeholder="Speciality" value="<?= $menu_speciality ?>">
                                        <p style="margin-bottom: 0; padding-top: 10px; text-align: start; color: brown"> <small> <?php echo "" . $specialityErr; ?></small></p>
                                    </div>
                                    <div class="input-inner">
                                        <input type="text" name="price" class="input-field" placeholder="Price" value="<?= $menu_price ?>">
                                        <p style="margin-bottom: 0; padding-top: 10px; text-align: start; color: brown"> <small> <?php echo "" . $priceErr; ?></small></p>
                                    </div>
                                </div>
                                <div class="input-group">
                                    <div class="input-inner">
                                        <i class="fas fa-list icon"></i>
                                        <select class="input-field input-select" name="category" style="padding-left: 45px;">
                                            <option value="<?= $menu_category ?>"> <?= $menu_category ?></option>
                                            <option value="Appetizers"> Appetizers</option>
                                            <option value="Main Dishes"> Main Dishes</option>
                                            <option value="Desserts"> Desserts</option>
                                            <option value="Drinks Menu"> Drinks Menu</option>
                                        </select>
                                        <p style="margin-bottom: 0; padding-top: 10px; text-align: start; color: brown"> <small> <?php echo "" . $categoryErr; ?></small></p>
                                    </div>
                                    <div class="input-inner">
                                        <div class="edit-img">
                                            <i class="fas fa-cloud-arrow-up icon"></i>
                                            <input id="file<?= $modal_id ?>" type="file" name="image" />
                                            <label for="file<?= $modal_id ?>" id="fileLabel<?= $modal_id ?>" style="padding-left: 50px;">Select Image</label>
                                            <img src="<?= $root ?>uploads/<?= $menu_image ?>">
                                        </div>
                                        <p style="margin-bottom: 0; padding-top: 10px; text-align: start; color: brown"> <small> <?php echo "" . $imageErr; ?></small></p>
                                    </div>
                                </div>
                                <div class="input-group">
                                    <div class="input-inner">
                                        <textarea name="description" id="" rows="3" class="input-field" placeholder="Description"><?= $menu_description ?></textarea>
                                        <p style="margin-bottom: 0; padding-top: 10px; text-align: start; color: brown"> <small> <?php echo "" . $descriptionErr; ?></small></p>
                                    </div>
                                </div>
                                <div class="input-group">
                                    <div class="input-inner">
                                        <button type="submit" class="form-btn btn-style-one" name="add-menu" id="submit_btn">
                                            <span class="btn-wrap">
                                                <span class="text-one">Update</span>
                                                <span class="text-two">Update</span>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <div>or</div>
                            <form action="" class="edit-form-container">
                                <button type="submit" class="form-btn btn-style-two" name="add-menu" id="submit_btn">
                                    <span class="btn-wrap">
                                        <span class="text-one">delete</span>
                                        <span class="text-two">delete</span>
                                    </span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- end of while loop  -->
            <?php
            }
            ?>
        </div>
    </section>
    <!-- Main Dishes section -->
    <section class="menu-section">
        <div class="left-bg"><img src="./images/background/bg-20.png" alt="" title=""></div>
        <p class="small-heading">FRESH & HYGINE</p>
        <div class="pattern-image"><img src="./images/icons/separator.svg" alt="" title=""></div>
        <p class="section-heading">Main Dishes</p>
        <div class="menu-container">
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
                    <!-- button for modal  -->
                    <button class="hover-button btn-style-one popup-trigger" data-popup-trigger="<?= $modal_id ?>">
                        <span class="btn-wrap">
                            <span class="text-one">make changes</span>
                            <span class="text-two">make changes</span>
                        </span>
                    </button>

                    <!-- menu update  -->
                    <?php
                    $approot = $_SERVER['DOCUMENT_ROOT'] . "/Delici-Client/";
                    $nameErr = $specialityErr = $priceErr = $categoryErr = $imageErr = $descriptionErr = "";

                    if ($_SERVER["REQUEST_METHOD"] == "POST") {

                        $edit_id = $_POST['id'];
                        // name input validation 
                        if (empty($_POST["name"])) {
                            $nameErr = " * Name is required";
                            $name = '';
                        } else {
                            $name = $_POST["name"];
                            // check if name only contains letters and whitespace
                            if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                                $nameErr = " Only letters and white space";
                                $name = '';
                            }
                        }

                        // speciality input validation 
                        $speciality = $_POST["speciality"];

                        // price input validation 
                        if (empty($_POST["price"])) {
                            $priceErr = " * Price is required";
                            $price = '';
                        } else {
                            $price = $_POST["price"];
                            // check if price only contains numbers or number string
                            if (!is_numeric($price)) {
                                $priceErr = " Invalid price";
                                $price = '';
                            }
                        }

                        // category input validation 
                        if (empty($_POST["category"])) {
                            $categoryErr = " * Category is required";
                        } else {
                            $category = $_POST["category"];
                        }

                        // image field validation 
                        if (empty($_FILES['image']['name'])) {
                            $image = $menu_image;
                        } else {
                            $uploadOk = 1;
                            $fileInfo = getimagesize($_FILES["image"]["tmp_name"]);
                            if ($fileInfo !== false) {
                                // It's an image
                                $mime = $fileInfo["mime"]; // Get the MIME type of the image

                                if ($mime != "image/jpg" && $mime != "image/jpeg" && $mime != "image/png" && $mime != "image/gif") {
                                    $imageErr = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                                    $uploadOk = 0;
                                }

                                if ($_FILES["image"]["size"] > 500000) { // check image size
                                    $imageErr = "Sorry, your file is too large.";
                                    $uploadOk = 0;
                                }
                            } else {
                                $imageErr = "The uploaded file is not an image.";
                                $uploadOk = 0;
                            }

                            // picture upload
                            if ($uploadOk != 0) {

                                $file_name = "IMG_" . time() . "_" . $_FILES['image']['name'];
                                $_target = $_FILES['image']['tmp_name'];
                                $destination = $approot . "uploads/" . $file_name;
                                $is_file_moved = move_uploaded_file($_target, $destination);
                                if ($is_file_moved) {
                                    $image = $file_name;
                                } else {
                                    $imageErr =  "Sorry, there was an error uploading your file.";
                                    $uploadOk = 0;
                                }
                            }
                        }

                        // description field validation 
                        if (empty($_POST["description"])) {
                            $descriptionErr = " * description is required";
                        } else {
                            $description = $_POST["description"];
                        }

                        // post operation of fields are not empty 
                        if ($name != '' and $price != '' and $category != '' and $image != '' and $description != '') {
                            $insert_query = "UPDATE `menu-table` SET menu_name = '$name', menu_speciality = '$speciality', menu_price ='$price', menu_category =  '$category', menu_image = '$image', menu_description = '$description', time =  NOW() WHERE menu_id = $edit_id ";
                            $result = mysqli_query($con, $insert_query);
                            if ($result) {
                                echo "<script>window.open('./index.php?all-menu','_self')</script>";
                                echo '
                            <script>
                                Swal.fire({
                                    title: "Success!",
                                    timer: 2000,
                                    text: "Menu added successfully!",
                                    icon: "success",
                                });
                            </script>';
                            }
                        }
                    }
                    ?>
                    <!-- Modals -->
                    <div class="popup-modal shadow" data-popup-modal="<?= $modal_id ?>">
                        <div class="edit-modal">
                            <span id="close-btn" class="popup-modal__close">&times;</span>
                            <!-- edit form  -->
                            <form action="" class="edit-form-container" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id" class="input-field" value="<?= $modal_id ?>">
                                <div class="input-group">
                                    <div class="input-inner">
                                        <input type="text" name="name" class="input-field" placeholder="<?= $title ?>" value="<?= $title ?>">
                                        <p style="margin-bottom: 0; padding-top: 10px; text-align: start; color: brown"> <small> <?php echo "" . $nameErr; ?></small></p>
                                    </div>
                                    <div class="input-inner">
                                        <input type="text" name="speciality" class="input-field" placeholder="Speciality" value="<?= $menu_speciality ?>">
                                        <p style="margin-bottom: 0; padding-top: 10px; text-align: start; color: brown"> <small> <?php echo "" . $specialityErr; ?></small></p>
                                    </div>
                                    <div class="input-inner">
                                        <input type="text" name="price" class="input-field" placeholder="Price" value="<?= $menu_price ?>">
                                        <p style="margin-bottom: 0; padding-top: 10px; text-align: start; color: brown"> <small> <?php echo "" . $priceErr; ?></small></p>
                                    </div>
                                </div>
                                <div class="input-group">
                                    <div class="input-inner">
                                        <i class="fas fa-list icon"></i>
                                        <select class="input-field input-select" name="category" style="padding-left: 45px;">
                                            <option value="<?= $menu_category ?>"> <?= $menu_category ?></option>
                                            <option value="Appetizers"> Appetizers</option>
                                            <option value="Main Dishes"> Main Dishes</option>
                                            <option value="Desserts"> Desserts</option>
                                            <option value="Drinks Menu"> Drinks Menu</option>
                                        </select>
                                        <p style="margin-bottom: 0; padding-top: 10px; text-align: start; color: brown"> <small> <?php echo "" . $categoryErr; ?></small></p>
                                    </div>
                                    <div class="input-inner">
                                        <div class="edit-img">
                                            <i class="fas fa-cloud-arrow-up icon"></i>
                                            <input id="file<?= $modal_id ?>" type="file" name="image" />
                                            <label for="file<?= $modal_id ?>" id="fileLabel<?= $modal_id ?>" style="padding-left: 50px;">Select Image</label>
                                            <img src="<?= $root ?>uploads/<?= $menu_image ?>">
                                        </div>
                                        <p style="margin-bottom: 0; padding-top: 10px; text-align: start; color: brown"> <small> <?php echo "" . $imageErr; ?></small></p>
                                    </div>
                                </div>
                                <div class="input-group">
                                    <div class="input-inner">
                                        <textarea name="description" id="" rows="3" class="input-field" placeholder="Description"><?= $menu_description ?></textarea>
                                        <p style="margin-bottom: 0; padding-top: 10px; text-align: start; color: brown"> <small> <?php echo "" . $descriptionErr; ?></small></p>
                                    </div>
                                </div>
                                <div class="input-group">
                                    <div class="input-inner">
                                        <button type="submit" style="box-sizing: border-box;" class="form-btn btn-style-one" name="add-menu" id="submit_btn">
                                            <span class="btn-wrap">
                                                <span class="text-one">Update</span>
                                                <span class="text-two">Update</span>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <div>or</div>
                            <form action="" class="edit-form-container">
                                <button type="submit" style="box-sizing: border-box;" class="form-btn btn-style-two" name="add-menu" id="submit_btn">
                                    <span class="btn-wrap">
                                        <span class="text-one">delete</span>
                                        <span class="text-two">delete</span>
                                    </span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- end of while loop  -->
            <?php
            }
            ?>
        </div>
    </section>
    <!-- Desserts section -->
    <section class="menu-section">
        <div class="right-bg"><img src="./images/background/bg-22.png" alt="" title=""></div>
        <p class="small-heading">SWEET & SWEET</p>
        <div class="pattern-image"><img src="./images/icons/separator.svg" alt="" title=""></div>
        <p class="section-heading">Desserts</p>
        <div class="menu-container">
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
                    <!-- button for modal  -->
                    <button class="hover-button btn-style-one popup-trigger" data-popup-trigger="<?= $modal_id ?>">
                        <span class="btn-wrap">
                            <span class="text-one">make changes</span>
                            <span class="text-two">make changes</span>
                        </span>
                    </button>

                    <!-- menu update  -->
                    <?php
                    $approot = $_SERVER['DOCUMENT_ROOT'] . "/Delici-Client/";
                    $nameErr = $specialityErr = $priceErr = $categoryErr = $imageErr = $descriptionErr = "";

                    if ($_SERVER["REQUEST_METHOD"] == "POST") {

                        $edit_id = $_POST['id'];
                        // name input validation 
                        if (empty($_POST["name"])) {
                            $nameErr = " * Name is required";
                            $name = '';
                        } else {
                            $name = $_POST["name"];
                            // check if name only contains letters and whitespace
                            if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                                $nameErr = " Only letters and white space";
                                $name = '';
                            }
                        }

                        // speciality input validation 
                        $speciality = $_POST["speciality"];

                        // price input validation 
                        if (empty($_POST["price"])) {
                            $priceErr = " * Price is required";
                            $price = '';
                        } else {
                            $price = $_POST["price"];
                            // check if price only contains numbers or number string
                            if (!is_numeric($price)) {
                                $priceErr = " Invalid price";
                                $price = '';
                            }
                        }

                        // category input validation 
                        if (empty($_POST["category"])) {
                            $categoryErr = " * Category is required";
                        } else {
                            $category = $_POST["category"];
                        }

                        // image field validation 
                        if (empty($_FILES['image']['name'])) {
                            $image = $menu_image;
                        } else {
                            $uploadOk = 1;
                            $fileInfo = getimagesize($_FILES["image"]["tmp_name"]);
                            if ($fileInfo !== false) {
                                // It's an image
                                $mime = $fileInfo["mime"]; // Get the MIME type of the image

                                if ($mime != "image/jpg" && $mime != "image/jpeg" && $mime != "image/png" && $mime != "image/gif") {
                                    $imageErr = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                                    $uploadOk = 0;
                                }

                                if ($_FILES["image"]["size"] > 500000) { // check image size
                                    $imageErr = "Sorry, your file is too large.";
                                    $uploadOk = 0;
                                }
                            } else {
                                $imageErr = "The uploaded file is not an image.";
                                $uploadOk = 0;
                            }

                            // picture upload
                            if ($uploadOk != 0) {

                                $file_name = "IMG_" . time() . "_" . $_FILES['image']['name'];
                                $_target = $_FILES['image']['tmp_name'];
                                $destination = $approot . "uploads/" . $file_name;
                                $is_file_moved = move_uploaded_file($_target, $destination);
                                if ($is_file_moved) {
                                    $image = $file_name;
                                } else {
                                    $imageErr =  "Sorry, there was an error uploading your file.";
                                    $uploadOk = 0;
                                }
                            }
                        }

                        // description field validation 
                        if (empty($_POST["description"])) {
                            $descriptionErr = " * description is required";
                        } else {
                            $description = $_POST["description"];
                        }

                        // post operation of fields are not empty 
                        if ($name != '' and $price != '' and $category != '' and $image != '' and $description != '') {
                            $insert_query = "UPDATE `menu-table` SET menu_name = '$name', menu_speciality = '$speciality', menu_price ='$price', menu_category =  '$category', menu_image = '$image', menu_description = '$description', time =  NOW() WHERE menu_id = $edit_id ";
                            $result = mysqli_query($con, $insert_query);
                            if ($result) {
                                echo "<script>window.open('./index.php?all-menu','_self')</script>";
                                echo '
                            <script>
                                Swal.fire({
                                    title: "Success!",
                                    timer: 2000,
                                    text: "Menu added successfully!",
                                    icon: "success",
                                });
                            </script>';
                            }
                        }
                    }
                    ?>
                    <!-- Modals -->
                    <div class="popup-modal shadow" data-popup-modal="<?= $modal_id ?>">
                        <div class="edit-modal">
                            <span id="close-btn" class="popup-modal__close">&times;</span>
                            <!-- edit form  -->
                            <form action="" class="edit-form-container" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id" class="input-field" value="<?= $modal_id ?>">
                                <div class="input-group">
                                    <div class="input-inner">
                                        <input type="text" name="name" class="input-field" placeholder="<?= $title ?>" value="<?= $title ?>">
                                        <p style="margin-bottom: 0; padding-top: 10px; text-align: start; color: brown"> <small> <?php echo "" . $nameErr; ?></small></p>
                                    </div>
                                    <div class="input-inner">
                                        <input type="text" name="speciality" class="input-field" placeholder="Speciality" value="<?= $menu_speciality ?>">
                                        <p style="margin-bottom: 0; padding-top: 10px; text-align: start; color: brown"> <small> <?php echo "" . $specialityErr; ?></small></p>
                                    </div>
                                    <div class="input-inner">
                                        <input type="text" name="price" class="input-field" placeholder="Price" value="<?= $menu_price ?>">
                                        <p style="margin-bottom: 0; padding-top: 10px; text-align: start; color: brown"> <small> <?php echo "" . $priceErr; ?></small></p>
                                    </div>
                                </div>
                                <div class="input-group">
                                    <div class="input-inner">
                                        <i class="fas fa-list icon"></i>
                                        <select class="input-field input-select" name="category" style="padding-left: 45px;">
                                            <option value="<?= $menu_category ?>"> <?= $menu_category ?></option>
                                            <option value="Appetizers"> Appetizers</option>
                                            <option value="Main Dishes"> Main Dishes</option>
                                            <option value="Desserts"> Desserts</option>
                                            <option value="Drinks Menu"> Drinks Menu</option>
                                        </select>
                                        <p style="margin-bottom: 0; padding-top: 10px; text-align: start; color: brown"> <small> <?php echo "" . $categoryErr; ?></small></p>
                                    </div>
                                    <div class="input-inner">
                                        <div class="edit-img">
                                            <i class="fas fa-cloud-arrow-up icon"></i>
                                            <input id="file<?= $modal_id ?>" type="file" name="image" />
                                            <label for="file<?= $modal_id ?>" id="fileLabel<?= $modal_id ?>" style="padding-left: 50px;">Select Image</label>
                                            <img src="<?= $root ?>uploads/<?= $menu_image ?>">
                                        </div>
                                        <p style="margin-bottom: 0; padding-top: 10px; text-align: start; color: brown"> <small> <?php echo "" . $imageErr; ?></small></p>
                                    </div>
                                </div>
                                <div class="input-group">
                                    <div class="input-inner">
                                        <textarea name="description" id="" rows="3" class="input-field" placeholder="Description"><?= $menu_description ?></textarea>
                                        <p style="margin-bottom: 0; padding-top: 10px; text-align: start; color: brown"> <small> <?php echo "" . $descriptionErr; ?></small></p>
                                    </div>
                                </div>
                                <div class="input-group">
                                    <div class="input-inner">
                                        <button type="submit" class="form-btn btn-style-one" name="add-menu" id="submit_btn">
                                            <span class="btn-wrap">
                                                <span class="text-one">Update</span>
                                                <span class="text-two">Update</span>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <div>or</div>
                            <form action="" class="edit-form-container">
                                <button type="submit" class="form-btn btn-style-two" name="add-menu" id="submit_btn">
                                    <span class="btn-wrap">
                                        <span class="text-one">delete</span>
                                        <span class="text-two">delete</span>
                                    </span>
                                </button>
                            </form>
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
    <section class="menu-section">
        <div class="left-bg"><img src="./images/background/bg-23.png" alt="" title=""></div>
        <p class="small-heading">hot & cold</p>
        <div class="pattern-image"><img src="./images/icons/separator.svg" alt="" title=""></div>
        <p class="section-heading">Drinks Menu</p>
        <div class="menu-container">
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
                    <!-- button for modal  -->
                    <button class="hover-button btn-style-one popup-trigger" data-popup-trigger="<?= $modal_id ?>">
                        <span class="btn-wrap">
                            <span class="text-one">make changes</span>
                            <span class="text-two">make changes</span>
                        </span>
                    </button>

                    <!-- menu update  -->
                    <?php
                    $approot = $_SERVER['DOCUMENT_ROOT'] . "/Delici-Client/";
                    $nameErr = $specialityErr = $priceErr = $categoryErr = $imageErr = $descriptionErr = "";

                    if ($_SERVER["REQUEST_METHOD"] == "POST") {

                        $edit_id = $_POST['id'];
                        // name input validation 
                        if (empty($_POST["name"])) {
                            $nameErr = " * Name is required";
                            $name = '';
                        } else {
                            $name = $_POST["name"];
                            // check if name only contains letters and whitespace
                            if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                                $nameErr = " Only letters and white space";
                                $name = '';
                            }
                        }

                        // speciality input validation 
                        $speciality = $_POST["speciality"];

                        // price input validation 
                        if (empty($_POST["price"])) {
                            $priceErr = " * Price is required";
                            $price = '';
                        } else {
                            $price = $_POST["price"];
                            // check if price only contains numbers or number string
                            if (!is_numeric($price)) {
                                $priceErr = " Invalid price";
                                $price = '';
                            }
                        }

                        // category input validation 
                        if (empty($_POST["category"])) {
                            $categoryErr = " * Category is required";
                        } else {
                            $category = $_POST["category"];
                        }

                        // image field validation 
                        if (empty($_FILES['image']['name'])) {
                            $image = $menu_image;
                        } else {
                            $uploadOk = 1;
                            $fileInfo = getimagesize($_FILES["image"]["tmp_name"]);
                            if ($fileInfo !== false) {
                                // It's an image
                                $mime = $fileInfo["mime"]; // Get the MIME type of the image

                                if ($mime != "image/jpg" && $mime != "image/jpeg" && $mime != "image/png" && $mime != "image/gif") {
                                    $imageErr = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                                    $uploadOk = 0;
                                }

                                if ($_FILES["image"]["size"] > 500000) { // check image size
                                    $imageErr = "Sorry, your file is too large.";
                                    $uploadOk = 0;
                                }
                            } else {
                                $imageErr = "The uploaded file is not an image.";
                                $uploadOk = 0;
                            }

                            // picture upload
                            if ($uploadOk != 0) {

                                $file_name = "IMG_" . time() . "_" . $_FILES['image']['name'];
                                $_target = $_FILES['image']['tmp_name'];
                                $destination = $approot . "uploads/" . $file_name;
                                $is_file_moved = move_uploaded_file($_target, $destination);
                                if ($is_file_moved) {
                                    $image = $file_name;
                                } else {
                                    $imageErr =  "Sorry, there was an error uploading your file.";
                                    $uploadOk = 0;
                                }
                            }
                        }

                        // description field validation 
                        if (empty($_POST["description"])) {
                            $descriptionErr = " * description is required";
                        } else {
                            $description = $_POST["description"];
                        }

                        // post operation of fields are not empty 
                        if ($name != '' and $price != '' and $category != '' and $image != '' and $description != '') {
                            $insert_query = "UPDATE `menu-table` SET menu_name = '$name', menu_speciality = '$speciality', menu_price ='$price', menu_category =  '$category', menu_image = '$image', menu_description = '$description', time =  NOW() WHERE menu_id = $edit_id ";
                            $result = mysqli_query($con, $insert_query);
                            if ($result) {
                                echo "<script>window.open('./index.php?all-menu','_self')</script>";
                                echo '
                            <script>
                                Swal.fire({
                                    title: "Success!",
                                    timer: 2000,
                                    text: "Menu added successfully!",
                                    icon: "success",
                                });
                            </script>';
                            }
                        }
                    }
                    ?>
                    <!-- Modals -->
                    <div class="popup-modal shadow" data-popup-modal="<?= $modal_id ?>">
                        <div class="edit-modal">
                            <span id="close-btn" class="popup-modal__close">&times;</span>
                            <!-- edit form  -->
                            <form action="" class="edit-form-container" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id" class="input-field" value="<?= $modal_id ?>">
                                <div class="input-group">
                                    <div class="input-inner">
                                        <input type="text" name="name" class="input-field" placeholder="<?= $title ?>" value="<?= $title ?>">
                                        <p style="margin-bottom: 0; padding-top: 10px; text-align: start; color: brown"> <small> <?php echo "" . $nameErr; ?></small></p>
                                    </div>
                                    <div class="input-inner">
                                        <input type="text" name="speciality" class="input-field" placeholder="Speciality" value="<?= $menu_speciality ?>">
                                        <p style="margin-bottom: 0; padding-top: 10px; text-align: start; color: brown"> <small> <?php echo "" . $specialityErr; ?></small></p>
                                    </div>
                                    <div class="input-inner">
                                        <input type="text" name="price" class="input-field" placeholder="Price" value="<?= $menu_price ?>">
                                        <p style="margin-bottom: 0; padding-top: 10px; text-align: start; color: brown"> <small> <?php echo "" . $priceErr; ?></small></p>
                                    </div>
                                </div>
                                <div class="input-group">
                                    <div class="input-inner">
                                        <i class="fas fa-list icon"></i>
                                        <select class="input-field input-select" name="category" style="padding-left: 45px;">
                                            <option value="<?= $menu_category ?>"> <?= $menu_category ?></option>
                                            <option value="Appetizers"> Appetizers</option>
                                            <option value="Main Dishes"> Main Dishes</option>
                                            <option value="Desserts"> Desserts</option>
                                            <option value="Drinks Menu"> Drinks Menu</option>
                                        </select>
                                        <p style="margin-bottom: 0; padding-top: 10px; text-align: start; color: brown"> <small> <?php echo "" . $categoryErr; ?></small></p>
                                    </div>
                                    <div class="input-inner">
                                        <div class="edit-img">
                                            <i class="fas fa-cloud-arrow-up icon"></i>
                                            <input id="file<?= $modal_id ?>" type="file" name="image" />
                                            <label for="file<?= $modal_id ?>" id="fileLabel<?= $modal_id ?>" style="padding-left: 50px;">Select Image</label>
                                            <img src="<?= $root ?>uploads/<?= $menu_image ?>">
                                        </div>
                                        <p style="margin-bottom: 0; padding-top: 10px; text-align: start; color: brown"> <small> <?php echo "" . $imageErr; ?></small></p>
                                    </div>
                                </div>
                                <div class="input-group">
                                    <div class="input-inner">
                                        <textarea name="description" id="" rows="3" class="input-field" placeholder="Description"><?= $menu_description ?></textarea>
                                        <p style="margin-bottom: 0; padding-top: 10px; text-align: start; color: brown"> <small> <?php echo "" . $descriptionErr; ?></small></p>
                                    </div>
                                </div>
                                <div class="input-group">
                                    <div class="input-inner">
                                        <button type="submit" class="form-btn btn-style-one" name="add-menu" id="submit_btn">
                                            <span class="btn-wrap">
                                                <span class="text-one">Update</span>
                                                <span class="text-two">Update</span>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <div>or</div>
                            <form action="" class="edit-form-container">
                                <button type="submit" class="form-btn btn-style-two" name="add-menu" id="submit_btn">
                                    <span class="btn-wrap">
                                        <span class="text-one">delete</span>
                                        <span class="text-two">delete</span>
                                    </span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- end of while loop  -->
            <?php
            }
            ?>
        </div>
    </section>
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