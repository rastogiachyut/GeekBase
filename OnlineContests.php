<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Online Contests</title>
        <!--<link rel="stylesheet" type="text/css" href="Styles/Stylesheet.css" />-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link href="Styles//half-slider.css" rel="stylesheet">
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
        <br><br><br>
        <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <a href="https://campuscommune.tcs.com/intro/view_blog/codevita-2014-tcs-global-coding-contest">
                <div class="fill" style="background-image:url('Images/sl1.jpg');"></div>
                </a>
                <div class="carousel-caption">
                    <!--<a href="OnlineContests.php" class="btn btn-default">Coding Contests</a>

                    <h2>Caption 1</h2>-->
                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <a href="https://codeninja.interviewstreet.com/">
                <div class="fill" style="background-image:url('Images/sl2.jpg');"></div>
                </a>
                <div class="carousel-caption">
                    <!--<a href="algo.php" class="btn btn-default">Algorithms</a>
                    <h2>Caption 2</h2>-->
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <a href="https://www.imaginecup.com/">
                <div class="fill" style="background-image:url('Images/sl3.jpg');"></div>
                </a>
                <div class="carousel-caption">
                    <!--<a href="ds.php" class="btn btn-default">Data Structures</a>
                    <h2>Caption 3</h2>-->
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
        
        
        
        
        
        <div class="container"><br>
                <h2>Competitive programming </h2><br>
                <p style="font-size: 16px;">It is a mind sport usually held over the Internet or a local network, involving participants trying to 
                    program according to provided specifications. Competitive programming is recognized and supported by 
                    several multinational software and Internet companies, such as Google,Facebook and IBM.
                    As of January 2012 there are several organizations who host programming competitions on a regular basis.
                </p>    
                <p style="font-size: 16px;">A programming competition generally involves the host presenting a set of logical or mathematical 
                    problems to the contestants (who can vary in number from tens to several thousands), and contestants are
                    required to write computer programs capable of solving each problem. Judging is based mostly upon 
                    number of problems solved and time spent for writing successful solutions, but may also include other 
                    factors (quality of output produced, execution time, program size etc.)
                </p><br>
                <p style="font-size:25px;">Major coding contests in World:</p>
                <ul>
                    <a href="https://code.google.com/codejam"><li style="font-size: 20px;">Google Code Jam:</li></a>
                    <p style="font-size: 16px;">Google Code Jam is an international programming competition hosted and administered by Google. 
                        The competition began in 2003 as a means to identify top engineering talent for potential employment
                        at Google. The competition consists of a set of algorithmic problems which must be solved in a 
                        fixed amount of time. Competitors may use any programming language and development environment to 
                        obtain their solutions.</p>
                </ul>
                <ul>
                    <a href="https://campuscommune.tcs.com/intro/view_blog/codevita-2014-tcs-global-coding-contest"><li style="font-size: 20px;">TCS CodeVita</li></a>
                    <p style="font-size: 16px;">It is a contest for engineering and science students to  experience the joy
                        of coding and to sharpen their programming skills through real-life computing practices. The contest
                        also aims at identifying the talent, besides providing the student community, an opportunity to earn 
                        peer recognition. TCS is promoting learning though fun and contests like CodeVita as programming is 
                        becoming the skill for future and provide a fast gateway to a technology career.
                    </p>
                </ul>
                <ul>
                    <a href="https://codeninja.interviewstreet.com/"><li style="font-size: 20px;">CodeNinja Amazon India</li></a>

                    <p style="font-size: 16px;">CodeNinja Amazon India is a 4 hour coding contest where you can apply for Amazon. The contest is 
                        open to all but they prefer 2+ year experienced candidates for hiring. Of course, if you perform 
                        well, they'll definitely hire smart engineers! Employees of Amazon aren't allowed to participate.

                        Opting out of recruitment process: If you're just going to participate for fun (which a lot of 
                        programmers do), you can opt-out of the recruitment process and join in for fun. They don't spam 
                        anyone, don't worry :)
                    </p>

                </ul>
                <ul>
                     <a href="https://www.imaginecup.com/"><li style="font-size: 20px;">Imagine Cup</li></a>

                    <p style="font-size: 16px;">Imagine Cup is an annual competition sponsored and hosted by Microsoft Corp.
                        which brings together young technologists worldwide to help resolve some of the world's toughest 
                        challenges. The Imagine Cup comprises five major technology competitions, including Software Design,
                        and four challenges (although the challenge number is updated annually). All Imagine Cup competitors
                        create projects that address the Imagine Cup theme: "Imagine a world where technology helps solve the
                        toughest problems". Started in 2003, it has steadily grown in size, with more than 358,000 competitors
                        representing 183 countries and regions in 2011.
                    </p>
                </ul>
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
