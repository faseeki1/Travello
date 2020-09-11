<?php include "includes/login_check.php";?>
<?php
$upload_msg = "";
if(isset($_POST["addplace"])){
    $place_name = mysqli_real_escape_string($connect,$_POST["name"]);
    $place_locality = mysqli_real_escape_string($connect,$_POST["locality"]);
    $place_state = mysqli_real_escape_string($connect,$_POST["state"]);
    $place_price = mysqli_real_escape_string($connect,$_POST["price"]);
    $place_hotel = mysqli_real_escape_string($connect,$_POST["hotel"]);
    $place_flight = mysqli_real_escape_string($connect,$_POST["flight"]);
    $place_refreshment = mysqli_real_escape_string($connect,$_POST["refreshment"]);
    $place_movie = mysqli_real_escape_string($connect,$_POST["movie"]);
    $place_status = mysqli_real_escape_string($connect,$_POST["status"]);
    $place_main_img = $_FILES["main_image"]["name"];
    $place_alt_img = $_FILES["image_alt"]["name"];
    $place_main_image = "img/" .$_FILES["main_image"]["name"];
    $place_main_image_tmp = $_FILES["main_image"]["tmp_name"];
    $place_image_alt = "img/" .$_FILES["image_alt"]["name"];
    $place_image_alt_tmp = $_FILES["image_alt"]["tmp_name"];
    move_uploaded_file($place_main_image_tmp,$place_main_image);
    move_uploaded_file($place_image_alt_tmp,$place_image_alt);
    $insert_place = "INSERT INTO tour_places(name,locality,state,image_main,image_alt,price,include_hotel,include_flight,include_refreshment,include_movie,status) 
    VALUES('$place_name','$place_locality','$place_state','$place_main_img','$place_alt_img','$place_price','$place_hotel','$place_flight','$place_refreshment','$place_movie','$place_status')";
    $insert_place_query = mysqli_query($connect,$insert_place);
    if($insert_place_query){
        $upload_msg = "<div class='alert alert-success'>Place successfully added. Click <a href='places.php'>Here</a> to view</div>";
    }else{
        echo mysqli_error($connect);
        $upload_msg = "";
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
                        <h1 class="page-head-line">ADD A PLACE</h1>
                        <h1 class="page-subhead-line">Add a place to be visible on travello.com website. </h1>
                        <?php echo $upload_msg;?>
                    </div>
                    <div class="col-md-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                           ADD PLACE
                        </div>
                        <div class="panel-body">
                            <form role="form" action="" method="post" enctype="multipart/form-data">
                                <div class="form-group col-xs-6">
                                    <label>Name of place</label>
                                    <input class="form-control" name="name" required type="text">
                                </div>
                                <div class="form-group col-xs-6">
                                    <label>Locality</label>
                                    <input class="form-control" name="locality" required type="text">
                                </div>
                                <div class="form-group col-xs-6">
                                    <label>State</label>
                                    <input class="form-control" name="state" required type="text">
                                </div>
                                <div class="form-group col-xs-6">
                                    <label>Place price (in Naira)</label>
                                    <input class="form-control" name="price" required type="number">
                                </div>
                                <div class="form-group col-xs-6">
                                    <label>Place Main Image</label>
                                    <input class="form-control" name="main_image" required type="file">
                                </div>
                                <div class="form-group col-xs-6">
                                    <label>Place second Image</label>
                                    <input class="form-control" name="image_alt" type="file">
                                </div>
                                <div class="form-group col-xs-6">
                                    <label>Include hotel</label>
                                    <select required class="form-control" name="hotel" id="">
                                        <option value="Not included">Hotel not included</option>
                                        <option value="Included">Hotel included</option>
                                    </select>

                                </div>
                                <div class="form-group col-xs-6">
                                    <label>Include Flights</label>
                                    <select required class="form-control" name="flight" id="">
                                        <option value="Not included">Flights not included</option>
                                        <option value="Included">Flights included</option>
                                    </select>

                                </div>
                                <div class="form-group col-xs-6">
                                    <label>Include Refreshment</label>
                                    <select required class="form-control" name="refreshment" id="">
                                        <option value="Not included">Refreshment not included</option>
                                        <option value="Included">Refreshment included</option>
                                    </select>

                                </div>
                                <div class="form-group col-xs-6">
                                    <label>Include Movie</label>
                                    <select required class="form-control" name="movie" id="">
                                        <option value="Not included">Movie not included</option>
                                        <option value="Included">Movie included</option>
                                    </select>

                                </div>
                                <div class="form-group col-xs-12">
                                    <label>Upload status</label>
                                    <select required class="form-control" name="status" id="">
                                        <option value="upload">Upload</option>
                                        <option value="draft">Draft</option>
                                    </select>

                                </div>
                                <div class="form-group col-xs-12 text-center">
                                    <button type="submit" name="addplace" class="btn-lg btn btn-info">Add Place </button>
                                </div>
                                

                            </form>
                        </div>
                </div>
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
