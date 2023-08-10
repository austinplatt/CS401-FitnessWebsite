<!DOCTYPE html>
<html>
<head>
    <title>PlatinumPlatt Fitness</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="navigation">
        <?php include('nav.php'); ?>
    </div>

    <div class="section">
        <div class="container">
            <div class="logo">
                <img src="logo.png" alt="PlatinumPlatt Fitness Logo">
            </div>
            <div class="text-box">
                <h2 class="section-title">Our Mission</h2>
                <p class="section-description">At PlatinumPlatt Fitness, our mission is to empower individuals to achieve their fitness goals and live a healthier, more active lifestyle.</p>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="text-box">
                <h2 class="section-title">Discover the Truth in Fitness</h2>
                <p class="section-description">Get ready to uncover the science behind effective workouts, nutrition, and overall wellness. Our experts are here to guide you on your fitness journey.</p>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <h2 class="section-title">Interested in a Membership?</h2>
            <form class="interest-form" action="submit_interest.php" method="post">
                <!-- Form fields here -->
                <button class="button" type="submit">Submit</button>
            </form>
        </div>
    </div>
