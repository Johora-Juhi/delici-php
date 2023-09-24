<!-- database connection  -->
<?php
include_once('../includes/connect.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./test.css">
    <link rel="stylesheet" href="../css/global.css">
    <title>Modal Popup Box</title>
</head>

<body>
<div class="body-blackout"></div>

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
            <button class="hover-button btn-style-one popup-trigger" data-popup-trigger="<?= $modal_id?>">
                <span class="btn-wrap">
                    <span class="text-one">add menu</span>
                    <span class="text-two">add menu</span>
                </span>
            </button>
            <!-- body overlay -->

<!-- Modals Triggers -->
<!-- <button
  type="button"
  class="btn btn-sm btn-primary shadow p-2 px-3 popup-trigger"
  data-popup-trigger="one">
  Popup Trigger One
</button>

<button
  type="button"
  class="btn btn-sm btn-primary shadow p-2 px-3 popup-trigger"
  data-popup-trigger="two">
  Popup Trigger Two
</button> -->

<!-- Modals -->
<div 
  class="popup-modal shadow" 
  data-popup-modal="<?= $modal_id?>">
  <i class="fa-solid fa-2x fa-times popup-modal__close"></i>
  <h1 class="font-weight-bold">
    <?= $title?>
  </h1>
</div>
<!-- 
<div 
  class="popup-modal shadow" 
  data-popup-modal="two">
  <i class="fas fa-2x fa-times text-white bg-primary p-3 popup-modal__close"></i>
  <h1 class="font-weight-bold">
    Modal Two Title
  </h1>
</div> -->
    <?php
        $counter++; // Increment the counter
    }
    ?>
</div>

    <script src="./test.js"></script>
</body>

</html>