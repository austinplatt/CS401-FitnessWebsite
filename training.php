<!DOCTYPE html>
<html>
<head>
        <title>PlatinumPlatt Fitness</title>
        <link rel="stylesheet" type="text/css" href="style.css">
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

                        <div class="left-image">
                                <img src="images\trainee.jpeg" alt="Trainer Image">


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
                                        <h2>PLATINUMPLATT BODY SUCCESS PROGRAM</h2>
                                        <p> As an outcome-driven establishment, it holds immense significance for us to guide every member towards attaining the fitness objectives that initially led them to our club. With this in mind, we've introduced our innovative 
                                            Body Success Program, designed to support each individual in achieving optimal outcomes in the shortest span possible. This program integrates the fundamental pillars of fitness, embodying the core components essential for 
                                            all triumphant fitness or weight loss endeavors. These pillars constitute the blueprint for your fitness achievements, rooted in the principles of Human Physiology, universally applicable regardless of your aspirations. 
                                            The extent and manner in which these principles are applied will be tailored according to your unique goals and lifestyle considerations.</p>
                                </div>
                                
                                <div class="section-title">
                                        <h2>GET STARTED WITH YOUR FREE BODY SUCCESS ANALYSIS</h2>
                                        <p> Every member will embark on the program by undergoing a thorough fitness assessment, meticulously tailored to define objectives grounded in the SMART approach (specific, measurable, attainable, realistic, and timely). 
                                            This assessment encompasses foundational body composition measurements, circumferential dimensions, and an exhaustive postural evaluation.
                                            
                                            Our team of nationally certified personal trainers, well-equipped and enthusiastic, will channel the insights gleaned from this assessment into crafting a personalized regimen. This program is specifically designed to 
                                            sidestep plateaus, mitigate the risk of injuries, and yield tangible, visible results in the shortest span possible. The integration of our online nutrition education program via dotFIT, accessible to every client, 
                                            ensures that the Body Success Program obliterates any uncertainties regarding your fitness aspirations.</p>
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