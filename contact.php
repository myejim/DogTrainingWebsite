<?php
require_once('../Website/util/database.php');
require_once('../Website/util/newcustomer.php');
require_once('../Website/util/new_user.php');
?>
<html>
<ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
</ul>
<head>
    <link href="style.css" rel="stylesheet">
</head>
    <title>Paw-radise</title>
    <body>
        <img src="dogs.png" alt="pic of dogs" style="float: left; 
        margin: 5px" height="340px" width = "350px">
    <h1>Contact</h1>
    <form method='POST'>
        <h3>Name: <input type="text" name="cName"></h3>
        <h3>Email: <input type="email" name="cEmail"></h3>
        <h3>Phone Number: <input type="text" name="cNumber"></h3>
        <h3>Message: <input type="text" name="cMessage"></h3>
        <input type="submit" value="Save" name="save">
        <input type="reset" value="Reset" name="reset">
        <h4><b>Or</b></h4>
        <p><b>Contact us via phone: (123)456-7890
            or email pawradise@gmail.com</b></p>
    </form>
    <div id="banner" style="overflow: hidden;" >
        <div class="image-div">
            <img src="aggressioncert.jpeg" alt="aggression certificate" width = "150px" height = "150px">
        </div>
        <div class="image-div">
            <img src="familypawscert.jpeg" alt="family paws certificate" width = "150px" height = "150px">
        </div>
        <div class="image-div">
            <img src="gccert.png" alt="canine good citizen certificate" width = "150px" height = "150px">
        </div>
    <div style="clear:left;"></div>
    </body>
</html>