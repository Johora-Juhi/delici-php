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
    <div class="login-section">
    
        <div class="section-heading">user login</div>
        <?php
        $name = $email = $password = "";
        $nameErr = $emailErr = $passwordErr = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if (empty($_POST["email"])) {
                $emailErr = "Email is required";
            } else {
                $email = $_POST["email"];
                // check if e-mail address is well-formed
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = " Invalid email format";
                }
            }
            // name input validation 
            if (empty($_POST["password"])) {
                $passwordErr = " * password is required";
            } else {
                $password = $_POST["password"];
            }
    
            // check if the user is regidtered 
            $select_user = "SELECT * FROM `user_table` WHERE user_email='$email'";
            $result_user = mysqli_query($con, $select_user);
            $user_data = mysqli_fetch_assoc($result_user);
            $user_count = mysqli_num_rows($result_user);
    
            if ($user_count > 0) {
                if (password_verify($password, $user_data['user_password'])) {
                    $_SESSION['user_email'] = $email;
                    if($user_data['user_role'] === 'admin'){
                        echo "<script>window.open('../admin-area/index.php?add_menu','_self')</script>";
                    }else{
                        echo "<script>window.open('../index.php','_self')</script>";
                    }
                } else {
                    echo "<script>alert('Incorrect password')</script>";
                }
            } else {
                echo "<script>alert('User is not registered')</script>";
            }
        }
        ?>
        <form action="" method="post" class="login-container">
            <div class="input-icon">
                <i class="icon fa-regular fa-envelope"></i>
                <input name="email" type="email" class="input-field" placeholder="Your email" style="padding-left: 45px;">
            </div>
            <p style="margin-top: 0; margin-bottom: 0; padding-bottom:10px; padding-top: 10px; text-align: start; color: brown"> <small> <?php echo "" . $emailErr; ?></small></p>
            <div class="input-icon">
                <i class="icon fa-solid fa-lock"></i>
                <input name="password" type="password" class="input-field" placeholder="Enter your password" style="padding-left: 45px;" onkeyup="check()">
            </div>
            <p style="margin-top: 0; margin-bottom: 0; padding-bottom:10px; padding-top: 10px; text-align: start; color: brown"> <small> <?php echo "" . $passwordErr; ?></small></p>
            
            <button type="submit" class="form-btn btn-style-one" id="submit_btn" name="login">
                <span class="btn-wrap">
                    <span class="text-one">login</span>
                    <span class="text-two">login</span>
                </span>
            </button>
            <p class="text">Don't have an account? <a class="link" href="./user-registration.php">Registration</a></p>

        </form>
    </div>
    </body>

</html>