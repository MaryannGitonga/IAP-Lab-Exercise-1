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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container text-center">
        <h1>Order Food Items</h1>
        <div class="shell">
            <div class="">
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
                                                <a href="../web_actions.php?add-to-cart=<?php echo $food['food_id'] ?>" class="cart-btn">
                                                    <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                                </a>
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
</body>
</html>