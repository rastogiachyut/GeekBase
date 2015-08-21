<html>
<head>
<!--<link class="cssdeck" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.1/css/bootstrap-responsive.min.css" class="cssdeck">-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<style>
.modal-body
{
width:40%;
left:25%;
height:100%;
}
#tab
{
left:50%;
}
</style>
<title>Login</title>
</head>
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
    session_start();  
        // define variables and set to empty values
        $flag=1;
        $pwdErr = $emailErr="";
        $pwd = $email = "";
        $msg="";
        $flagr=1;
    $nameErrr = $pwdErrr = $emailErrr="";
    $namer = $pwdr = $emailr = "";
    if(isset($_POST['var']))
    {
    if($_POST['var']=="login")
    {  
        
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
           if (empty($_POST["email"])) {
                $emailErr = "Email is required";
                $flag=0;
            } 
            else {
                $email = test_input($_POST["email"]);
//                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//                    $emailErr = "Invalid email format"; 
//                    $flag=0;
                }
            
        
  
             if (empty($_POST["password"])) {
                $pwdErr = "Password is required";
                $flag=0;
             }
             else {
                $pwd = test_input($_POST["password"]);
//                if(strlen($pwd)<=6)
//                {
//                    $pwdErr="Password length should be greater than six characters";
//                    $flag=0;
//                }
        }
        }

        
       if($flag==1)
{
  if(isset($_POST['password']) && isset($_POST['email'])) 
{
        {
         //starting the session for user profile page
        if(!empty($_POST['email']))   //checking the 'user' name which is from Sign-In.html, is it empty or have some text
        {
                $query = "SELECT *  FROM login where Email = '$_POST[email]' AND Password = '$_POST[password]'";
               $result = $conn->query($query);
               //$row=  $result->fetch_assoc();
               // $row = $conn->query($query);
                if($row=  $result->fetch_assoc())
                {
                        $_SESSION['user'] = $row['Name'];
                        $msg= "SUCCESSFULLY LOGIN TO USER PROFILE PAGE...";
                        header("location: index.php");

                }
                else
                {
                        $msg= "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...";
                }
        }
        }
}


}
    }
    if($_POST['var']=="register")
    {
        

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErrr = "Name is required";
            $flagr=0;
        } 
        else {
            $namer = test_input($_POST["name"]);
            if (!preg_match("/^[a-zA-Z ]*$/",$namer)) {
                     $nameErrr = "Only letters and white space allowed";
                     $flagr=0;
                    }
        }
       if (empty($_POST["email"])) {
            $emailErrr = "Email is required";
            $flagr=0;
        } 
        else {
            $emailr = test_input($_POST["email"]);
            if (!filter_var($emailr, FILTER_VALIDATE_EMAIL)) {
                $emailErrr = "Invalid email format"; 
                $flagr=0;
            }
        }


         if (empty($_POST["password"])) {
            $pwdErrr = "Password is required";
            $flagr=0;
         }
         else {
            $pwdr = test_input($_POST["password"]);
            if(strlen($pwdr)<=6)
            {
                $pwdErrr="Password length should be greater than six characters";
                $flagr=0;
            }
    }
    }

    

    if($flagr==1)
    {
      if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])) 
    {
//              echo 'Hello';
        $sql = "INSERT INTO login (Name,Email,Password )
VALUES ('$_POST[name]','$_POST[email]','$_POST[password]')";
$result = $conn->query($sql);
    }
    }
    }
    }
    function test_input($data) {
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
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
                            Login</a></li>
                    
                </ul>
                  <div class="col-sm-3 col-md-3 pull-right">
   
                        <form name="form1" method="post" action="Search.php" class="navbar-form" role="search" >
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
    <br><br><br><br><br><br>
    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
    <div class="well">
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#signin">Login</a></li>
        <li><a data-toggle="tab" href="#signup">Create Account</a></li>
    </ul>
   
    
    <div class="tab-content">

    <div id="signin" class="tab-pane fade in active">

        <form role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="form-group">
                <br><br>
                <input type='hidden' name='var' value="login"/> 
                <label class="sr-only" for="email">E-Mail:</label>
                <input type="email" name="email" placeholder="E-Mail" class="form-control" style="height:50px;font-size: 20px;" ><br>
            </div>
            <div class="form-group">
                <label class="sr-only" for="password">Password:</label>
                <input type="password" name="password" placeholder="Password" class="form-control" style="height:50px;font-size: 20px;" ><br>
            </div>
            <button type="submit" class="btn btn-primary btn-lg" name="login" style="margin-left:40%; margin-right:50%;">Login</button>
        </form>
        <p style="color: red;font-size: 25px;">
            <?php 
            if($email!="" && $emailErr=="" && $pwdErr=="")
            {
               echo $msg;
            }
            else
            {
                echo $emailErr;?><br><?php
                echo $pwdErr;
            }?>
        </p>

    </div>

    <div id="signup" class="tab-pane fade">

        <form role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="form-group">
                <br><br>
                <input type='hidden' name='var' value="register"/> 
                <label class="sr-only" for="name">Name:</label>
                <input type="text" name="name"  placeholder="Name" class="form-control" style="height:50px;font-size: 20px;" ><br>
            </div>
              <div class="form-group">
                
                <label class="sr-only" for="email">E-Mail:</label>
                <input type="email" name="email" placeholder="E-Mail" class="form-control" style="height:50px;font-size: 20px;" ><br>
            </div>
            <div class="form-group">
                <label class="sr-only" for="password">Password:</label>
                <input type="password" name="password" placeholder="Password" class="form-control" style="height:50px;font-size: 20px;" ><br>
            </div>
             <button type="submit" class="btn btn-primary btn-lg" name="login" style="margin-left:40%; margin-right:50%;">Sign Up</button>
        </form>

        <p style="color: red;font-size: 25px;">
            <?php 
            if($emailr!="" && $emailErrr=="" && $pwdErrr=="" && $nameErrr=="")
            {
               echo "Thank You for Registration";
            }
            else
            {
                echo $nameErrr;?><br><?php
                echo $emailErrr;?><br><?php
                echo $pwdErrr;?><br><?php
//                echo "Redirecting........";
//                header( "refresh:2;url=Login.php" );
            }?>
        </p>
        
    </div>
    </div>
         </div>
        </div>
        <div class="col-lg-4"></div>
    </div>

<script class="cssdeck" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script class="cssdeck" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
<script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->

</body>
</html>