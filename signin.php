<!DOCTYPE html>
<html>
<head>
	<title>PlatinumPlatt Fitness | Sign In</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" type="image/png" href="images/favicon.ico">
</head>

<body>

    <div class="header">
			<?php include 'header.php'; ?>
	</div>

	<div class="navigation">
		<?php include('nav.php'); ?>
	</div>


    <div class="mainBody">
        <h2 class="section-title">Sign In</h2>

        <p class="section-description">Please enter your email and password to sign in.</p>

        <?php
            if (isset($_SESSION['error_message'])) {
                echo "<p>" . $_SESSION['error_message'] . "</p>";
                unset($_SESSION['error_message']);  // Clear the message so it doesn't persist
            }
        ?>

        <div class="signinContainer">
            <form method="post" action="loginHandler.php">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" value="<?php 
                        echo isset($_SESSION['last_signup_email']) ? htmlspecialchars($_SESSION['last_signup_email']) : 
                            (isset($_SESSION['preserved_email']) ? htmlspecialchars($_SESSION['preserved_email']) : '');
                    ?>" required>

                    <?php
                        // After using the last_signup_email for its purpose, clear it
                        if (isset($_SESSION['last_signup_email'])) {
                            unset($_SESSION['last_signup_email']);
                        }
                    ?>

                </div>
                
                <?php
                    // After using the preserved_email for its purpose, clear it
                    if (isset($_SESSION['preserved_email'])) {
                        unset($_SESSION['preserved_email']);
                    }
                ?>


                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" required>
                </div>

                <input type="submit" value="Sign In">
            </form>
            <!-- already user -->
            <p>Not a member? <a href="signup.php">Sign up now</a>.</p>

        </div>
    </div>


</body>

</html>