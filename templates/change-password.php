<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <div class="container-form" id="container">
        <div class="form-container">
            <form action="../web_actions.php" method="post">
                <h1>Change Password</h1>

                <input type="password" name="current-pass" id="current-pass" placeholder="Current Password">
        
                <input type="password" name="new-pass" id="new-pass" placeholder="New Password">

                <input type="password" name="confirm-pass" id="confirm-pass" placeholder="Confirm New Password">
        
                <button type="submit"><input type="submit" name="change-pass" value="Change Password"></button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Change Password</h1>
                    <p>Don't want to update password?</p>
                    <button class="sm-btn"><a href="index.php">Go Back</a></button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>