<?php include "includes/login_check.php";?>



<!-- script to display the value in input fields -->
<?php 
            if(isset($_GET["edit"])){
                $edit_id = $_GET["edit"];
                $get_edit = mysqli_query($connect,"SELECT * FROM tour_places WHERE id = $edit_id");
                while($editrow = mysqli_fetch_assoc($get_edit)){
                    $edit_name = $editrow["name"];
                    $edit_locality = $editrow["locality"];
                    $edit_state = $editrow["state"];
                    $edit_price = $editrow["price"];
                    $edit_main_image = $editrow["image_main"];
                    $edit_image_alt = $editrow["image_alt"];
                    $edit_include_hotel = $editrow["include_hotel"];
                    $edit_include_flight = $editrow["include_flight"];
                    $edit_include_refreshment = $editrow["include_refreshment"];
                    $edit_include_movie = $editrow["include_movie"];
                    $edit_status = $editrow["status"];
                }
            }else{
                header("Location: places.php");
            }
        ?>


<!-- Script to update database -->
<?php
$upload_msg = "";
if(isset($_POST["editplace"])){
    $ed_id = $_GET["edit"];
    $place_name = mysqli_real_escape_string($connect,$_POST["name"]);
    $place_locality = mysqli_real_escape_string($connect,$_POST["locality"]);
    $place_state = mysqli_real_escape_string($connect,$_POST["state"]);
    $place_price = mysqli_real_escape_string($connect,$_POST["price"]);
    $place_hotel = mysqli_real_escape_string($connect,$_POST["hotel"]);
    $place_flight = mysqli_real_escape_string($connect,$_POST["flight"]);
    $place_refreshment = mysqli_real_escape_string($connect,$_POST["refreshment"]);
    $place_movie = mysqli_real_escape_string($connect,$_POST["movie"]);
    $place_status = mysqli_real_escape_string($connect,$_POST["status"]);
    /*if(!isset($_POST["main_image"])){
        $place_main_img = $edit_main_image;
    }else{
        $place_main_img = $_FILES["main_image"]["name"];
    }
    if(!isset($_POST["image_alt"])){
        $place_alt_img = $edit_image_alt;
    }else{
        $place_alt_img = $_FILES["image_alt"]["name"];
    }*/
    $place_alt_img = $_FILES["image_alt"]["name"];
    $place_main_img = $_FILES["main_image"]["name"];
    $place_main_image = "img/" .$_FILES["main_image"]["name"];
    $place_main_image_tmp = $_FILES["main_image"]["tmp_name"];
    $place_image_alt = "img/" .$_FILES["image_alt"]["name"];
    $place_image_alt_tmp = $_FILES["image_alt"]["tmp_name"];
    move_uploaded_file($place_main_image_tmp,$place_main_image);
    move_uploaded_file($place_image_alt_tmp,$place_image_alt);
    $insert_place = "UPDATE tour_places SET name = '$place_name', locality ='$place_locality', state = '$place_state',  image_main = '$place_main_img', image_alt = '$place_alt_img', price = '$place_price', include_hotel = '$place_hotel', include_flight ='$place_flight', include_refreshment = '$place_refreshment', include_movie = '$place_movie', status = '$place_status' WHERE id =  $ed_id";
    $insert_place_query = mysqli_query($connect,$insert_place);
    if($insert_place_query){
        header("Location: ");
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
                <a href="message-task.html" class="btn btn-info" title="New Message"><b>30 </b><i class="fa fa-envelope-o fa-2x"></i></a>
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
                    
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">EDIT A PLACE</h1>
                        <h1 class="page-subhead-line">Edit place <strong>' <?php echo $edit_name;?> '</strong>. Note that your changes will be saved and effected.  </h1>
                        <?php echo $upload_msg;?>
                    </div>
                    <div class="col-md-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                           EDIT PLACE
                        </div>
                        <div class="panel-body">
                            <form role="form" action="" method="post" enctype="multipart/form-data">
                                <div class="form-group col-xs-6">
                                    <label>Name of place</label>
                                    <input value="<?php echo $edit_name;?>" class="form-control" name="name" required type="text">
                                </div>
                                <div class="form-group col-xs-6">
                                    <label>Locality</label>
                                    <input value="<?php echo $edit_locality;?>" class="form-control" name="locality" required type="text">
                                </div>
                                <div class="form-group col-xs-6">
                                    <label>State</label>
                                    <input value="<?php echo $edit_state;?>" class="form-control" name="state" required type="text">
                                </div>
                                <div class="form-group col-xs-6">
                                    <label>Place price (in Naira)</label>
                                    <input value="<?php echo $edit_price;?>" class="form-control" name="price" required type="number">
                                </div>
                                <div class="form-group col-xs-6">
                                    <label>Place Main Image</label>
                                    <input required class="form-control" name="main_image" type="file">
                                </div>
                                <div class="form-group col-xs-6">
                                    <label>Place second Image</label>
                                    <input class="form-control" name="image_alt" type="file">
                                </div>
                                <div class="form-group col-xs-6">
                                    <label>Include hotel</label>
                                    <select value="<?php echo $edit_include_hotel;?>" required class="form-control" name="hotel" id="">
                                        <option value="Not included">Hotel not included</option>
                                        <option value="Included">Hotel included</option>
                                    </select>

                                </div>
                                <div class="form-group col-xs-6">
                                    <label>Include Flights</label>
                                    <select value="<?php echo $edit_include_flight;?>" required class="form-control" name="flight" id="">
                                        <option value="Not included">Flights not included</option>
                                        <option value="Included">Flights included</option>
                                    </select>

                                </div>
                                <div class="form-group col-xs-6">
                                    <label>Include Refreshment</label>
                                    <select value="<?php echo $edit_include_refreshment;?>" required class="form-control" name="refreshment" id="">
                                        <option value="Not included">Refreshment not included</option>
                                        <option value="Included">Refreshment included</option>
                                    </select>

                                </div>
                                <div class="form-group col-xs-6">
                                    <label>Include Movie</label>
                                    <select value="<?php echo $edit_include_movie;?>" required class="form-control" name="movie" id="">
                                        <option value="Not included">Movie not included</option>
                                        <option value="Included">Movie included</option>
                                    </select>

                                </div>
                                <div class="form-group col-xs-12">
                                    <label>Upload status</label>
                                    <select value="<?php echo $edit_include_status;?>" required class="form-control" name="status" id="">
                                        <option value="upload">Upload</option>
                                        <option value="draft">Draft</option>
                                    </select>

                                </div>
                                <div class="form-group col-xs-12 text-center">
                                    <button type="submit" name="editplace" class="btn-lg btn btn-info">Edit Place </button>
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
