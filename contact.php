<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Careers | ByteHub Solutions</title>
    <link rel="stylesheet" href="CSS\styles.css">
    <link rel="icon" href="images\logo_v11_unmerged_bh_14a_icon.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    


    <?php include('templates\header.php');?>


<br><br><br>

<h2 class="center">Contact Us</h2>
<section class="container">
    <form action="mailhandler.php" method="POST" id="contactform">
        <input type="text" id="name" name="name" size="35" placeholder="Your Name" required><br>
        <input type="email" id="email" name="email" size="35" placeholder="Your Email" required><br>
        <input type="text" id="compname" name="compname" size="35" placeholder="Company Name"><br>
        <select name="country" id="country" required>
            <option value="" selected disabled hidden>Where are you from?</option>
            <option value="USA">United States of America</option>
            <option value="UK">United Kingdom</option>
            <option value="Middle East">Middle East</option>
            <option value="Canada">Canada</option>
        </select><br>
        <textarea name="comment" id="comment" cols="35" rows="10" placeholder="Your Message"></textarea><br>
        <button class="submit" name="submit" value="submit">Submit</button>
    </form>

</section>
<!-- footer -->

    <?php include('templates\footer.php')?>

    <?php include('Javascript\scripts.js')?>

</body>
</html>