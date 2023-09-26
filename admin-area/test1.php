<!-- database connection  -->
<?php
include_once('../includes/connect.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="./test.css">
    <link rel="stylesheet" href="../css/global.css">
    <title>Modal Popup Box</title>
</head>

<body>
    <!-- <div class="body-blackout"></div> -->

    <div class="menu-container">
        <?php
        $root = "http://localhost/Delici-Client/";
        $category = 'Appetizers';
        $select_query = "SELECT * FROM `menu-table` WHERE menu_category = 'Desserts'";
        $result = mysqli_query($con, $select_query);
        $counter = 1; // Initialize a counter for generating unique IDs

        while ($menu = mysqli_fetch_array($result)) {
            $title = $menu['menu_name'];
            $menu_speciality = $menu['menu_speciality'];
            $menu_price = $menu['menu_price'];
            $menu_category = $menu['menu_category'];
            $menu_image = $menu['menu_image'];
            $menu_description = $menu['menu_description'];
            $modal_id = $counter; // Unique ID for modal background
            $open_btn_id = "open-btn" . $counter; // Unique ID for open button
            $close_btn_id = "close-btn" . $counter; // Unique ID for close button

            // Add data attributes to store menu details
            // $data_attributes = "data-modal-id='$modal_id' data-close-btn-id='$close_btn_id'";
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
                <button class="hover-button btn-style-one popup-trigger" data-popup-trigger="<?= $modal_id ?>">
                    <span class="btn-wrap">
                        <span class="text-one">add menu</span>
                        <span class="text-two">add menu</span>
                    </span>
                </button>
                <!-- Modals -->
                <div class="popup-modal shadow" data-popup-modal="<?= $modal_id ?>">
                    <div class="modal">
                        <span id="close-btn" class="popup-modal__close">&times;</span>
                        <form action="" class="edit-form-container" method="post" enctype="multipart/form-data">
                            <div class="input-group">
                                <div class="input-inner">
                                    <input type="text" name="name" class="input-field" placeholder="Name" id="-input" data-original-title="Please enter Name" title="">
                                    <!-- <p style="margin-bottom: 0; padding-top: 10px; text-align: start; color: brown"> <small> <?php echo "" . $nameErr; ?></small></p> -->
                                </div>
                                <div class="input-inner">
                                    <input type="text" name="speciality" class="input-field" placeholder="Speciality">
                                    <!-- <p style="margin-bottom: 0; padding-top: 10px; text-align: start; color: brown"> <small> <?php echo "" . $specialityErr; ?></small></p> -->
                                </div>
                                <div class="input-inner">
                                    <input type="text" name="price" class="input-field" placeholder="Price">
                                    <!-- <p style="margin-bottom: 0; padding-top: 10px; text-align: start; color: brown"> <small> <?php echo "" . $priceErr; ?></small></p> -->
                                </div>
                            </div>
                            <div class="input-group">
                                <div class="input-inner">
                                    <i class="fas fa-list icon"></i>
                                    <select class="input-field input-select" name="category" style="padding-left: 45px;">
                                        <option value=""> Select a Category</option>
                                        <option value="Appetizers"> Appetizers</option>
                                        <option value="Main Dishes"> Main Dishes</option>
                                        <option value="Desserts"> Desserts</option>
                                        <option value="Drinks Menu"> Drinks Menu</option>
                                    </select>
                                    <!-- <p style="margin-bottom: 0; padding-top: 10px; text-align: start; color: brown"> <small> <?php echo "" . $categoryErr; ?></small></p> -->
                                </div>
                                <div class="input-inner">
                                    <i class="fas fa-cloud-arrow-up icon"></i>
                                    <input id="file" type="file" name="image" />
                                    <label for="file" id="fileLabel" style="padding-left: 50px;">
                                        Select Image
                                    </label>
                                    <!-- <p style="margin-bottom: 0; padding-top: 10px; text-align: start; color: brown"> <small> <?php echo "" . $imageErr; ?></small></p> -->
                                </div>
                            </div>
                            <div class="input-group">
                                <div class="input-inner">
                                    <textarea name="description" id="" rows="3" class="input-field" placeholder="Description"></textarea>
                                    <!-- <p style="margin-bottom: 0; padding-top: 10px; text-align: start; color: brown"> <small> <?php echo "" . $descriptionErr; ?></small></p> -->
                                </div>
                            </div>
                            <div class="input-group">
                                <div class="input-inner">
                                    <button type="submit" class="form-btn btn-style-one" name="add-menu" id="submit_btn">
                                        <span class="btn-wrap">
                                            <span class="text-one">add menu</span>
                                            <span class="text-two">add menu</span>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            <?php
            $counter++; // Increment the counter
        }
            ?>
            </div>
    </div>

    <script src="./test.js"></script>
</body>

</html>