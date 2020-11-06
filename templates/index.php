<?php
    session_start();
    if (!isset($_SESSION['user_name'])){
        header("Location: /IAP-Lab-Project/templates/login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <div class="container text-center" id="container">
        <!-- <div class="profile-container">
            <img src="<?php echo "images/".$_SESSION['photo'] ?>" alt="profile-pic">
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <div class="profile-panel">
                        <h1>My profile</h1>
                    <p>Full Name: <?php echo $_SESSION['user_name'] ?></p>
                    <p>Email: <?php echo $_SESSION['user_email'] ?></p>
                    <p>City of Residence: <?php echo $_SESSION['city'] ?></p>
                    <button class="sm-btn"><a href="change-password.php">Change Password</a></button>
                    <button class="sm-btn"><a href="../logout.php">Logout</a></button>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="shell">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="food-product">
                            <div class="food-img">
                            <!--food image goes in here-->
                                <img src="" alt="">
                            </div>
                            <div class="food-text">
                                <div class="food-title">
                                    <h3><!--food title goes in here--></h3>
                                </div>
                                <div class="food-description">
                                    <p><!--food description goes here--></p>
                                </div>
                                <div class="food-price">
                                    <div class="price-left">
                                        <span class="price"><!--food price goes in here--></span>
                                    </div>
                                    <div class="price-right">
                                        <a href="#" class="cart-btn">
                                            <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>