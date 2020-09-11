<?php include "includes/login_check.php";?>
<?php
$conf_msg = "";
if(isset($_POST["adduser"])){
    $user_firstname = mysqli_real_escape_string($connect,$_POST["firstname"]); 
    $user_lastname = mysqli_real_escape_string($connect,$_POST["lastname"]);
    $username = mysqli_real_escape_string($connect,$_POST["username"]);
    $user_email = mysqli_real_escape_string($connect,$_POST["email"]);
    $user_password = mysqli_real_escape_string($connect,$_POST["password"]);
    $user_password = password_hash($user_password,PASSWORD_BCRYPT,array("cost"=>10));
    if($connect){
        $check_username = mysqli_query($connect,"SELECT * FROM users WHERE username = '$username'");
        $row_check = mysqli_num_rows($check_username);
        if($row_check == 0){
            $check_email = mysqli_query($connect,"SELECT * FROM users WHERE email = '$user_email'");
            $check_email_username = mysqli_fetch_assoc($check_email)["username"];
            $email_row_check = mysqli_num_rows($check_email);
            if($email_row_check == 0){
                $submit =  mysqli_query($connect,"INSERT INTO users(firstname,lastname,email,username,password) VALUES('$user_firstname','$user_lastname','$user_email','$username','$user_password')");
                if($submit){
                    $conf_msg = "<div class='alert alert-success'>The user with username @$username was successfully created. Click <a href='users.php'>here</a> to view.</div>";
                }
            }else{
                $conf_msg = "<div class='alert alert-danger'> Signup failed. User with email '$user_email' already exists. Try another email or promt user to recover password if forgotten.</div>";
            }
        }else{
            /*for($i=0;$i<=6;$i++){
                $suggestions = $_POST["username"] .rand(0,10);
                $check_all_usernames = mysqli_query($connect,"SELECT * FROM users");
                while($get_usernames_row = mysqli_fetch_assoc($check_all_usernames)){
                    $get_user = $get_usernames_row["username"];
                    if($suggestions != $get_user){
                        $username_suggestions +=  $suggestions .", ";
                    }
                }
            }*/
            $conf_msg = "<div class='alert alert-danger'> Signup failed. The username <strong>' $username '</strong> already exists. Please try another username.</div>";
        }

        
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
                <a class="navbar-brand" href="index.php">TRAVELLO ADMIN DASHBOARD</a>
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
                        <h1 class="page-head-line">ADD A USER</h1>
                        <h1 class="page-subhead-line">Add a user to travello.com. </h1>
                        <?php echo $conf_msg;?>
                    </div>
                    <div class="col-md-12">
               <div class="panel panel-success">
                        <div class="panel-heading">
                           Add User
                        </div>
                        <div class="panel-body">
                            <form role="form" action="" method="post" onsubmit="verify();">
                                <div class="form-group col-xs-6">
                                    <label>Firstname:</label>
                                    <input name="firstname" class="form-control" type="text" required>
                                </div>
                                <div class="form-group col-xs-6">
                                    <label>Lastname:</label>
                                    <input name="lastname" class="form-control" type="text" required>
                                </div>
                                <div class="form-group col-xs-6">
                                    <label>Email:</label>
                                    <input name="email" class="form-control" type="email" required>
                                </div>
                                <div class="form-group col-xs-6">
                                    <label>Username:</label>
                                    <input name="username" class="form-control" type="text" required>
                                </div>
                                <div class="form-group col-xs-6" required>
                                    <label>Password:</label>
                                    <input id="p1" name="password" class="form-control" type="password" onblur="hidelabel1()" onfocus="showlabel1()" onkeyup="compare();">
                                    <p id="plabel1" style="display:none;" class="text-success">Password must be more than 4 characters</p>
                                </div>
                                <div class="form-group col-xs-6" required>
                                    <label>Repeat Password:</label>
                                    <input id="p2" name="password2" class="form-control" type="password" onblur="hidelabel2()" onfocus="showlabel2()" onkeyup="compare();">
                                    <p id="plabel2" style="display:none;" class="text-success">Password must be more than 4 characters</p>
                                </div>
                                <div class="col-xs-12 alert h4 text-center" style="display:none;" id="comp_mssg">
										aa
								</div>
                                <div class="form-group col-xs-12 text-center">
                                    <button type="submit" name="adduser" id="submit" class="btn-lg btn btn-success">Add User </button>
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
    <script>
function verify(){
	let pass1 = document.getElementById("p1").value;
	let pass2 = document.getElementById("p2").value;
	if(pass1 != pass2){
		event.preventDefault();
		window.alert("Please password fields must be the same");
		
	}

	if(pass1.length <= 4){
		event.preventDefault();
		window.alert("Please Password must be more than 4 characters");
		
	}
}
function showlabel1(){
	let label1 = document.getElementById("plabel1");
	label1.style.display = "block";
}
function hidelabel1(){
	let label1 = document.getElementById("plabel1");
	label1.style.display = "none";
}
function showlabel2(){
	let label2 = document.getElementById("plabel2");
	label2.style.display = "block";
	

	
}
function hidelabel2(){
	let label2 = document.getElementById("plabel2");
	label2.style.display = "none";
}

function compare(){
	
	let pass1 = document.getElementById("p1").value;
	let pass2 = document.getElementById("p2").value;
	let  comp_msg = document.getElementById("comp_mssg");
	
	if((pass1 == "" && pass2== "") || (pass1 != "" && pass2== "")){
		comp_msg.style.display = "none";
	}else{
		comp_msg.style.display = "block";
		if(pass1 == pass2){
		comp_msg.innerHTML = "Password match";
		comp_msg.classList.add("alert-success");
		comp_msg.classList.remove("alert-danger");
		
		}else{
		comp_msg.innerHTML = "Passwords do not match";
		comp_msg.classList.add("alert-danger");
		comp_msg.classList.remove("alert-success");
		}
	}
	
}
	
</script>


</body>
</html>
