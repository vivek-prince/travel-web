<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home | ByteHub Solutions</title>
    <meta name="description" content="software development firm that wields next generation technologies in web development and business consulting">
    <meta name="keywords" content="business consulting, omnichannel development, web applications development, mobile application developement, support">
    <link rel="stylesheet" href="CSS\styles.css">
    <link rel="icon" href="images\logo_v11_unmerged_bh_14a_icon.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php include('templates\header.php');?>

<br><br><br>
<h2 class="center">Careers</h2>
<!-- <br><br><br><br> -->
<section id="careers">
    <!-- <h2>Your Journey Starts Here</h2> -->
    <h2 class="ml9">
  <span class="text-wrapper">
    <span class="letters">Your Journey Starts Here!</span>
  </span>
</h1>

<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <img src="images\candidates-waiting-to-interview-1-1.jpg" alt="job opening">
    <h3>Job Openings</h3>
    <h5>Java Developer (Exp: 1-3 Yrs)</h5>
    <h6>Location: Bangalore</h6>
    <button id="detailsbtn" style="text-decoration: none; color: white"><a href="Javadev.php"><strong>Details</strong></a></button>
    <br><br>
    <h5>PHP Developer (Exp: 1-3 Yrs)</h5>
    <h6>Location: Bangalore</h6>
    <button id="detailsbtn" style="text-decoration: none; color: white"><a href="phpdev.php"><strong>Details</strong></a></button>
    <br><br>
    <h5>DotNet Developer (Exp: 4-5 Yrs)</h5>
    <h6>Location: Bangalore</h6>
    <button id="detailsbtn" style="text-decoration: none; color: white"><a href="dotnet.php"><strong>Details</strong></a></button>
    <br><br>
</section>
<style>

.ml9 .text-wrapper {
  position: relative;
  display: inline-block;
  padding-top: 0.2em;
  padding-right: 0.05em;
  padding-bottom: 0.1em;
  overflow: hidden;
}

.ml9 .letter {
  transform-origin: 50% 100%;
  display: inline-block;
  line-height: 1em;
}

</style>
<script>
    var textWrapper = document.querySelector('.ml9 .letters');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({one: true})
  .add({
    targets: '.ml9 .letter',
    scale: [0, 1],
    duration: 1500,
    elasticity: 600,
    delay: (el, i) => 45 * (i+1)
//   }).add({
//     targets: '.ml9',
//     opacity: 0,
//     duration: 1000,
//     easing: "easeOutExpo",
//     delay: 1000
  });
</script>

<!-- <h4 class="comingsoon">Coming Soon!</h4> -->


     <button onclick="topFunction()" id="myBtn" title="Go to top"><img src="images\uparrow.png" alt="Top"></button>
    
     <?php include('templates\footer.php')?>
 
    <?php include('Javascript\scripts.js')?>

</body>
</html>