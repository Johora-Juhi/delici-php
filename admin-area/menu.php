<?php
include_once('../includes/connect.php')
?>
<p class="header">All Menu</p>

<div class="datatable-container">
    <!-- ======= Table ======= -->
    <table class="datatable">
        <thead>
            <tr>
                <th>Sl No</th>
                <th>Title</th>
                <th>Price</th>
                <th>Category</th>

                <th>Update</th>
                <th>Cancel </th>
            </tr>
        </thead>

        <tbody>
            <?php
            $select_query = "SELECT * FROM `menu-table`";
            $result = mysqli_query($con, $select_query);
            $number = 1;
            while ($menu = mysqli_fetch_array($result)) {
                $title = $menu['menu_name'];
                $menu_speciality = $menu['menu_speciality'];
                $menu_price = $menu['menu_price'];
                $menu_category = $menu['menu_category'];
                $menu_image = $menu['menu_image'];
                $menu_description = $menu['menu_description'];
                $modal_id = $menu['menu_id']; // Unique ID for modal 
            ?>
                <tr>
                    <td>
                        <?= $number ?>
                    </td>
                    <td><?= $title ?></td>
                    <td><?= $menu_price ?></td>
                    <td><?= $menu_category ?></td>
                    <!-- <td><?= $date ?></td>
          <td><?= $slot_time ?></td>
          <td><?php if (!empty($message)) {
                    echo $message;
                } else {
                    echo "None";
                } ?></td> -->
                    <td class=""> <button class="btn btn-success btn-sm rounded-0 popup-trigger" data-popup-trigger="<?= $modal_id ?>">Update</button></td>
                    </td>
                    <td>
                        <button class="btn btn-outline-danger btn-sm rounded-0 " data-bs-toggle="modal" data-bs-target="#exampleModal_<?php echo $modal_id ?>">Cancel</button>
                    </td>

                </tr>
                <!-- menu update  -->
                <?php

                if ($_SERVER["REQUEST_METHOD"] == "POST") {

                    $edit_id = $_POST['id'];
                    // name input validation 
                    if (empty($_POST["name"])) {
                        $name = $title;
                    } else {
                        $name = $_POST["name"];
                        // check if name only contains letters and whitespace
                        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                            $name = $title;
                        }
                    }

                    // speciality input validation 
                    $speciality = $_POST["speciality"];

                    // price input validation 
                    if (empty($_POST["price"])) {
                        $price = $menu_price;
                    } else {
                        $price = $_POST["price"];
                        // check if price only contains numbers or number string
                        if (!is_numeric($price)) {
                            $price = $menu_price;
                        }
                    }

                    // category input validation 
                    if (empty($_POST["category"])) {
                        $category = $menu_category;
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
                            $destination = "../uploads/" . $file_name;
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
                        $description = $menu_description;
                    } else {
                        $description = $_POST["description"];
                    }

                    // post operation of fields are not empty 
                    if ($name != '' and $price != '' and $category != '' and $image != '' and $description != '') {
                        $insert_query = "UPDATE `menu-table` SET menu_name = '$name', menu_speciality = '$speciality', menu_price ='$price', menu_category =  '$category', menu_image = '$image', menu_description = '$description', time =  NOW() WHERE menu_id = $edit_id ";
                        $result = mysqli_query($con, $insert_query);
                        if ($result) {
                            echo '
        <script>
            Swal.fire({
                title: "Success!",
                timer: 2000,
                text: "Menu added successfully!",
                icon: "success",
            });
        </script>';
                            echo "<script>window.open('./index.php?all-menu','_self')</script>";
                        }
                    } else {
                        echo '<script>
        Swal.fire({
            title: "Oops!",
            text: "There was a problem updating this menu. Please check again!",
            icon: "error",
        });
  </script>';
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

                                </div>
                                <div class="input-inner">
                                    <input type="text" name="speciality" class="input-field" placeholder="Speciality" value="<?= $menu_speciality ?>">

                                </div>
                                <div class="input-inner">
                                    <input type="text" name="price" class="input-field" placeholder="Price" value="<?= $menu_price ?>">

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

                                </div>
                                <div class="input-inner">
                                    <div class="edit-img">
                                        <i class="fas fa-cloud-arrow-up icon"></i>
                                        <input id="file<?= $modal_id ?>" type="file" name="image" />
                                        <label for="file<?= $modal_id ?>" id="fileLabel<?= $modal_id ?>" style="padding-left: 50px;">Select Image</label>
                                        <img src="../uploads/<?= $menu_image ?>">
                                    </div>

                                </div>
                            </div>
                            <div class="input-group">
                                <div class="input-inner">
                                    <textarea name="description" id="" rows="3" class="input-field" placeholder="Description"><?= $menu_description ?></textarea>

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
                    </div>
                </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal_<?php echo $modal_id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 text-danger" id="exampleModalLabel">Delete menu from the list</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="color: black;">
                Do you want to delete the menu <?= $title ?> from <?= $menu_category ?>?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                <button type="button" class="btn btn-danger"><a href="index.php?delete_menu=<?php echo $modal_id ?>" class="text-decoration-none text-light">Yes</a></button>
            </div>
        </div>
    </div>
</div>
<?php
                $number++;
            }
?>

</tbody>
</table>
</div>