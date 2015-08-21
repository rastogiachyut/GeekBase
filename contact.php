<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Contact Us</title>
        <!--<link rel="stylesheet" type="text/css" href="Styles/Stylesheet.css" />-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link rel="icon" href="Images/yin-yang.png">
    </head>
    <style>
        .navbar-default {
    background-color: rgba(146, 236, 93, 0.91);
    border-color: #E7E7E7;
    
}
.navbar .nav > li > a{
    color: black;
    font-weight: bolder;
    font-size: larger;
}


    </style>
    <body>
        
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

        // define variables and set to empty values
        $flag=1;
        $nameErr = $emailErr="";
        $name = $email = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
           if (empty($_POST["name"])) {
                $nameErr = "Name is required";
                $flag=0;
            } 
            else {
                $name = test_input($_POST["name"]);
                 if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
                     $nameErr = "Only letters and white space allowed";
                     $flag=0;
                    }
            }
        
  
             if (empty($_POST["email"])) {
                $emailErr = "Email is required";
                $flag=0;
             }
             else {
                $email = test_input($_POST["email"]);
                 if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "Invalid email format"; 
                    $flag=0;
                }
        }
        }

        function test_input($data) {
           $data = trim($data);
           $data = stripslashes($data);
           $data = htmlspecialchars($data);
           return $data;
        }
        
        if($flag==1)
        {
          if(isset($_POST['name']) && isset($_POST['email'])) 
        {
              echo 'Hello';
            $sql = "INSERT INTO contact (Name, Email,Message )
 VALUES ('$_POST[name]','$_POST[email]','$_POST[message]')";
$result = $conn->query($sql);
        }
        }
        ?>
        
        
        
        <div class="container">
            <nav class="navbar navbar-default  navbar-fixed-top">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="index.php"><img src="Images/yin-yang.png" style="height:80px; width:80px;"></a>
                    </div>
                <div>
                <ul class="nav navbar-nav">
                    <li><a class="active" href="index.php"><img src="Images/dun.png" style="height:25px; width:100px;"></a></li>
                    <li><a href="ds.php">Data Structures</a></li>
                    <li><a href="algo.php">Algorithms</a></li>
                    <li><a href="OnlineContests.php">Online Contests</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="Login.php"><span class="glyphicon glyphicon-user"></span>
                            <?php session_start();
                            if(!isset($_SESSION['user']))
                                echo "Login</a></li>";
                             
                            else
                            {
                                echo $_SESSION['user']; 
                                echo "<li><a href='logout.php'>Logout</a></li>";
                            }
                                        
                                ?>
                </ul>
                  <div class="col-sm-3 col-md-3 pull-right">
   
                        <form name="form1" method="post" action="Search.php" class="navbar-form"  role="search" >
                             <div class="input-group">
                            <input name="search" type="text" class="form-control" placeholder="Search..." required/>
                                <div class="input-group-btn">
                                    <button class="btn btn-default" type="submit" name="submit"><i class="glyphicon glyphicon-search"></i></button>
                                </div>
                             </div>
                        </form>
                    
                  </div>
                    
                </div>
                </div>
            </nav>
            </div>
            
            <div class="container">
              
                <img src="Images/contactus.jpg" class="img-responsive center-block"/>
                
                   

                <div class="row">
                    <div class="col-lg-6">
                        <h1 style="font-weight: bolder">Get In Touch</h1>

                <p style="font-size: 20px; ">Enter your details and shoot us a quick note so we can best answer your potential needs.
                </p>
                <form role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <div class="form-group">
                        <label class="sr-only" for="name">Name:</label>
                        <input type="text" name="name" placeholder="Name" class="form-control" style="height:50px;font-size: 20px;" ><br>
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="email">E-Mail:</label>
                        <input type="email" name="email" placeholder="E-mail" class="form-control" style="height:50px;font-size: 20px;" ><br>
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="message">Message:</label>
                        <textarea class="form-control" name="message" placeholder="Message" style="height:100px;font-size: 20px;"></textarea>
                    </div>
                    <button type="submit" class="btn btn-default" name="submit">Submit</button>
                </form>
                <p style="color: red;font-size: 25px;">
                    <?php 
                    if($name!="" && $nameErr=="" && $emailErr=="")
                    {
                       echo "Your Query is recieved";
                    }
                    else
                    {
                        echo $nameErr;?><br><?php
                        echo $emailErr;
                    }?>
                </p>
                    </div>
                    <div class="col-lg-6">
                        <h1 style="font-weight: bolder">Name</h1><br></strong>
                        <p style="font-size: 20px">Jaypee University of Information Technology<br>
                            Waknaghat,P.O. Waknaghat<br>
                            Teh. Kandaghat,Distt. Solan<br>
                            PIN-173 234,Himachal Pradesh<br>
                            India <br>
                        </p><br>
                        <h1 style="font-weight: bolder">Contact Information</h1>
                        <p style="font-size: 20px">
                            You can mail us at <a href="mailto:rastogishubham20@gmail.com">contactus@geekBase.edu</a><br><br>

                            For web related queries you can push a mail at <a href="mailto:ashishb619@gmail.com"> webmaster@geekBase.edu</a><br><br>
                               
                            For design related queries you can push a mail at <a href="mailto:rastogiachyut@gmail.com"> designer@geekBase.edu</a><br><br>                                                  
                        </p>
                    </div>
                </div>
            </div>
        <br><br><br>
            <div class="navbar navbar-default navbar-bottom" style="margin: 0px; height: 100px;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3">
                        <a href="index.php"><img src="Images/yin-yang.png" style="height:100px; width:100px;"></a>
                    </div>
                    <div class="col-lg-6">
                        <h3 style="text-align:center;">The Ultimate DS ALGO Learning Resource</h3>
                        <p style="text-align:center;"> © 2014 GeekBase<br>
                        <a href="https://www.facebook.com/GeekBase">Facebook</a> -<a href="https://twitter.com/GeekBase"> Twitter</a>-
                        <a href="https://www.linkedin.com/company/435210?trk=prof-exp-company-name">LinkedIn</a></p>
                     </div>
                    <div class="col-lg-3">
                        <a class="active" href="index.php"><img src="Images/dun.png" style="height:80px; width:250px; float: right;"></a>
                    </div>
                </div>
            </div>
        </div>
         <!-- jQuery -->
         <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
    
    </body>
</html>

