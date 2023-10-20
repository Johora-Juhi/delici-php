<!-- database connection -->
<?php
include_once('../includes/connect.php');
// include_once('../functions/common_functions.php');
@session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delici - Registration</title>
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>
    <div class="registration-section">
    
        <div class="section-heading">user registration</div>
        <?php
        $name = $email = $password = $confirm_password = $phone = $description = "";
        $nameErr = $emailErr = $passwordErr = $confirm_passwordErr = $phoneErr = $descriptionErr = "";

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
        }
        ?>
        <form action="" method="post" class="registration-container">
            <div class="input-icon">
                <i class="icon fa-regular fa-user"></i>
                <input name="name" type="text" class="input-field" placeholder="Your name" style="padding-left: 45px;">
            </div>
            <p style="margin-top: 0; margin-bottom: 0; padding-bottom:10px; padding-top: 10px; text-align: start; color: brown"> <small> <?php echo "" . $nameErr; ?></small></p>
            <div class="input-icon">
                <i class="icon fa-regular fa-envelope"></i>
                <input name="email" type="email" class="input-field" placeholder="Your email" style="padding-left: 45px;">
            </div>
            <p style="margin-top: 0; margin-bottom: 0; padding-bottom:10px; padding-top: 10px; text-align: start; color: brown"> <small> <?php echo "" . $emailErr; ?></small></p>
            <div class="input-icon">
                <i class="icon fa-solid fa-lock"></i>
                <input name="password" id="password" type="password" class="input-field" placeholder="Enter your password" style="padding-left: 45px;" onkeyup="check()">
            </div>
            <p style="margin-top: 0; margin-bottom: 0; padding-bottom:10px; padding-top: 10px; text-align: start; color: brown"> <small> <?php echo "" . $passwordErr; ?></small></p>
            <div class="input-icon">
                <i class="icon fa-solid fa-lock"></i>
                <input name="confirm_password" id="confirm_password" type="password" class="input-field" placeholder="Confirm password" style="padding-left: 45px;" onkeyup="check()">
            </div>
            <p style="margin-top: 0; margin-bottom: 0; padding-bottom:10px; padding-top: 10px; text-align: start; color: brown"> <small> <?php echo "" . $confirm_passwordErr; ?></small></p>
            <div class="input-icon">
                <i class="icon fa-solid fa-phone"></i>
                <input name="phone" type="tel" class="input-field" placeholder="Your Phone" style="padding-left: 45px;">
            </div>
            <p style="margin-top: 0; margin-bottom: 0; padding-bottom:10px; padding-top: 10px; text-align: start; color: brown"> <small> <?php echo "" . $phoneErr; ?></small></p>
            <button type="submit" class="form-btn submit_btn" id="submit_btn" name="register" id="submit_btn" disabled>
                <span class="btn-wrap">
                    <span class="text-one">register</span>
                    <span class="text-two">register</span>
                </span>
            </button>
            <p class="">Already registered? <a href="./login.php">Login</a></p>

        </form>
    </div>
    </body>

</html>