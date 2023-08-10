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
            <h2 class="section-title">Our Mission</h2>
            <p class="section-description">At PlatinumPlatt Fitness, our mission is to empower individuals to achieve their fitness goals and live a healthier, more active lifestyle.</p>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <h2 class="section-title">Discover the Truth in Fitness</h2>
            <p class="section-description">Get ready to uncover the science behind effective workouts, nutrition, and overall wellness. Our experts are here to guide you on your fitness journey.</p>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <h2 class="section-title">Interested in a Membership?</h2>
            <form class="interest-form" action="submit_interest.php" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" required>
                <label for="message">Message:</label>
                <textarea id="message" name="message"></textarea>
                <button class="button" type="submit">Submit</button>
            </form>
        </div>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>

