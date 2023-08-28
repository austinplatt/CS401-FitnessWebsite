<!DOCTYPE html>
<html>
<head>
        <title>PlatinumPlatt Fitness | About</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="icon" type="image/png" href="images/favicon.ico">
</head>

        <div class="header">
		<?php include 'header.php'; ?>
	</div>


        <div class="navigation">
	        <?php include('nav.php'); ?>
	</div>

        <body>

        <div class="mainBody">
        
                <div class="bodyContainer">

                        <div class="left-imageAbout">
                                <img src="images\fitness.jpeg" alt="Fitness Image">


                                <div class="form-Group">
                                
                                <form action="join.php" method="post">
                                        <h3>JOIN NOW</h3>
                                        <p>Join now to get a free 1 week trial!</p>

                                        <div class="form-row">
                                                <div class="input-group">
                                                <label for="fname">First name:</label>
                                                <input type="text" id="fname" name="fname" required>
                                                </div>
                                                
                                                <div class="input-group">
                                                <label for="lname">Last name:</label>
                                                <input type="text" id="lname" name="lname" required>
                                                </div>
                                        </div>

                                        <div class="form-row">
                                                <div class="input-group">
                                                <label for="email">Email:</label>
                                                <input type="text" id="email" name="email" required>
                                                </div>
                                                
                                                <div class="input-group">
                                                <label for="phone">Phone:</label>
                                                <input type="text" id="phone" name="phone" required>
                                                </div>
                                        </div>
                                        
                                        <input type="submit" value="Join Now">
                                        </form>
                                </div>




                        </div>
                        
                        <div class="main-text">
                        
                                <div class="section-title">               
                                        <h2>OUR MISSION</h2>
                                        <p>We are a fitness center dedicated to helping people reach their health and fitness goals. Our trainers are experienced and knowledgeable and will work with you to develop a personalized fitness plan that works for you.</p>
                                </div>
                                
                                <div class="section-title">
                                        <h2>DISCOVER THE TRUTH IN FITNESS</h2>
                                        <p> At PlatinumPlatt Fitness, we pride ourselves in being a locally owned and operated fitness club. Through your membership at PlatinumPlatt, you will recieve the necessary tools and skills to achieve your ideal physique. Our passionate and knowledgeable coaching staff will strive to help you reach your goals, both inside and outside the gym.</p>
                                </div>

                                <div class="club-info-Container">

                                        <div class="club-info">
                                                <h3>CLUB HOURS</h3>
                                                <ul>
                                                        <li>MONDAY            5:00 AM - 12:00 AM</li>
                                                        <li>TUESDAY            5:00 AM - 12:00 AM</li>
                                                        <li>WEDNESDAY            5:00 AM - 12:00 AM</li>
                                                        <li>THURSDAY            5:00 AM - 12:00 AM</li>
                                                        <li>FRIDAY            5:00 AM - 12:00 AM</li>
                                                        <li>SATURDAY            5:00 AM - 10:00 PM</li>
                                                        <li>SUNDAY            5:00 AM - 9:00 PM</li>
                                                </ul>
                                        </div>

                                        <!-- TODO  -->
                                        <div class="club-info">
                                                <h3>BUSINESS INFORMATION & LOCATIONS</h3>
                                                <h4>BOISE</h4>
                                                        1234 W Boise Ave, Boise ID 83706
                                                <h4>PHONE</h4>
                                                        (208)111-2222
                                                <h4>EMAIL</h4>
                                                        platinumplattfitness@boise.com
                                        </div>
                                </div>
                        
                        </div>
                        
                </div>
        </div>

        
        </body>

        <div class="footer">
                <?php include("footer.php"); ?>
        </div>
</html>
