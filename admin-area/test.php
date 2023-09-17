<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Validation with Tooltips</title>
    <link rel="stylesheet" href="./text.css">
    <style>

    </style>
</head>


<body>
    <div class="container">
        <form method="post">

        <div class="input-group">
    <div class="input-inner">
        <i class="fa-solid fa-list icon"></i>
        <select class="input-form input-field" name="category">
            <option value="">Select a Category</option>
            <option value="Appetizers">Appetizers</option>
            <option value="Main Dishes">Main Dishes</option>
            <option value="Desserts">Desserts</option>
            <option value="Drinks Menu">Drinks Menu</option>
        </select>
        <p style="margin-bottom: 0; padding-top: 10px; text-align: start; color: brown">
            <!-- <small><?php echo "" . $categoryErr; ?></small> -->
        </p>
    </div>
    <div class="input-inner">
        <input id="file" type="file" name="image" />
        <label for="file" class="file-label">Select Image</label>
        <p style="margin-bottom: 0; padding-top: 10px; text-align: start; color: brown">
            <!-- <small><?php echo "" . $imageErr; ?></small> -->
        </p>
    </div>
</div>


            <!-- Add more form fields here -->
            <button type="submit" id="id_stock_btn" class="btn btn-primary">Check Form</button>
        </form>
    </div>

    <!-- <script>
       $('.form-control').tooltip({
    trigger: "manual"
});

$("#id_stock_btn").click(function(){
    $(".form-control").each(function(){
        if(!$(this).val())
        {
            $(this).tooltip("show");
            return false;
        }
    });
    
});

$(".form-control").click(function(e) {
    $(this).tooltip("hide");
});
    </script> -->
</body>


</html>