<!DOCTYPE html>
<html lang="en">
    <head>
        <title>RYAN Park NEW User</title>
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
        <h2>Please log in to check your details</h2>
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
        //read login form values
        $NAME=$_POST['name'];
        $DOB=date('Y-m-d',strtotime($_POST['dob']));
        $CITY=$_POST['city'];
        $PHONE=$_POST['phone'];
        $password=$_POST['password1'];
        //create sql statement
        $sql="INSERT INTO CUSTOMER(NAME,DOB,CITY,PHONE,PASSWORD) VALUES('$NAME','$DOB','$CITY','$PHONE','$password')";
        //execte sql and assign  to result
        $result = $conn->query($sql);
        if($result==true){
            echo "<h1 id='welcome'>welcome $NAME your record has been created.</h1>";
            
        }else{
            echo "<h1 class='fail'>Sorry, We cannot create the record. $conn->error</h1>";
        }
        
        
        
    ?>
    
    <footer>
            <p>Copyright &copy; 2019 - All rights Reserved</p>
            <p>Keunyoung Kwak</p>
        </footer>
        </body>
</html>