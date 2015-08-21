<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Data Structures</title>
        <!--<link rel="stylesheet" type="text/css" href="Styles/Stylesheet.css" />-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link rel="icon" href="Images/yin-yang.png">
<!--        <style>
        .navbar-default {
            background-color:#003C00;
    border-color: #E7E7E7;
}
    </style>-->
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
            
            <div class="container">
                <br><br><br><br>
                
                <h3> LinkedList</h3><br>
                
                <img src="Images/linked_list.png"><br><br>
                
                <p> A linked list is a data structure consisting of a group of nodes which together represent a sequence.
                    Under the simplest form, each node is composed of a data and a reference (in other words, a link) to 
                    the next node in the sequence
                </p>
                <a href="DisplayDS.php?ID=1">[..Read More..]</a>
               
                
                
                <hr>
                <h3> Doubly LinkedList</h3><br>
                <img src="Images/doubly_linked_list.jpg"><br><br>
                <p> A doubly-linked list is a linked data structure that consists of a set of sequentially linked records 
                    called nodes. Each node contains two fields, called links, that are references to the previous and 
                    to the next node in the sequence of nodes.
                </p>
                
                <a href="DisplayDS.php?ID=2">[..Read More..]</a>
                <hr>
                <h3> Binary Search Tree</h3><br>
                <img src="Images/binary_search_tree.png" width="200" height="200"><br><br>
                <p> A binary search tree (BST), sometimes also called an ordered or sorted binary tree, is a node-based 
                    binary tree data structure where each node has a comparable key (and an associated value) and 
                    satisfies the restriction that the key in any node is larger than the keys in all nodes in 
                    that node's left sub-tree and smaller than the keys in all nodes in that node's right sub-tree.
                </p>
                
                <a href="DisplayDS.php?ID=3">[..Read More..]</a>
                <hr>
                <h3> AVL Tree</h3><br>
                <img src="Images/avl_tree.png" ><br><br>
                <p> An AVL tree (Georgy Adelson-Velsky and Landis' tree, named after the inventors) is a self-balancing 
                    binary search tree.
                </p>
                <a href="DisplayDS.php?ID=4">[..Read More..]</a>
                <hr>
                <h3> Red Black Tree</h3><br>
                <img src="Images/red_black_tree.png" ><br><br>
                <p> A red–black tree is a data structure which is a type of self-balancing binary search tree.

                    Balance is preserved by painting each node of the tree with one of two colors 
                    (typically called 'red' and 'black') in way that satisfies certain properties
                </p>
                 <a href="DisplayDS.php?ID=5">[..Read More..]</a>
                
                <hr>
                
                <h3> B Tree</h3><br>
                <img src="Images/b_tree.png" ><br><br>
                <p> In B-trees, internal (non-leaf) nodes can have a variable number of child nodes within some 
                    pre-defined range. 
                </p>
                 <a href="DisplayDS.php?ID=6">[..Read More..]</a>
                <hr>
                
                
                <h3> Graph Structure </h3><br>
                <img src="Images/graph.gif" ><br><br>
                <p> A graph data structure consists of a finite (and possibly mutable) set of nodes or vertices,
                    together with a set of ordered pairs of these nodes (or, in some cases, a set of unordered pairs). 
                    These pairs are known as edges or arcs.
                </p>
                 <a href="DisplayDS.php?ID=8">[..Read More..]</a>
                <hr>
                
                <h3> Binary Heap</h3><br>
                <img src="Images/binary_heap.gif" width="400" height="240" ><br><br>
                <p>A binary heap is a heap data structure created using a binary tree. 
                    It can be seen as a binary tree with two additional constraints
                </p>
                 <a href="DisplayDS.php?ID=9">[..Read More..]</a>
                <hr>
                
               
                
                
                
                <h3> Hashing</h3><br>
                <img src="Images/hashing.gif" width="400" height="240"><br><br>
                <p>Hash table (hash map) is a data structure used to implement an associative array, a structure 
                    that can map keys to values
                </p>
                 <a href="DisplayDS.php?ID=12">[..Read More..]</a>
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
