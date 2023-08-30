<?php
if (empty(session_id()) && !headers_sent()) {
    session_start();
}

$current_page = basename($_SERVER['PHP_SELF']);

?>
<div class="topnav">
    <a href="index.php" class="<?php echo $current_page == 'index.php' ? 'active' : ''; ?>">HOME</a>
    <a href="about.php" class="<?php echo $current_page == 'about.php' ? 'active' : ''; ?>">ABOUT US</a>
    <a href="training.php" class="<?php echo $current_page == 'training.php' ? 'active' : ''; ?>">TRAINING</a>
    <a href="workouts.php" class="<?php echo $current_page == 'workouts.php' ? 'active' : ''; ?>">WORKOUTS</a>
    <a href="shop.php" class="<?php echo $current_page == 'shop.php' ? 'active' : ''; ?>">SHOP</a>

    <?php
        // Check if the user is authenticated
        if (isset($_SESSION['authenticated']) && $_SESSION['authenticated'] === true) {
            echo '<a href="logout.php">LOGOUT</a>';
        } else {
            echo '<a href="signin.php" class="' . ($current_page == 'signin.php' ? 'active' : '') . '">SIGN-IN</a>';
        }
    ?>
</div>
