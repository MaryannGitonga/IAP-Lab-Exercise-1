<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body style="height: 100vh;">
    <div class="container-form" id="container">
        <div class="form-container">
            <form action="" method="post" id="order-form">
                <h1>Make an Order</h1>
                    
                <input type="text" name="food-name" id="food-name" placeholder="Food Name" value="">
                
                <input type="number" name="food-quantity" id="food-quantity" placeholder="Food Quantity" value="">

                <button type="submit" id="order-button">Order Food</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Order Food</h1>
                    <p>Already ordered?</p>
                    <button class="sm-btn"><a href="check-status.php">Check Order Status</a></button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="order.js"></script>
</body>
</html>