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

$ID=$_GET['ID'];
$sql = "SELECT * FROM algodata WHERE ID=$ID ";
$_SESSION['ID'] = $ID;
$result = $conn->query($sql);
//$query=  mysql_query($sql) or die(mysql_error());
$rs=  $result->fetch_assoc();

/*if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["ID"];
		echo "<br>";
		echo "<br>";
		echo "<br>";
		echo '<img src="data:image/jpeg;base64,'.base64_encode( $row["Image"] ).'"/>';
		
		//echo $row["Image"];
		
    }
} else {
    echo "0 results";
}
 */

?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Algorithm</title>
        <!--<link rel="stylesheet" type="text/css" href="Styles/Stylesheet.css" />-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link rel="icon" href="Images/yin-yang.png">
        script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
       <script src="jquery-1.5.1.min.js"></script>
        
        <style>
		div#page {
			max-width: 900px;
			margin-left: auto;
			margin-right: auto;
			padding: 20px;
		}
		
		.back-to-top {
			position: fixed;
			bottom: 8em;
			right: 0px;
			text-decoration: none;
			color: #000000;
			background-color: transparent;
			font-size: 12px;
			padding: 1em;
			display: none;
		}

		.back-to-top:hover {	
			background-color: transparent;
		}	
        .navbar-default {
    background-color: rgba(146, 236, 93, 0.91);
    border-color: #E7E7E7;
    
}
.navbar .nav > li > a{
    color: black;
    font-weight: bolder;
    font-size: larger;
}
#dummy {
    font-size: 2.3em;
}

	</style>
        
    </head>
    <body>
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
                    <?php 
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
            <br><br><br><br>
            <div class="container">
                <a href='<?php echo $rs['Visual'];?>' style="text-decoration: none;">
                    <img src="Images/clipart1.png" style="width:100px; height: 100px; right: 0px; position: fixed;">
                       </a>
               <h1><?php echo $rs['Title'];?> </h1>  
               <?php //echo '<img src="data:image/jpeg;base64,'.base64_encode( $rs['Image'] ).'"/>';?>
               
               <p ><?php echo nl2br($rs['Data']);?> </p>
               <p><?php //echo $rs['SourceCode'];?> </p>
               <p><?php //echo $rs['Algo'];?> </p>
               <br>
               
               <br>
               <h2>Comments</h2>
               <!--Comment Section-->
               <span class="glyphicon glyphicon-user" id="dummy"></span>
               <?php
                            if(!isset($_SESSION['user']))
                                echo "";
                             
                            else
                            {
                                echo "<h3>".$_SESSION['user']."</h3>"; 
                            }
                                        
                                ?>
               <form role="form" method="post" action="acomments.php">
                <div class="form-group">
                    <label class="sr-only" for="comment">Message:</label>
                    <textarea class="form-control" name="comment" placeholder="Join the discussion..." style="height:100px;font-size: 20px;"></textarea>
                </div>
               <?php 
                            if(!isset($_SESSION['user']))
                                echo "You must be logged in to comment";
                             
                            else
                            {
//                                echo $_SESSION['user']; 
                                echo '<button type="submit" class="btn btn-default" name="submit">Comment</button>';
                            }
                                        
                                ?>
               </form>
               
               <?php 
               $sql = "SELECT * FROM acomment where ID = $ID";
               $result = $conn->query($sql);
               while($rs=  $result->fetch_assoc())
                {
                   echo "<hr>";
                    echo '<span class="glyphicon glyphicon-user" id="dummy"></span>';
                    echo '<h3>'.$rs['Name'].'</h3>'.'<h4>'.$rs['Comment'].'</h4>'.$rs['Time'].'</p>' ;
//                  $c=$c+1;
                    
                }
               ?>
            </div>
            
            <a href="#" class="back-to-top" style="display: inline"><img src="Images/arr1.png" style="width:50px; height: 50px;"></a>
           
             <script>            
			jQuery(document).ready(function() {
				var offset = 220;
				var duration = 500;
				jQuery(window).scroll(function() {
					if (jQuery(this).scrollTop() > offset) {
						jQuery('.back-to-top').fadeIn(duration);
					} else {
						jQuery('.back-to-top').fadeOut(duration);
					}
				});
				
				jQuery('.back-to-top').click(function(event) {
					event.preventDefault();
					jQuery('html, body').animate({scrollTop: 0}, duration);
					return false;
				});
			});
		</script>
               
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
    });
    </script>
        
        
        
        
        
        
    </body>
</html>


<?php
$conn->close();
?> 