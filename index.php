<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Home | ByteHub Solutions</title>
    <meta name="description" content="software development firm that wields next generation technologies in web development and business consulting">
    <meta name="keywords" content="business consulting, omnichannel development, web applications development, mobile application developement, support">
    <link rel="stylesheet" href="CSS\styles.css">
    <!-- <link rel="stylesheet" href="CSS\media(768).css"> -->
    <link rel="icon" href="images\logo_v11_unmerged_bh_14a_icon.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <?php include('templates\header.php');?>
    <!-- <header>
        <h1>ByteHub Solutions</h1>
    </header> -->
    <div class="slideshow-container">

<div class="mySlides fade">
    <div id="text">EXPLORE</div>
  <img src="images\aii.jpg" style="width:100%">
</div>

<div class="mySlides fade">
    <div id="text">DISCOVER</div>
  <img src="images\disc.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div id="text">INNOVATE</div>
  <img src="images\innov.jpg" style="width:100%">
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
  var slides = document.getElementsByClassName("mySlides");
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
  setTimeout(showSlides, 2500); // Change image every 2 seconds
}
</script>


    <main>
        <div class="maincontent">
            <h2 class="ml11">
  <span class="text-wrapper">
    <span class="line line1"></span>
    <span class="letters">Who We Are</span>
  </span>
</h2>

<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
            <p>ByteHub is a software development firm that wields next generation technologies 
                to prop up aspiring companies to reach their destination.</p>
            <p>
                We specialize in Business Consulting, Technology consulting, Web application development, Omni channel development, IOT, 
                Aritificial Intelligence, and IT support to both product based and service based companies. 
            </p>
            <p>
                We help the organizations automate processes, intensify brand value, increase efficiency and manage workflow. 
            </p>
            <p>
                We function as path finders to those who are just a few strategies away from destination and thereby unearth 
                our path with each of your conquests. 
            </p>
            <button id="aboutbtn"><strong>Who We Are</strong></a></button>
        </div>
        <!-- <script type="text/javascript">
            document.getElementById("aboutbtn").onclick = function () {
            location.href = "about.php";
            };
        </script> -->

        <div class="ourservices">
            <h2 class="service">Our Services</h2>
            <div class="gallery">
                <a href="businessconsulting.php">
                    <img src="images\233.jpg" alt="business consulting">
                <div class="desc"><strong>Business Consulting</strong></div></a>
            </div>
            <div class="gallery">
                <a href="omnidev.php">
                    <img src="images\wp2168806.jpg" alt="it services">
                <div class="desc"><strong>IT Services</strong></div></a>
            </div>
            <div class="gallery">
                <a href="IoTnAI.php">
                    <img src="images\iot-internet-of-things-map-uhd-4k-wallpaper.jpg" alt="IOT">
                <div class="desc"><strong>IoT & AI</strong></div></a>
            </div>
            <div class="gallery">
                <a href="itsupport.php">
                    <img src="images\tech supp.jpg" alt="IT support">
                <div class="desc"><strong>IT Support</strong></div></a>
            </div>
            
            <button class="morebtn" onclick="location.href='services.php'"><strong>What We Do</strong></button>
    </main>

            <div id="bottomcontent">
                <div class="hideme" style="margin-top: 0%">
                <img src="images\0.jpg" alt="shake hands" class="bottomimg">
                <h2>Go Beyond <br> Expectations</h2>
                <p>Unlock the world of possibilities and opportunities with us. Our ethical and scrupulous work have left us top of the line with customers from about 8 countries. We grip a certified crew of 150 professionals with dedicated teams. Our expertise from various fields offer you the service and solution.</p>
                <br><br>
                <button id="contactbtn"><strong>Contact Us</strong></button>
                </div>
            </div>

            <script>
            $(function(){  // $(document).ready shorthand
  $('.monster').fadeIn('slow');
});

$(document).ready(function() {
    
    /* Every time the window is scrolled ... */
    $(window).scroll( function(){
    
        /* Check the location of each desired element */
        $('.hideme').each( function(i){
            
            var top_of_object = $(this).position().top + $(this).outerHeight();
            var middle_of_object = $(window).scrollTop() + $(window).height();
            
            /* If the object is completely visible in the window, fade it it */
            if( top_of_object < middle_of_object ){
                
                $(this).animate({'opacity':'1'},500);
                    
            }
            
        }); 
    
    });
    
});

var textWrapper = document.querySelector('.ml11 .letters');
textWrapper.innerHTML = textWrapper.textContent.replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>");


anime.timeline({one: true})
//   .add({
//     targets: '.ml11 .line',
//     scaleY: [0,1],
//     opacity: [0.5,1],
//     easing: "easeOutExpo",
//     duration: 700
//   })
  .add({
    targets: '.ml11 .line',
    translateX: [0, document.querySelector('.ml11 .letters').getBoundingClientRect().width + 10],
    easing: "easeOutExpo",
    duration: 1000,
    delay: 1000
  }).add({
    targets: '.ml11 .letter',
    opacity: [0,1],
    easing: "easeOutExpo",
    duration: 1000,
    offset: '-=775',
    delay: (el, i) => 34 * (i+1)
  }).add({
    targets: '.ml11',
    opacity: 1,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });
</script>
<style>
    .ml11 {
  font-weight: 700;
  font-size: 3.5em;
  text-align: center;
  color: #01295c;
}

.ml11 .text-wrapper {
  position: relative;
  display: inline-block;
  padding-top: 0.1em;
  padding-right: 0.05em;
  padding-bottom: 0.15em;
}

.ml11 .line {
  background-color: #01295c;
  opacity: 0;
  position: absolute;
  left: 0;
  height: 100%;
  width: 3px;
  background-color: #fff;
  transform-origin: 0 50%;
}

.ml11 .line1 { 
  top: 0; 
  left: 0;
}

.ml11 .letter {
  display: inline-block;
  line-height: 1em;
}
</style>



            
    <?php include('Javascript\scripts.js');?>
    <?php include('templates\footer.php');?>
   
<!-- footer -->


     <button onclick="topFunction()" id="myBtn" title="Go to top"><img src="images\uparrow.png" alt="Top"></button>
    
 
    <?php include('Javascript\scripts.js')?>

</body>
</html>