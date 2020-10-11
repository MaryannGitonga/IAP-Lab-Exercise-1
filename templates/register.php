<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <div class="container" id="container">
        <div class="form-container">
            <form action="../register_action.php" method="post">
                <h1>Register</h1>
                    
                <input type="text" name="full-name" id="full-name" placeholder="Full Name">
                
                <input type="email" name="email" id="email" placeholder="Email">

                <input type="text" name="residence" id="residence" placeholder="City of Residence">
                
                <input type="file" name="profile-photo" id="profile-photo" placeholder="Profile Picture">
                
                <input type="password" name="password" id="password" placeholder="Password">

                <button type="submit"><a href="login.html">Register</a></button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Join the Community</h1>
                    <p>Already a member?</p>
                    <button class="sm-btn"><a href="login.html">Login</a></button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>