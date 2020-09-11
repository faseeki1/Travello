<?php include "includes/login_check.php";?>
<?php
    $count_users = mysqli_query($connect,"SELECT * FROM users");
    $count_users_num = mysqli_num_rows($count_users);

    $count_places = mysqli_query($connect,"SELECT * FROM tour_places");
    $count_places_num = mysqli_num_rows($count_places);

    $count_draft_places = mysqli_query($connect,"SELECT * FROM tour_places WHERE status='draft'");
    $count_places_draft_num = mysqli_num_rows($count_draft_places);

    $count_upload_places = mysqli_query($connect,"SELECT * FROM tour_places WHERE status='upload'");
    $count_places_upload_num = mysqli_num_rows($count_upload_places);

    $count_mssg = mysqli_query($connect,"SELECT * FROM messages");
    $count_mssg_num = mysqli_num_rows($count_mssg);

    $count_read_mssg = mysqli_query($connect,"SELECT * FROM messages WHERE status='read'");
    $count_read_mssg_num = mysqli_num_rows($count_read_mssg);

    $count_unread_mssg = mysqli_query($connect,"SELECT * FROM messages WHERE status='unread'");
    $count_unread_mssg_num = mysqli_num_rows($count_unread_mssg);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Bootstrap Advance Admin Template</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">TRAVELLO ADMIN DASHBOARD</a>
            </div>

             <div class="header-right">
                <a href="logout.php" class="btn btn-md btn-success" style="margin-right: 10%; margin-left:-30%;"> Logout</a>
                <a href="message-task.html" class="btn btn-info" title="New Message"><b><?php echo $count_unread_mssg_num;?> </b><i class="fa fa-envelope-o fa-2x"></i></a>
            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="assets/img/user.png" class="img-thumbnail" />

                            <div class="inner-text">
                                Faseeki swanky
                            <br />
                                <small>Last Login : 2 Weeks Ago </small>
                            </div>
                        </div>

                    </li>


                    <li>
                        <a class="active-menu" href="index.php"><i class="fa fa-dashboard "></i>Dashboard</a>
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-yelp "></i>Places <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="places.php"><i class="fa fa-coffee"></i>View places</a>
                            </li>
                            <li>
                                <a href="addplace.php"><i class="fa fa-flash "></i>Add Place</a>
                            </li>
                            
                           
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bicycle "></i>Users <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                           
                             <li>
                                <a href="users.php"><i class="fa fa-desktop "></i>View users </a>
                            </li>
                             <li>
                                <a href="adduser.php"><i class="fa fa-code "></i>Add user</a>
                            </li>
                             
                           
                        </ul>
                    </li> 
                    <li><a href="messages.php"><i class="fa fa-envelope "></i>Messages (<?php echo $count_unread_mssg_num;?> New)</a></li>
                    
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">DASHBOARD</h1>
                        <h1 class="page-subhead-line">Welcome, Admin Faseeki Swanky. </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-4">
                    <a href="places.php" style="color:white;">
                        <div class="main-box bg-primary">
                                <i class="fa fa-home fa-5x"></i>
                                <h5><?php echo $count_places_num;?> Places</h5>
                                <hr>
                                <div class="row text-center">
                                    <div class="col-xs-6" style="border-right:2px solid white;">Uploaded: <?php echo $count_places_upload_num;?></div>
                                    <div class="col-xs-6 " >Draft: <?php echo $count_places_draft_num;?></div>                                    
                                </div>
                        </div>
                    </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#" style="color:white;">
                        <div class="main-box mb-dull" style="background: green;">
                                <i class="fa fa-envelope fa-5x"></i>
                                <h5> <?php echo $count_mssg_num;?> Messages</h5>
                                <hr>
                                <div class="row text-center">
                                    <div class="col-xs-6 " style="border-right:2px solid white;">Read: <?php echo $count_read_mssg_num;?></div>
                                    <div class="col-xs-6">Unread: <?php echo $count_unread_mssg_num;?></div>
                                </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                    <a href="users.php" style="color:white;">
                        <div class="main-box mb-pink">
                                <i class="fa fa-user fa-5x"></i>
                                <h5><?php echo $count_users_num;?> users</h5>
                                <hr>
                                <div class="row text-center">
                                    <div class="col-xs-6" style="border-right:2px solid white;">Online: 1</div>
                                    <div class="col-xs-6 " >Offline: <?php echo $count_users_num -1 ;?></div>                                    
                                </div>
                        </div>
                    </a>
                    </div>

                </div>
                <!-- /. ROW  -->

                
                        <div class="panel panel-default">

                            <div id="carousel-example" class="carousel slide" data-ride="carousel" style="border: 5px solid #000;">

                                <div class="carousel-inner">
                                    <div class="item active">

                                        <img src="assets/img/slideshow/1.jpg" alt="" />

                                    </div>
                                    <div class="item">
                                        <img src="assets/img/slideshow/2.jpg" alt="" />

                                    </div>
                                    <div class="item">
                                        <img src="assets/img/slideshow/3.jpg" alt="" />

                                    </div>
                                </div>
                                <!--INDICATORS-->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example" data-slide-to="1"></li>
                                    <li data-target="#carousel-example" data-slide-to="2"></li>
                                </ol>
                                <!--PREVIUS-NEXT BUTTONS-->
                                <a class="left carousel-control" href="#carousel-example" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /.REVIEWS &  SLIDESHOW  -->


                
                <!--/.ROW-->

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

    <div id="footer-sec">
        &copy; 2014 YourCompany | Design By : <a href="http://www.binarytheme.com/" target="_blank">BinaryTheme.com</a>
    </div>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
       <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    


</body>
</html>
