<?php
session_start();
ob_start();
    $msg = "";
    if(isset($_POST["login"])){
        $username = $_POST["username"];
        $password = $_POST["password"];
        if($username == 'swanky' && $password == '00000'){
            header("Location: ../admin/");
            $_SESSION["admin"] = "admin_swanky";
            $msg ="";
        }else{
            $msg = "<div class='alert alert-danger'>Login failed!!. Incorrect or unregistered details. Please contact Travello management for confirmation.</div>";
        }
    }
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin - travello</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body style="background-color: #E2E2E2;">
    <div class="container">
        <div class="row text-center " style="padding-top:100px;">
            <div class="col-md-12">
                <h3>TRAVELLO ADMIN LOGIN</h3>
            </div>
        </div>
         <div class="row ">
               
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                           
                            <div class="panel-body">
                                <form role="form" action="" method="post">
                                    <hr />
                                    <div class="col-12 text-center text-primary"><h5>Only registered Travello Admins allowed.</h5></div>
                                    <?php echo $msg;?>
                                    
                                       <br />
                                     <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                        <input type="text" name="username" class="form-control" placeholder="Admin Username " />
                                    </div>
                                      <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                        <input type="password" name="password" class="form-control"  placeholder="Admin Password" />
                                    </div>
                                    <div class="form-group">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" /> Remember me
                                        </label>
                                        <span class="pull-right">
                                               <a href="index.html" >Forget password ? </a> 
                                        </span>
                                    </div>
                                    <div class="col-12 text-center">
                                        <input type="submit" name="login" value="Login" class="btn btn-success btn-lg">
                                    </div>
                                    <hr />
                                    </form>
                            </div>
                           
                        </div>
                
                
        </div>
    </div>

</body>
</html>
