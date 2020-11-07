<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body style="height: 100vh;">
    <div class="container" id="container">
        <div class="form-container">
            <form action="../web_actions.php" method="post" enctype="multipart/form-data">
                <h1>Add Food Item</h1>
                    
                <input type="text" name="food-name" id="food-name" placeholder="Food Name">
                
                <input type="text" name="food-description" id="food-description" placeholder="Food Description">

                <input type="text" name="food-price" id="food-price" placeholder="Food Price">

                <input type="file" name="food-photo" id="food-photo" placeholder="Food Image" value="">
                
                <button type="submit"><input type="submit" name="add-food" value="Add Food"></button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Add food item</h1>
                    <p>Not a member?</p>
                    <button class="sm-btn"><a href="register.php">Join our Community</a></button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>