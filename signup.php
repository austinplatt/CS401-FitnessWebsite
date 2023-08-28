<!DOCTYPE html>
<html>
<head>
	<title>PlatinumPlatt Fitness | Sign Up</title>
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
        <h2 class="section-title">Sign Up</h2>

        <p class="section-description">Please enter your email and password to create an account.</p>

        <?php

            if (isset($_SESSION['error_message'])) {
                echo "<div class='error-message'>" . $_SESSION['error_message'] . "</div>";
                unset($_SESSION['error_message']); // clear the message after displaying
            }
        ?>


        <div class="signinContainer">
            <form method="post" action="signupHandler.php">

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" value="<?php echo isset($_SESSION['preserved_email']) ? htmlspecialchars($_SESSION['preserved_email']) : ''; ?>" required>
                </div>

                <?php
                    if (isset($_SESSION['preserved_email'])) {
                        unset($_SESSION['preserved_email']);
                    }
                ?>


                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" required>
                </div>
                <input type="submit" value="Sign Up">
            </form>
            <!-- already user -->
            <p>Already a member? <a href="signin.php">Sign in now</a>.</p>
            
        </div>
    </div>


</body>

</html>