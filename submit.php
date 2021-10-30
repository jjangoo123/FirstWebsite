<!DOCTYPE HTML>
<html>
    <head>
        <title>My First PHP</title>
        <meta charset="utf-8">
        <link rel="stylesheet"href="css/common.css" type="text/css">
        <script src="script/myscript.js"></script></head>
<body onload="pload()">
        <img src="img/logo.png" alt="logo">
        <p id ="date1">Date</p>
        <p id ="time1">Time</p>
        <h3>Navigation</h3>
        <nav>
            <ul>
                <li><a href="home.html">Home</a></li>
                <li><a href="login.html">Login</a></li>
                <li><a href="addedit.html">New User</a></li>
                <li><a href="aboutus.html">About Us</a></li>
                <li><a href="contactus.html">Contact Us</a></li>
                
            </ul>    
        </nav>
         <h1><?php
             $name=$_POST["name"];
             $email=$_POST["email"];
        echo"<h2> Thank you for your feedback $name </h2>";
        echo"<h2> We will get back to you via $email</h2>";
        ?>
    </h1>
        <footer>
            <p>Copyright &copy; 2019 - All rights Reserved</p>
            <p>Keunyoung Kwak</p>
        </footer>
        </body>
</html>