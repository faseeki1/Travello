<?php 
    if(isset($_GET["message"])){
        $read_id = $_GET["message"];
        $update_read = mysqli_query($connect,"UPDATE messages SET status = 'read' WHERE id= $read_id");
    }
?>


<?php
    $message_idd = $_GET["message"];
     $get_mssg = mysqli_query($connect,"SELECT * FROM messages WHERE id = $message_idd");
     while($msssg = mysqli_fetch_assoc($get_mssg)){
         $msg_name = $msssg["name"];
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
         if($day == 0){
             $d = "";
         }else{
             $d = $day ." Days, ";
         }
         if($hour == 0){
            $h = "";
        }else{
            $h = $hour ." Hours, ";
        }
        if($minute == 0){
            $m = "";
        }else{
            $m = $minute ." Minutes, ";
        }

         $hours = $dayrem * 24;
    }?>

<div class="panel panel-default">
                        <div class="panel-heading">
                        Message From - <?php echo "<b>$msg_name</b>" ."  @<i class='text-primary'>$msg_email</i>";?>
                        </div>
                        <div class="panel-body">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#home" data-toggle="tab">Message details</a>
                                </li>
                                <li class=""><a href="#profile" data-toggle="tab">Message content</a>
                                </li>
                                <li class=""><a href="#messages" data-toggle="tab">Reply Message</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane fade active in" id="home" style="margin:3rem 0;">
                                    <h5 style="display:inline;">Sender name: </h5>
                                    <span><?php echo $msg_name;?></p>
                                    <hr>
                                    <h5 style="display:inline;">Sender Email: </h5>
                                    <span><?php echo $msg_email;?></p>
                                    <hr>
                                    <h5 style="display:inline;">Date Sent: </h5>
                                    <span><?php echo $msg_date;?></p>
                                    <hr>
                                    <h5 style="display:inline;">Time Sent: </h5>
                                    <span><?php echo $d ."  " .$h ." " .$m ." " .$seconds ." Seconds Ago";?></p>
                                </div>
                                <div class="tab-pane fade" id="profile" style="margin:3rem 0;">
                                    <h5 style="display:inline;">Message Subject: </h5>
                                    <span><?php echo $msg_subject;?></p>
                                    <hr>
                                    <h5 style="display:inline;">Message Content: </h5>
                                    <span><?php echo $msg_message;?></p>
                                </div>
                                <div class="tab-pane fade" id="messages" style="margin:3rem 0;">
                                    <div class="alert alert-success">Replying to <?php echo $msg_email?></div>
                                   <form action="#">
                                       <div class="form-group">
                                           <label for="">Enter Subject:</label>
                                           <input type="text" class="form-control">
                                       </div>
                                       <div class="form-group">
                                           <label for="">Enter body:</label>
                                           <textarea name="#" id="" cols="30" rows="5" class="form-control"></textarea>
                                       </div>
                                       <div class="form-group">
                                          <input type="submit" value="Send Reply" class="form-control btn btn-success text-white">
                                       </div>
                                   </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    