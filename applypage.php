<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Careers | ByteHub Solutions</title>
    </head>

    <?php include('templates\header.php');?>

    
    <br><br><br><br>

<h2 class="center">Apply Now</h2>

<section id="appform">
<form action="applications.php" method="POST" class="aform" id="apform" enctype="multipart/form-data">
    <h6 class="require" style="color: red">* Marked fields are mandatory</h6>
    <p>
    <label for="fname">First Name<span style="color: red">*</span> :</label>
    <input type="text" name="fname" value="" placeholder=" First Name" required>
    </p>
    <p>
    <label for="lname">Last Name :</label>
    <input type="text" name="lname" value="" placeholder=" Last Name"><br>
    </p>
    <p>
    <label for="faname">Father's Name<span style="color: red">*</span> :</label>
    <input type="text" name="faname" value="" placeholder=" Father's Name" required>
    </p>
    <p>
    <label for="faname">Mother's Maiden Name<span style="color: red">*</span> :</label>
    <input type="text" name="moname" value="" placeholder=" Mother's Maiden Name" required>
    </p>
    <p>
    <label for="dob">Date of Birth :</label>
    <!-- <input type="date" name="dob" value="" placeholder=" Date"> -->
    <input placeholder="Date of Birth" class="textbox-n" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date" />
    </p>
    <p>
    <label for="email">Email ID<span style="color: red">*</span> :</label>
    <input type="email" name="email" value="" placeholder=" Email ID" required>
    </p>
    <p>
    <label for="gender">Gender :</label>
    <p1>
    <input type="radio" id="male" name="gender" value=" Male">
    <label for="male">Male</label>
    <input type="radio" id="female" name="gender" value="Female">
    <label for="female">Female</label>
    <input type="radio" id="other" name="gender" value="Other">
    <label for="other">Other</label>
    </p1></p>
    <label for="eduqual">Educational Qualification<span style="color: red">*</span> :</label>
    <select name="eduqual" id="eduqual" required>
        <option value="" selected disabled hidden>Qualification</option>
        <option value="B.E./B.Tech">B.E./B.Tech</option>
        <option value="M.E./M.Tech">M.E./M.Tech</option>
    </select>
    <p>
    <!-- <label for="pass">Year of Passing :</label>
    <input type="text" name="pass" value="" placeholder=" Year of Passing"> -->
    <label for="pass">Year of Passing<span style="color: red">*</span> :</label>
    <select name="pass" id="yearpass" required></select>
    </p>
    <p>
    <label for="job">Applying for<span style="color: red">*</span> :</label>
    <select name="job" id="jobapp" required>
        <option value="" selected hidden disabled require>Positions</option>
        <option value="Java">Java Developer</option>
        <option value="PHP">PHP Developer</option>
    </select></p>
    <h3>For Experienced Candidates</h3>
    <p>
    <label for="company">Current Company :</label>
    <input type="text" name="company" value="" placeholder=" Current Company"><br>
    </p>
    <p>
    <label for="crpos">Current Position :</label>
    <input type="text" name="crpos" value="" placeholder=" Current Position"><br>
    </p>
    <p>
    <label for="crsal">Current Salary :</label>
    <input type="text" name="crsal" value="" placeholder=" Current Salary"><br>
    </p>
    <p>
    <label for="expsal">Expected Salary :</label>
    <input type="text" name="expsal" value="" placeholder=" Expected Salary"><br>
    </p>
    <p>
    <label for="expdate">Expected Date of Joining<span style="color: red">*</span> :</label>
    <!-- <input type="date" name="expdate" value="" placeholder=" Expected Date of Joining" required><br> -->
    <input placeholder="Expected Joining Date" class="textbox-n" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date" />
</p>
    <p>
    <label for="resume">Upload Resume<span style="color: red">*</span> :</label>
    <input type="file" name="resume" value="" required><br>
    </p>
    <input type="submit" name="submit" id="appsubmit" value="submit"> 
</form>
</section>
<?php include('templates\footer.php');?>
</html>