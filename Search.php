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

if(!isset($_POST['search']))
{
    header("Location:index.php");
}



$sql = "SELECT * FROM search WHERE Name LIKE '%".$_POST['search']."%'  ";
$result = $conn->query($sql);
//$query=  mysql_query($sql) or die(mysql_error());


//if(mysql_num_rows($result)!=0)
 ////$rs=  $result->fetch_assoc();

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
        <title>Search Results</title>
        <!--<link rel="stylesheet" type="text/css" href="Styles/Stylesheet.css" />-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link rel="icon" href="Images/yin-yang.png">
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
            
            <div class="container">
                <h3>Search Results</h3> 
                <?php //if(mysql_num_rows($result)!=0)
                //{
                $c=0;
                if($_POST['search']!="")
                {
                    echo '<ul>';
                   while($rs=  $result->fetch_assoc())
                    {
                        echo '<p style="color:white"><li><a href="'.$rs['URL'].'">'.$rs['Name'].'</a></p></li>' ;
                     $c=$c+1;   
                    }
                    echo '</ul>';
                }   
                 
                if($c==0)
                     echo 'No Results Found';
                else if($_POST['search']=="")   
                    
                   
                        echo 'No Results Found';
                
                
                
                    
                    
                    
               
                echo '<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>';
               
           ?>
               
               
             </div>
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


<?php
$conn->close();
?> 