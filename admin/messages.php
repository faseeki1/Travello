<?php include "includes/login_check.php";?>
   

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
                        <a href="#" ><i class="fa fa-bicycle "></i>Users <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                           
                             <li>
                                <a href="users.php"><i class="fa fa-desktop "></i>View users </a>
                            </li>
                             <li>
                                <a href="adduser.php"><i class="fa fa-code "></i>Add user</a>
                            </li>
                             
                           
                        </ul>
                    </li> 
                    <li><a href="messages.php" class="active-menu"><i class="fa fa-envelope "></i>Messages (<?php echo $count_unread_mssg_num;?> New)</a></li>
                    
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->

        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">MESSAGES</h1>
                        <h1 class="page-subhead-line"> Theses are Messages sent from the contact form in travello.com. Please check the messages regularly to ensure fast responses to complaints of our patrons. </h1>
                    </div>
                    <div class="col-md-5">
                    <div class="panel panel-success" >
                            <div class="panel-heading">
                                <i class="fa fa-bell fa-fw"></i>Your Messages
                            </div>
                            <div class="panel-body" style="height: 45rem; overflow-y: auto;">
                                <div class="list-group">
                                <?php
                                 $get_mssg = mysqli_query($connect,"SELECT * FROM messages ORDER BY id DESC");
                                 while($msssg = mysqli_fetch_assoc($get_mssg)){
                                     $msg_name = $msssg["name"];
                                     $msg_status = $msssg["status"];
                                     $msg_id = $msssg["id"];
                                     $msg_subject = $msssg["subject"];
                                     $msg_message = $msssg["message"];
                                     $msg_email = $msssg["email"];
                                     $msg_date = $msssg["date"];
                                     $msg_time = $msssg["time"];
                                     $time_diff = time() - $msg_time;
                                     $day = floor($time_diff / (60*60*24));
                                     $dayrem  = ($time_diff / (60*60*24)) - $day;
                                     $hour = floor($dayrem * 24);
                                     $hourrem = ($dayrem * 24) - $hour;
                                     $minute = floor($hourrem * 60);
                                     $minuterem = ($hourrem * 60) - $minute;
                                     $seconds = floor($minuterem * 60);
                                     if($msg_status == 'unread'){
                                        $msg_bg = "background: rgba(200,176,255,0.8);";
                                     }else{
                                        $msg_bg = "";
                                     }
                                     if($day == 0){
                                         $d = "";
                                     }else{
                                         $d = $day ."d";
                                     }
                                     if($hour == 0){
                                        $h = "";
                                    }else{
                                        $h = $hour ."h";
                                    }
                                    if($minute == 0){
                                        $m = "";
                                    }else{
                                        $m = $minute ."m";
                                    }

                                     $hours = $dayrem * 24;
                                 
                                ?>
                                    <a onclick="document.location.reload();" href="messages.php?message=<?php echo $msg_id;?>" class="list-group-item" style="<?php echo $msg_bg;?>">
                                        <i class="fa fa-envelope fa-fw"></i><span style="font-size:1.1rem;"> Message From - <?php echo $msg_name;?></span>
                                        <span class="pull-right text-muted small"><em><?php echo $d ." " .$h ." " .$m ." " .$seconds; ?>s ago</em>
                                        </span>
                                    </a>
                                 <?php }?>
                                </div>
                                <!-- /.list-group -->
                            </div>

                    </div>
                    </div>
                    <div class="col-md-7">
                        <?php 
                            if(isset($_GET["message"])){
                                include "includes/message.php";
                            }else{
                                include "includes/messagedef.php";
                            }
                        ?>
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
