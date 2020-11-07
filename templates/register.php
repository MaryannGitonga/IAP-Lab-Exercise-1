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
            <form action="../web_actions.php" method="post" enctype="multipart/form-data">
                <h1>Register</h1>
                    
                <input type="text" name="full-name" id="full-name" placeholder="Full Name">
                
                <input type="email" name="email" id="email" placeholder="Email">

                <input type="text" name="residence" id="residence" placeholder="City of Residence">
                
                <input type="file" name="profile-photo" id="profile-photo" placeholder="Profile Picture" value="">
                
                <input type="password" name="password" id="password" placeholder="Password" minlength="8">

                <input type="password" name="confirm-password" id="confirm-password" placeholder="Confirm Password" minlength="8">

                <button type="submit"><input type="submit" name="register" value="Register"></button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Join the Community</h1>
                    <p>Already a member?</p>
                    <button class="sm-btn"><a href="login.php">Login</a></button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>