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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"></head>
<body>
    <div class="container text-center">
        <h1>Order Food Items</h1>
        <div class="shell">
            <div class="container">
                <div class="row">
                    <?php
                        include_once '../db_connect.php';
                        $con = new DBConnector();
                        $pdo = $con->connectToDB();

                        $stmt = $pdo->prepare("SELECT * FROM foods");
                        $stmt->execute();
                        $results = $stmt->fetchAll();
                        foreach($results as $food){
                    ?>
                            <div class="col-md-4">
                                <div class="food-product">
                                    <div class="food-img">
                                        <img src="<?php echo "images/food_images/".$food['food_image'] ?>" alt="">
                                    </div>
                                    <div class="food-text">
                                        <div class="food-title">
                                            <h3><?php echo $food['food_name'] ?></h3>
                                        </div>
                                        <div class="food-description">
                                            <p><?php echo $food['food_description'] ?></p>
                                        </div>
                                        <div class="food-price">
                                            <div class="price-left">
                                                <span class="price">Ksh <?php echo $food['food_price'] ?></span>
                                            </div>
                                            <div class="price-right">
                                                <a href="" class="cart-btn" data-toggle="modal" data-target="#comingsoonModal">
                                                    <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                            <div class="modal fade" id="comingsoonModal" tabindex="-1" role="dialog" aria-labelledby="comingsoonModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="comingsoonModalLabel">This Feature Is Coming Soon</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            This feature will be available to you soon!
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

<!-- For the cart btn -->
<!-- "../web_actions.php?add-to-cart=<?php //echo $food['food_id'] ?>" -->