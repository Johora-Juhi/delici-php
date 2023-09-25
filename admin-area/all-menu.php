<!--Menu Section -->
<div class="all-menu-container">
    <!-- Appetizers section -->
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
            $modal_id = $menu['menu_id']; // Unique ID for modal background
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
                        <span class="text-one">make changes</span>
                        <span class="text-two">make changes</span>
                    </span>
                </button>
                <?php
                $approot = $_SERVER['DOCUMENT_ROOT'] . "/Delici-Client/";
                // $name = $speciality = $price = $category = $image = $description = "";
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

                    // echo $image;
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
                            // echo "<script>window.open('./test.php','_self')</script>";
                            echo '
                            <script>
                                Swal.fire({
                                    title: "Success!",
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
                                    <i class="fa-solid fa-list icon"></i>
                                    <select class="input-field input-select" name="category" style="padding-left: 45px;">
                                        <option value="<?= $menu_category ?>"> <?= $menu_category ?></option>
                                        <!-- <option value=""> Select a Category</option> -->
                                        <option value="Appetizers"> Appetizers</option>
                                        <option value="Main Dishes"> Main Dishes</option>
                                        <option value="Desserts"> Desserts</option>
                                        <option value="Drinks Menu"> Drinks Menu</option>
                                    </select>
                                    <p style="margin-bottom: 0; padding-top: 10px; text-align: start; color: brown"> <small> <?php echo "" . $categoryErr; ?></small></p>
                                </div>
                                <div class="input-inner">
                                    <div class="edit-img">
                                        <i class="fa-solid fa-cloud-arrow-up icon"></i>
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
        <?php
        }
        ?>
    </div>
</div>