<!DOCTYPE html>
<html>
<head>
        <title>PlatinumPlatt Fitness | Shop</title>
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

                        
                        <div class="main-text">
                        
                                <div class="shirt-grid">
                                        <div class="shirt-image" onclick="displaySoldOut(this)">  
                                                <img src="images\artboard.jpg" alt="Shirt1 Image">             
                                        <div class="sold-out">SOLD OUT</div>
                                        </div>
                                        
                                        <div class="shirt-image" onclick="displaySoldOut(this)">
                                                <img src="images\artboard (1).jpg" alt="Shirt2 Image">
                                        <div class="sold-out">SOLD OUT</div>
                                                
                                        </div>
                                        
                                        <div class="shirt-image" onclick="displaySoldOut(this)"> 
                                                <img src="images\artboard (2).jpg" alt="Shirt3 Image">   
                                        <div class="sold-out">SOLD OUT</div>       
                                        
                                        </div>
                                        
                                        <div class="shirt-image" onclick="displaySoldOut(this)">
                                                <img src="images\artboard (3).jpg" alt="Shirt4 Image">
                                        <div class="sold-out">SOLD OUT</div>
                                                
                                        </div>

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


        <script>
                function displaySoldOut(parentElement) {
                const soldOutDiv = parentElement.querySelector('.sold-out');
                if (soldOutDiv) {
                        soldOutDiv.style.display = "block";
                }
                
                }

        </script>
        
        </body>

        <div class="footer">
                <?php include("footer.php"); ?>
        </div>
</html>