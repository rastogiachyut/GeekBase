
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dsalgo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO contact (Name, Email,Message )
VALUES 
('$_POST[name]','$_POST[email]','$_POST[message]')";
$result = $conn->query($sql);
$conn->close();
?>




<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Contact Us</title>
        <link rel="stylesheet" type="text/css" href="Styles/Stylesheet.css" />
        
        <link rel="stylesheet" type="text/css" href="Styles/StyleForm.css" />
    </head>
    <body>
        <div id="wrapper">
            
            <nav id="navigation">
                <ul id="nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="ds.php">Data Structures</a></li>
                    <li><a href="algo.php">Algorithms</a></li>
                    <li><a href="OnlineContests.php">Online Contests</a></li>
                    <li><a href="contact.php">About Us</a></li>
                    <li style=" padding: 0px 0px 0px 25px; float: right;"><form name="form1" method="post" action="Search.php"  >
                    
                    <input class="search" name="search" type="text" size="25" maxlength="50" placeholder="Search..." required/>
                    <span class="arrow">
                    <input type="submit" name="Submit" value="Search" class="button"/> 
                    </span>
                    
                    
                        </form></li>
                </ul>
                
            </nav>
            
            <div id="content_area"><br><br><br>
              
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                

                <p style="font-size:25px "  >Message
                </p>
             
            </div>
            
            <div id="sidebar">
                
            </div>
            
            <footer>
                <p>All rights reserved</p>
            </footer>
        </div>
    </body>
</html>