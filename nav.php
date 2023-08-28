
<div class="topnav">
    <a href="index.php">HOME</a>
    <a href="about.php">ABOUT US</a>
    <a href="training.php">TRAINING</a>
    <a href="workouts.php">WORKOUTS</a>
    <a href="shop.php">SHOP</a>

    <?php
        // Check if the user is authenticated
        if (isset($_SESSION['authenticated']) && $_SESSION['authenticated'] === true) {
            echo '<a href="logout.php">LOGOUT</a>';
        } else {
            echo '<a href="signin.php">SIGN-IN</a>';
        }
    ?>
</div>
