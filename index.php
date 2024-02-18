<?php
require_once('../util/security.php');
session_start();
Security::checkHTTPS();

$_SESSION['working_dir'] = getcwd();
Security::checkHTTPS();
?>

<html>
    <title>Paw-radise</title>

    <ul>
        <li><a href="about.php">About</li>
        <li><a href="contact.php">Contact</a>
    </ul>
    <p>
        Welcome to Paw-radise! Here we take your dog that may be struggling
        and help them learn new tricks; from sit to obedience training. With our
        main trainer <a href="about.php">Miles Parker</a>. 
    </p>

    <p>
        Amongst training we also offer boarding and grooming services. For more information please 
        contact us by filling out our form <a href="contact.php">here</a>.
    </p>
</html>