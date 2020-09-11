<?php include "includes/login_check.php";?>
<?php
    if(isset($_GET["del"])){
        $del = $_GET["del"];
        $del_query = mysqli_query($connect,"DELETE FROM tour_places WHERE id=$del");
        if($del_query){
            header("Location: places.php");
        }
    }
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
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
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
                <a href="message-task.html" class="btn btn-info" title="New Message"><b><?php echo $count_unread_mssg_num;?>  </b><i class="fa fa-envelope-o fa-2x"></i></a>
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
                        <a  href="index.php"><i class="fa fa-dashboard "></i>Dashboard</a>
                    </li>
                     <li>
                        <a href="#" class="active-menu"><i class="fa fa-yelp "></i>Places <span class="fa arrow"></span></a>
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
                        <h1 class="page-head-line">Travello Tourism Places</h1>
                        <h1 class="page-subhead-line">Places you have uploaded to the travello.com website. </h1>
                    </div>
                    <div class="col-md-12">
                        <!--   Kitchen Sink -->
                          <div class="panel panel-default">
                              <div class="panel-heading">
                                  Places
                              </div>
                              <div class="panel-body">
                                  <div class="table-responsive">
                                      <table class="table table-striped table-bordered table-hover">
                                          <thead>
                                              <tr>
                                                  <th>Id</th>
                                                  <th>Edit</th>
                                                  <th>Delete</th>
                                                  <th>Place name</th>
                                                  <th>Place Locality</th>
                                                  <th>Place state</th>
                                                  <th>Place Main Image</th>
                                                  <th>Second image</th>
                                                  <th>Place Price(N)</th>
                                                  <th>Flight</th>
                                                  <th>Hotel</th>
                                                  <th>Refreshment</th>
                                                  <th>Movie</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              <?php
                                                $fetch_places = mysqli_query($connect,"SELECT * FROM tour_places");
                                                while($fetch_prow = mysqli_fetch_assoc($fetch_places)){
                                                    $place_id = $fetch_prow["id"];
                                                    $place_name = $fetch_prow["name"];
                                                    $place_price = $fetch_prow["price"];
                                                    $place_state = $fetch_prow["state"];
                                                    $place_locality = $fetch_prow["locality"];
                                                    $place_image_main = $fetch_prow["image_main"];
                                                    $place_image_alt = $fetch_prow["image_alt"];
                                                    $place_include_hotel = $fetch_prow["include_hotel"];
                                                    $place_include_flight = $fetch_prow["include_flight"];
                                                    $place_include_refreshment = $fetch_prow["include_refreshment"];
                                                    $place_include_movie = $fetch_prow["include_movie"];
                                                
                                              ?>
                                              <tr>
                                                  <td><?php echo $place_id;?></td>
                                                  <td><a href="editplace.php?edit=<?php echo $place_id;?>"><i class="fa fa-edit"></i></a></td>
                                                  <td><a onclick="javascript: return confirm('Are you sure you want to delete post?')" href="places.php?del=<?php echo $place_id;?>"> <i class="fa fa-trash text-primary"></i> </a></td>
                                                  <td><?php echo $place_name;?></td>
                                                  <td><?php echo $place_locality;?></td>
                                                  <td><?php echo $place_state;?></td>
                                                  <td><a target="_blank" href="../images/<?php echo $place_image_main;?>"><img src="../images/<?php echo $place_image_main;?>" class="img img-responsive" alt=""></a></td>
                                                  <td><a target="_blank" href="../images/<?php echo $place_image_alt;?>"><img src="../images/<?php echo $place_image_alt;?>" class="img img-responsive" alt="" ></a></td>
                                                  <td><?php echo $place_price;?></td>
                                                  <td><?php echo $place_include_flight;?></td>
                                                  <td><?php echo $place_include_hotel;?></td>
                                                  <td><?php echo $place_include_refreshment;?></td>
                                                  <td><?php echo $place_include_movie;?></td>
                                              </tr>
                                              <?php }?>
                                          </tbody>
                                      </table>
                                  </div>
                              </div>
                          </div>
                           <!-- End  Kitchen Sink -->
                    </div>
                </div>


                
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
