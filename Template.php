<!DOCTYPE html>
<html>
    
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo $title; ?></title>
        <!--<link rel="stylesheet" type="text/css" href="Styles/Stylesheet.css" />-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        
        <link href="Styles//full-slider.css" rel="stylesheet">
        <link rel="icon" href="Images/yin-yang.png">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <style>
        .carousel-caption {
        top:40%;
/*        padding: 15px;
        background: rgba(0, 0, 0, 0.75);*/
}
div#load_screen{
    background: #151821;
    opacity:1;
    position:fixed;
    z-index: 100;
    top:0px;
    width: 100%;
    height: 30000px;
}
div#load_screen > div#loading{
    color:#FFF;
   
}
.navbar-default {
    background-color: rgba(218, 218, 218, 0.91);
    border-color: #E7E7E7;
    
}
.navbar .nav > li > a{
    color: black;
    font-weight: bolder;
    font-size: larger;
}
    </style>
    <script>
    window.addEventListener("load",function(){
        var load_screen=document.getElementById("load_screen");
        document.body.removeChild(load_screen);
    })    
    </script>
    </head>
    <body>
        <div id="load_screen"><div id="loading"><img src="Images/small-load.gif" style="display: block; margin-left: auto; margin-right: auto;"></div></div>
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
//                                echo "<ul class='dropdown-menu' role='menu' aria-labelledby=".$_SESSION['user'].">
//          <li role='presentation'><a role='menuitem' tabindex='-1' href='logout.php'>Logout</a></li></ul>";
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
            
        
        
        <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active" data-interval="1000">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url('Images/bgp.png');"></div>
               
                <div class="carousel-caption">
                    <br><br> <br><br> <br><br> <br><br>
                    <a href="OnlineContests.php" class="btn btn-info btn-lg">Coding Contests</a>

                   
                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('Images/bga.jpg');"></div>
                <div class="carousel-caption">
                    <h1 style="font-size:70px; ">LEARN ALGORITHMS</h1><br><br> <br> 
                    <a href="algo.php" class="btn btn-info btn-lg">Algorithms</a>
                    
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('Images/bgc.png');"></div>
                <div class="carousel-caption">
                    <h1 style="font-size:70px; ">LEARN DATA STRUCTURES</h1><br><br> <br> 
                    <a href="ds.php" class="btn btn-info btn-lg">Data Structures</a>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

    </header>
        
        <br><br><br><br><br><br>
        
        <div class="container">
            <!--<div class="row">
                <div class="col-lg-12">
                    <img src="Images/need.png" class="img-responsive center-block"/>
                </div>
            </div>-->
            <div class="row">
                <div class="col-lg-3">
                    <img src="Images/1111.png" class="img-responsive center-block"/>
        </div>
        <div class="col-lg-3"> 
            <img src="Images/2222.png" class="img-responsive center-block"/>
        </div>
        <div class="col-lg-3"> 
            <img src="Images/3333.png" class="img-responsive center-block"/>
        </div>
        <div class="col-md-3">
           <img src="Images/4444.png" class="img-responsive center-block"/>
        </div>
        <div class="clearfix visible-lg"></div>
            </div>
      
    </div>
        <br><br>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h1>How can coding help you?</h1>
                    <p>To get your answer watch this video --> and learn about a new "superpower" that isn't being taught in 90% of schools.
                        Starring Bill Gates, Mark Zuckerberg, will.i.am, Chris Bosh, Jack Dorsey, Tony Hsieh, Drew Houston, Gabe Newell,
                        Ruchi Sanghvi, Elena Silenok, Vanessa Hurst, and Hadi Partovi.</p>

                </div>
                <div class="col-lg-6">
                    <br><br>
            <iframe width="560" height="315" src="//www.youtube.com/embed/nKIu9yen5nc" frameborder="0" allowfullscreen>
                
            </iframe>
                </div>
        </div>
        </div>
        <br><br>
        
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
