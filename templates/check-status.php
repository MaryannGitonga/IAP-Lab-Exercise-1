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
            <form action="" method="post" id="status-form">
                <h1>Check Order Status</h1>
                    
                <input type="number" name="order-id" id="order-id" placeholder="Order ID" value="">
                
                <button type="submit" id="status-button">Check Status</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Check Status</h1>
                    <p>Want to order?</p>
                    <button class="sm-btn"><a href="index.php">Make an Order</a></button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="order.js"></script>
</body>
</html>