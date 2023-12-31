<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Menu - Delici</title>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="../js/menu.js"></script>
    <style>

    </style>
</head>

<body>
    <div class="add-container">
        <div class="left-bg"><img src="../images/background/bg-1.png" alt=""></div>
        <div class="right-bg"><img src="../images/background/bg-2.png" alt=""></div>
        <p class="header">Add Menu</p>
        <?php
        $approot = $_SERVER['DOCUMENT_ROOT'] . "/Delici-Client/";
        $name = $speciality = $price = $category = $image = $description = "";
        $nameErr = $specialityErr = $priceErr = $categoryErr = $imageErr = $descriptionErr = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            // name input validation 
            if (empty($_POST["name"])) {
                $nameErr = " * Name is required";
            } else {
                $name = $_POST["name"];
                // check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                    $nameErr = " Only letters and white space";
                    $name = '';
                }
            }

            // speciality input validation 
            // if (empty($_POST["speciality"])) {
            //     $specialityErr = " * Speciality is required";
            // } else {
            $speciality = $_POST["speciality"];
            // }

            // price input validation 
            if (empty($_POST["price"])) {
                $priceErr = " * Price is required";
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
                $imageErr = " * Image is required";
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

                $select_menu = "SELECT * FROM `menu-table` where menu_name = '$name' ";
                $result_menu = mysqli_query($con, $select_menu);
                $menu_count = mysqli_num_rows($result_menu);

                // check if the menu already exist 
                if ($menu_count  > 0) {
                    echo '<script>
                            Swal.fire({
                                title: "Oops!",
                                text: "This menu already exists!",
                                icon: "error",
                            });
                      </script>';
                } else {

                    $insert_query = "INSERT INTO `menu-table` (menu_name, menu_speciality, menu_price, menu_category, menu_image, menu_description, time) VALUES ('$name', '$speciality', '$price', '$category', '$image', '$description', NOW())";
                    $result = mysqli_query($con, $insert_query);
                    if ($result) {
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
        }
        ?>
        <form action="" class="form-container" method="post" enctype="multipart/form-data">
            <div class="input-group">
                <div class="input-inner">
                    <input type="text" name="name" class="input-field" placeholder="Name" id="-input" data-original-title="Please enter Name" title="">
                    <p style="margin-bottom: 0; padding-top: 10px; text-align: start; color: brown"> <small> <?php echo "" . $nameErr; ?></small></p>
                </div>
                <div class="input-inner">
                    <input type="text" name="speciality" class="input-field" placeholder="Speciality">
                    <p style="margin-bottom: 0; padding-top: 10px; text-align: start; color: brown"> <small> <?php echo "" . $specialityErr; ?></small></p>
                </div>
                <div class="input-inner">
                    <input type="text" name="price" class="input-field" placeholder="Price">
                    <p style="margin-bottom: 0; padding-top: 10px; text-align: start; color: brown"> <small> <?php echo "" . $priceErr; ?></small></p>
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
                    <p style="margin-bottom: 0; padding-top: 10px; text-align: start; color: brown"> <small> <?php echo "" . $categoryErr; ?></small></p>
                </div>
                <div class="input-inner">
                    <i class="fas fa-cloud-arrow-up icon"></i>
                    <input id="file" type="file" name="image" />
                    <label for="file" id="fileLabel" style="padding-left: 50px;">
                        Select Image
                    </label>
                    <p style="margin-bottom: 0; padding-top: 10px; text-align: start; color: brown"> <small> <?php echo "" . $imageErr; ?></small></p>
                </div>
            </div>
            <div class="input-group">
                <div class="input-inner">
                    <textarea name="description" id="" rows="3" class="input-field" placeholder="Description"></textarea>
                    <p style="margin-bottom: 0; padding-top: 10px; text-align: start; color: brown"> <small> <?php echo "" . $descriptionErr; ?></small></p>
                </div>
            </div>
            <div class="input-group">
                <div class="input-inner">
                    <button type="submit" class="form-btn btn-style-one" name="add-menu" id="submit_btn" style="box-sizing: border-box;">
                        <span class="btn-wrap">
                            <span class="text-one">add menu</span>
                            <span class="text-two">add menu</span>
                        </span>
                    </button>
                </div>
            </div>
        </form>
<script>
    const file = document.getElementById('file');
const fileLabel = document.getElementById('fileLabel');


file.addEventListener('change', () => {
	if (file.files.length > 0) {
		fileLabel.innerHTML = file.files[0].name;
	} else {
		fileLabel.innerHTML = 'Select Image';
	}
});
</script>
    </div>
</body>

</html>