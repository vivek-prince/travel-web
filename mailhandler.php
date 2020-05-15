<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Careers | ByteHub Solutions</title>
    <link rel="stylesheet" href="CSS\styles.css">
    <link rel="icon" href="images\logo_v11_unmerged_bh_14a_icon.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    


    <?php include('templates\header.php');?>


<br><br><br><br>

<h2 class="center">Contact Us</h2>
<div id="formsubmit">
<?php
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $compname=$_POST['compname'];
        $country=$_POST['country'];
        $comment=$_POST['comment'];

        $to='vivekprince1994@gmail.com';
        $subject='Contact Form Submission';
        $message="Name: ".$name."\n"."Email: ".$email."\n"."Company Name: ".$compname."\n"."Country: ".$country."\n"."Comment: ".$comment;
        $headers="From: ".$email;

        if(mail($to, $subject, $message, $headers)){
            echo "<h2>Sent Successfully! Thank you! We will get in touch with you shortly!!!</h2>";        }
        else {
            echo "<h2>Something went wrong!</h2>";
        }
    }?>
    <br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>
    <style>
        #formsubmit{
            background-color: white;
            text-align: center;
            color: #01295c;
        }
        </style>

<?php include('templates\footer.php')?>

<?php include('Javascript\scripts.js')?>

</body>
</html>