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
                <li><a href="addedit.php">New User</a></li>
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
        //read login form values
        $id=$_POST['id'];
        $password=$_POST['password'];
        //create sql statement
        $sql="SELECT * FROM CUSTOMER WHERE ID=".$id." and PASSWORD='".$password."'";
        //execte sql and assign  to result
        $result = $conn->query($sql);
        if($result->num_rows>0){
            //display welcome 
            echo "<h1 id='welcome'>welcome $id your details are below </h1>";
            echo "<h2 id='welcome'>Please enter new details except id if you need changes</h2>";
            echo "<form method='post' action='update.php'>";
            echo "<table>";
            while($row=$result->fetch_assoc()){
                echo "<tr><td>ID:</td><td><input type='number' name='id' readonly value=".$row['ID']."></td></tr>";
                echo "<tr><td>Name:</td><td><input type='text' name='name'  value=".$row['NAME']."></td></tr>";
                echo "<tr><td>City:</td><td><input type='text' name='city'  value=".$row['CITY']."></td></tr>";
                echo "<tr><td>Date of Birth:</td><td><input type='date' name='dob'  value=".$row['DOB']."></td></tr>";
                echo "<tr><td>Phone:</td><td><input type='number' name='phone'  value=".$row['PHONE']."></td></tr>";
                echo "<tr><td>Password:</td><td><input type='text' name='password'  value=".$row['PASSWORD']."></td></tr>";
                echo "<tr><td colspan='2'><input type=submit value=UPDATE class=btn></td></tr>";
                
            }
            echo"</table></form>";
            //close db connection
            $conn->close();
        }else{
            echo "<p class='fail'> Yor are not authorised to access this information</p>";
        }
        
        ?>
    
    <footer>
            <p>Copyright &copy; 2019 - All rights Reserved</p>
            <p>Keunyoung Kwak</p>
        </footer>
        </body>
</html>