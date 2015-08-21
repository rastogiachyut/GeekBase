<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Algorithms</title>
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
             <br><br><br><br>
            <div class="container">
                <h3>Breadth First Search</h3><br>
                <img src="Images/BFS.gif"><br><br>
                <p> Breadth-first search (BFS) is a strategy for searching in a graph when search is limited to
                    essentially two operations: (a) visit and inspect a node of a graph; (b) gain access to
                    visit the nodes that neighbor the currently visited node.
                </p>
                <a href="DisplayAlgo.php?ID=1">[..Read More..]</a>
                
                
                <hr>
                <h3> Depth First Search</h3><br>
                <img src="Images/DFS.gif"><br><br>
                <p> Depth-first search (DFS) is an algorithm for traversing or searching tree or graph data structures.
                    One starts at the root (selecting some arbitrary node as the root in the case of a graph) and
                    explores as far as possible along each branch before backtracking.
                </p>
                
                <a href="DisplayAlgo.php?ID=2">[..Read More..]</a>
                <hr>
                <h3> Dijkstra's Shortest Path</h3><br>
                <img src="Images/Dijkstra.gif"><br><br>
                <p> A graph search algorithm that solves the single-source shortest path problem for a graph with 
                    non-negative edge path costs, producing a shortest path tree
                </p>
                
                <a href="DisplayAlgo.php?ID=3">[..Read More..]</a>
                <hr>
                <h3> Prim's Minimum Cost Spanning Tree</h3><br>
                <img src="Images/Prim.png" width="400" height="300" ><br><br>
                <p> Prim's algorithm is a greedy algorithm that finds a minimum spanning tree 
                    for a connected weighted undirected graph. 
                </p>
                <a href="DisplayAlgo.php?ID=4">[..Read More..]</a>
                <hr>
                <h3> Kruskal Minimum Cost Spanning Tree Algorithm</h3><br>
                <img src="Images/Kruskal.png" ><br><br>
                <p> Kruskal's algorithm is a greedy algorithm in graph theory that finds a minimum spanning tree
                    for a connected weighted graph. This means it finds a subset of the edges that forms a tree 
                    that includes every vertex, where the total weight of all the edges in the tree is minimized.
                </p>
                <a href="DisplayAlgo.php?ID=5">[..Read More..]</a>
                <hr>
                
                <h3>  Topological Sort (Using DFS) </h3><br>
                <img src="Images/Topological.png" width="400" height="300"><br><br>
                <p> A topological sort (sometimes abbreviated topsort or toposort) or topological ordering of a
                    directed graph is a linear ordering of its vertices such that for every directed edge uv 
                    from vertex u to vertex v, u comes before v in the ordering. 
                </p>
                <a href="DisplayAlgo.php?ID=6">[..Read More..]</a>
                <hr>
                <h3> Floyd-Warshall (all pairs shortest paths)</h3><br>
                <img src="Images/Floyd.png" ><br><br>
                <p> A graph analysis algorithm for finding shortest paths in a weighted graph with positive or 
                    negative edge weights (but with no negative cycles, see below) and also for finding transitive 
                    closure of a relation R.
                </p>
                 <a href="DisplayAlgo.php?ID=7">[..Read More..]</a>
                <hr>
                
              
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
