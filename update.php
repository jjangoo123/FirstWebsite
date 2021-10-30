<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ECA Consultant Log In</title>
        <meta charset="utf-8">
        <link rel="stylesheet"href="css/common.css" type="text/css">
        <script src="script/myscript.js"></script>
    </head>
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
        <h1>Welcome to the RYAN park!</h1>
        <h2>RYAN is the best lion!:)</h2>
        <?php 
        //declare all variables for db connection
        $dbserver="localhost:3307";
        $dbuser="root";
        $dbpassword="";
        $dbname="kydb2019";
        //create connection
        $conn= new mysqli($dbserver,$dbuser,$dbpassword,$dbname);
        //check connect error
        if($conn->connect_error==true){
            die("connection failed error description: $conn->Connection_error");
        }else{
            echo "<p class=dbs>Connection Success</p>";
        }
        //read update form values
        $id=$_POST['id'];
        $name=$_POST['name'];
        $city=$_POST['city'];
        $dob=$_POST['dob'];
        $phone=$_POST['phone'];
        $password=$_POST['password'];
        //create sql to update
        $sql="UPDATE CUSTOMER SET ".
            "NAME='".$name."',".
            "CITY='".$city."',".
            "DOB='".$dob."',".
            "PHONE='".$phone."',".
            "PASSWORD='".$password."' ".
            "WHERE ID=".$id;
        //execute query
        $result=$conn->query($sql);
        if($result==true){
        echo "<h1 id='welcome'>Hello $name your details have been updated.</h1>";
        echo "<h2 id='welcome'>Please log in again to confirm your changes</h2>";
        }else{
            echo "<h1 class='fail'>Please contact admin your details have not been changed</h1>";
        }
        //close db connection
            $conn->close();
      
        ?>
    
    <footer>
            <p>Copyright &copy; 2019 - All rights Reserved</p>
            <p>Keunyoung Kwak</p>
        </footer>
        </body>
</html>