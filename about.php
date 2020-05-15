<!DOCTYPE html>
<html lang="en">
    <head>
    <title>About | ByteHub Solutions</title>
    <meta name="description" content="software development firm that wields next generation technologies in web development and business consulting">
    <meta name="keywords" content="business consulting, omnichannel development, web applications development, mobile application developement, support">
    <link rel="stylesheet" href="CSS\styles.css">
    <link rel="stylesheet" href="CSS\media(768).css">
    <link rel="icon" href="images\logo_v11_unmerged_bh_14a_icon.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <?php include('templates\header.php');?>
    <br><br><br>


    <h2 class="center">About Us</h2>
    
    <section class="sec">
    <div id="about">
    <img class = "visionimage" src="images\656693.jpg" alt="vision">
    <h3 class="vision">Our Vision & Mission</h3>
    <ul class="points">
        <li>We strongly believe that technological innovation can bring about a great revolution 
        in your venture and we carry the right technology transformation solutions.</li>
        <li>We apprehends the nature of demand and produce different technological support 
        to different industries. We yield high quality software that exceeds customer satisfaction.</li>
        <li>Our only aim is to increase competence and dwell the organizations among the 
        top competing firms in the market with technology as the medium.</li>
        <li>What makes us one of the best software development firms is its accountability 
        and authenticity to the clients. Our mission is to customize technology to our client’s need. 
        Our vision is to see our victory through yours. </li>
    </ul>
    </div>
    <br>
    
    <div id="obj">
    <img class = "objimage" src="images\Setting-Goals@2x-1024x768.png" alt="objective">
    <h3 class="objective">Objective</h3>  
    
    <ul class="objpoints">
        <li>We ensure to deliver high quality software and standard technological solutions. </li>
        <li>We endeavor to achieve is to expand the possibilities and help its clientele accomplish global significance.</li>
        <li>We intend to construct brand awareness through our technological ability.</li>
        <li>We discerns the target audience for each domain and functions accordingly.</li>
        <li>We believe that a small innovation in technology can bring about a great change.</li>
        <li>Our goal is to innovate and personalize technology to your need.</li>
    </ul>  
    </div>
    </section>
    <section id="team">
        <h3>Our Team</h3>
        <p> With over 150+ Professionals across the globe, we challenge the technological transformations for our clients.</p>
        <img src="images\teamwork-co-workers-office-business-wallpaper.jpg" alt="people">
    </section>

    <div class="slideshow-container" id="slide">

<div class="mySlides1 fade">
  <div class="text1">We Believe in TRUST</div>
  <img src="images\765400-download-free-business-wallpapers-3840x2160.jpg" style="width:100%">
</div>

<div class="mySlides1 fade">
  <div class="text2">We Believe in GROWTH</div>
  <img src="images\bi1.jpg" style="width:100%">
</div>

<div class="mySlides1 fade">
  <div class="text3">We Believe in NETWORK</div>
  <img src="images\4k-network-satellite-globe-art.jpg" style="width:100%">
</div>

</div>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides1");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 3000); // Change image every 2 seconds
}
</script>

    <!-- <div id="businessimg">
        <img src="images\765400-download-free-business-wallpapers-3840x2160.jpg" alt="business">
    </div> -->
    
<?php include('templates\footer.php');?>

    <?php include('Javascript\scripts.js')?>

</body>
</html>