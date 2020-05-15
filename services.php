<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Careers | ByteHub Solutions</title>
    <meta name="description" content="software development firm that wields next generation technologies in web development and business consulting">
    <meta name="keywords" content="business consulting, omnichannel development, web applications development, mobile application developement, support">
    <link rel="stylesheet" href="CSS\styles.css">
    <link rel="icon" href="images\logo_v11_unmerged_bh_14a_icon.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

<?php include('templates\header.php');?>

<br><br><br>
<h2 class="center">Our Services</h2>
<section id="servicesimg">
    <div class="sec1 fadein">
    <h3>Business Consulting</h3>
    <p>We prudently keep a tab on the steps of your adversaries along with yours.</p>
    <a href="businessconsulting.php" style="text-decoration: none; color:white">
    <img src="images\business consulting.jpg" alt="business consulting"><br>
    <button style="text-decoration: none"><strong>View Details</strong></a></button>
    </div> 
    <div class="sec2 fadein">
    <h3>Omni Channel Development</h3>
    <p>We avail you the best omni channel platforms to strategize from audience point of view.</p>
    <a href="omnidev.php" style="text-decoration: none; color:white">
    <img src="images\web development.jpg" alt="omni channel developement">
    <button style="text-decoration: none"><strong>View Details</strong></a></button>
    </div>
    <div class="sec3 fadein">
    <h3>IoT & AI</h3>
    <p>ByteHub prudently keeps a tab on the steps of your adversaries along with yours.</p>
    <a href="IoTnAI.php" style="text-decoration: none; color: white">
    <img src="images\iot.jpg" alt="IoT&AI"><br>
    <button style="text-decoration: none"><strong>View Details</strong></a></button>
    </div>
    <div class="sec6 fadein">
    <h3>IT Support</h3>
    <p>We proffer all kinds of internal and external IT supports based on your needs.</p>
    <a href="itsupport.php" style="text-decoration: none; color: white">
    <img src="images\tech.jpg" alt="IT SUpport"><br>
    <button style="text-decoration: none"><strong>View Details</strong></button>
    </div>
    <!-- <p>ByteHub prudently keeps a tab on the steps of your adversaries along with yours.</p> -->
   
    <!-- <p>ByteHub prudently keeps a tab on the steps of your adversaries along with yours.</p> -->
    

<script>
    var pics = document.getElementById("servicesimg");

var height,
		half;

window.addEventListener("resize", adjustHeightVars);
window.addEventListener("scroll", fadeBox);

function fadeBox () {	
	var x = pics.offsetTop - half;
	var y = window.pageYOffset;
	if (y >= x) {
		$(".servicesimg").addClass("fadein");
	}
}

function adjustHeightVars() {
	height = window.innerHeight;
	half = height * 0.35;
}

adjustHeightVars();
</script>

    
</section>
<div class="bottomstuff">
    <!-- <h5>"We help you "</h5> -->
    <p>Please feel free to contact us for any further enquiry</p>
    </div>
    <div class="conbtn">
    <button id="contactsbtn"></a><strong>Contact Us</strong></button>
    </div>
    <?php include('templates\footer.php')?>
    <?php include('Javascript\scripts.js')?>

</body>
</html>