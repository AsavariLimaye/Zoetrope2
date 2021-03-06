<!DOCTYPE html>
<html lang="en">
<script src="http://www.w3schools.com/lib/w3data.js"></script>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Zoetrope</title>
   
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<style>
.row{
  margin-top: 10px;
  margin-bottom: 20px;
}
</style>
</head>

<body>

    <!-- Navigation -->
    
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="./index.php">Zoetrope</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <a href="./movies.php">Movies</a>
                    </li>
                    <li>
                        <a href="./tvshows.php">TV Shows</a>
                    </li>
                    <li>
                        <a href="./lists.php">Lists</a>  
                    </li>
                </ul>
                
                <?php
                session_start();
                
                
                if (isset($_SESSION['username'])){
                echo "<ul class=\"nav navbar-nav navbar-right\">
                     <li>
                        <a href=\"./logout.php\">Logout</a>
                    </li>
                 </ul>" ;
                }
                else {
                    echo "<ul class=\"nav navbar-nav navbar-right\">
                     <li>
                        <a href=\"./signin.php\">Sign In</a>
                    </li>
                    <li>
                        <a href=\"./signup.php\">Sign Up</a>
                    </li>
                 </ul>" ;
                }
                $type = $_GET['type'];
                ?>
                 
                
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>

    <div class="container">
    <div class="row">    
            <div class="col-md-8 col-xs-offset-3">
            
                <div  class="input-group-btn input-group-lg search-panel">
                     <?php echo "<form class=\"form-inline\" method=\"POST\" action=\"search.php?type=$type\">"; ?>
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <?php 
                        
                        echo "<span id=\"search_concept\">$type</span> <span class=\"caret\"></span>";
                        ?>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="./index.php?type=all">All</a></li>
                      <li><a href="./index.php?type=movies">Movies</a></li>
                      <li><a href="./index.php?type=tvshows">TV Shows</a></li>
                    </ul>
                
                    
                    <input type="hidden" name="search_param" value="all" id="search_param">         
                    <input type="text" class="form-control" name="x" placeholder="Find Movies,Shows & More ...">
                    <input name="searchbtn" class="btn btn-default" type="submit"/>
                     
                </form>
                   </div>
           
        </div>
    </div>
</div>
  
  </div class="container">
  <div class="row">
  </div>
</div>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <p class="lead">Something new to watch </p>
                <div class="list-group">
                    <a href="./opening.php" class="list-group-item">Opening This Week</a>
                    <a href="./now_playing.php" class="list-group-item">Now Playing</a>
                    <a href="./coming_soon.php" class="list-group-item">Coming Soon</a>
                </div>
            </div>

            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="3000">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active" >
                                    <img class="slide-image" style="max-height:300px;max-width:900px;" src="./home_1.jpg" alt=>
                                </div>
                                <div class="item" >
                                    <img class="slide-image" style="max-height:300px;max-width:900px;" src="./home_2.jpg" alt=>
                                </div>
                                <div class="item">
                                    <img class="slide-image" style="max-height:300px;max-width:900px;" src="./tv9.jpg" alt=>
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
                
                <div class="col-md-9 col-md-offset-3">
                <div class="row">
                <h2> Latest Movies </h2>
                    <?php
                    error_reporting(0);
                    $link = mysqli_connect("localhost","root","password");
                    if (!$link)
                        {
                            $output = 'Unable to connect to the data base server.';
                            echo $output;
                            exit();
                        }
                    if (!mysqli_select_db($link, 'zoetrope')) 
                        {
                            $output = 'Unable to locate the zoetrope database.'; 
                            echo $output; 
                            exit();
                        }
                    $result = mysqli_query($link,'select * from movies order by rdate desc limit 3;');
                    $result2 = mysqli_query($link,'select * from movies order by rating desc limit 3');
                    if (!$result)
                        {
                            echo "Could not connect to movies";
                            exit();
                        }
                    if (!$result2)
                        {
                            echo "Could not connect to movies";
                            exit();
                        }    
                        
                        
                    
                    while ($row = mysqli_fetch_array($result))
                    {
                    $title = $row['name'];  
                    $description = $row['summary'];
                    $image = $row['posterlink'];
                    $rating = $row['rating'];
                    echo "<div class=\"col-sm-4 col-lg-4 col-md-4 \">";
                        echo "<div class=\"thumbnail\">
                            <img style=\"max-height:300px;max-width:250px;min-height:300px;min-width:250px\" src=\"$image\" alt=\"\">
                            <div class=\"caption\">
                                <h4><a href=\"./movie.php?title=$title \">$title</a>
                                </h4>
                                <div class=\"ratings\">
                                <p class=\"pull-left\">Rating : $rating/10.0</p>
                                </br>
                                </div> 
                                <p class=\"pull-left\">$description</p>
                                
                            </div>
                            
                            
                        </div>
                    </div>";
                    }
                    echo "</div>  
                            <div> 
                            <h2> Highest Rated Movies </h2>";
                     while ($row = mysqli_fetch_array($result2))
                    {
                    $title = $row['name'];  
                    $description = $row['summary'];
                    $image = $row['posterlink'];
                    $rating = $row['rating'];
                    echo "<div class=\"col-sm-4 col-lg-4 col-md-4 \">";
                        echo "<div class=\"thumbnail\">
                            <img style=\"max-height:300px;max-width:250px;min-height:300px;min-width:250px\" src=\"$image\" alt=\"\">
                            <div class=\"caption\">
                                <h4><a href=\"./movie.php?title=$title \">$title</a>
                                </h4>
                                <div class=\"ratings\">
                                <p class=\"pull-left\">Rating : $rating/10.0</p>
                                </br>
                                </div> 
                                <p class=\"pull-left\">$description</p>
                                
                            </div>
                            
                            
                        </div>
                    </div>";
                    }
                    
                    ?>
                
                

        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Asavari Chandana 2016</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

   

</body>

</html>
