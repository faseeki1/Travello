<?php include "includes/login_check.php";?>
<?php
    if(isset($_GET["del"])){
        $del = $_GET["del"];
        $del_query = mysqli_query($connect,"DELETE FROM users WHERE id=$del");
        if($del_query){
            header("Location: users.php");
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
                        <a href="#" ><i class="fa fa-yelp "></i>Places <span class="fa arrow"></span></a>
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
                        <a href="#" class="active-menu"><i class="fa fa-bicycle "></i>Users <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                           
                             <li>
                                <a href="users.php"><i class="fa fa-eye "></i>View users </a>
                            </li>
                             <li>
                                <a href="adduser.php"><i class="fa fa-plus "></i>Add user</a>
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
                        <h1 class="page-head-line">Travello Users</h1>
                        <h1 class="page-subhead-line">Users that have signed up on Travello.com. </h1>
                    </div>
                    <div class="col-md-12">
                        <!--   Kitchen Sink -->
                          <div class="panel panel-default">
                              <div class="panel-heading">
                                  Users
                              </div>
                              <div class="panel-body">
                                  <div class="table-responsive">
                                      <table class="table table-striped table-bordered table-hover">
                                          <thead>
                                              <tr>
                                                  <th>User id</th>
                                                  <th>Edit</th>
                                                  <th>Delete</th>
                                                  <th>Firstname</th>
                                                  <th>Lastname</th>
                                                  <th>Username</th>
                                                  <th>Email</th>
                                                  <th>Last login</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              
                                                <?php
                                                    $user_query = mysqli_query($connect,"SELECT * FROM users");
                                                    while($usersrow = mysqli_fetch_assoc($user_query)){
                                                        $user_id = $usersrow["id"];
                                                        $firstname = $usersrow["firstname"];
                                                        $lastname = $usersrow["lastname"];
                                                        $username = $usersrow["username"];
                                                        $email = $usersrow["email"];
                                                        $last_login = $usersrow["last_login"];
                                                        if($last_login == ""){
                                                            $last_login = "Never logged in";
                                                        }
                                                    
                                                ?>
                                                <tr>
                                                  <td><?php echo $user_id;?></td>
                                                  <td><a href="#"><i class="fa fa-edit text-primary"></i></a> </td>
                                                  <td> <a onclick="javascript: return confirm('Are you sure you want to delete User?')" href="users.php?del=<?php echo $user_id;?>"><i class="fa fa-trash text-primary"></i></a> </td>
                                                  <td><?php echo $firstname;?></td>
                                                  <td><?php echo $lastname;?></td>
                                                  <td>@<?php echo $username;?></td>
                                                  <td><?php echo $email;?></td>
                                                  <td><?php echo $last_login;?></td>
                                                    
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
