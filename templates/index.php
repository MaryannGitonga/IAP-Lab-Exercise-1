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
<body>
    <div class="container" id="container">
        <div class="profile-container">
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
        </div>
    </div>
</body>
</html>