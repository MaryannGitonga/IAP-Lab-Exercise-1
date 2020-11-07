<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
<body style="height: 100vh;">
    <div class="container-form" id="container">
        <div class="form-container">
            <form action="../web_actions.php" method="post">
                <h1>Login</h1>

                <input type="email" name="email" id="email" placeholder="Email" required>
        
                <input type="password" name="password" id="password" placeholder="Password" required>
        
                <button type="submit"><input type="submit" name="login" value="Login"></button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>Not a member?</p>
                    <button class="sm-btn"><a href="register.php">Sign Up</a></button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>