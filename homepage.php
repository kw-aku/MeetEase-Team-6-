<?php 
include "connections.php";
session_start();
/**Redirects user to login page if the user has no session*/
if (!isset($_SESSION['user_id'])){
    header("Location: loginpage.php");
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset = UTF-8>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="Css/homepage.css">
        <link rel="preconnect" href="https://fonts.googleapis.com"> <!---->
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <!--for the font Inter-->
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet"> <!---->
        <title>Home Page</title>  
    </head >
    <body >

        <div id="left-side-content">
            <p id="team-logo">[ ] MeetEase</p>
            <!-- <a href="loginpage.php"><p id="logout-btn" >Logout &#8617 </p></a> -->
            <form style= "background-color: black;" action= "logout_action.php" name="logout_button_form" id= "logout_button_form" method= "post">
                <input type= "submit" id="logout-btn" name= "logout_button" value= "Logout &#8617">
            </form>
        </div>
        
        <div id="right-side-content; " >
            <h id= page-heading>Meetings</h>
            <button onclick="showPopUp()" type="button" id="create-btn" style= "border-radius: 7px;">Create &#43</button><br><br>
            
            <table style="z-index: -1;"> <!--bring to back-->
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Venue</th>
                        <th>Start Time</th>
                        <th>End Time</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include ("view_meetings_fxn.php");
                        // looping through meetings using id
                        foreach ($meetings as $id => $meeting){
                            $title = $meeting['title'];
                            $venue = $meeting['venue'];
                            $stime = $meeting['stime'];
                            $etime = $meeting['etime'];
                            echo "<tr>";
                                echo "<td id='echo $id'>";
                                    echo "$title";
                                echo "</td>";
                                echo "<td id='echo $id'>";
                                    echo "$venue";
                                echo "</td>";
                                echo "<td id='echo $id'>";
                                    echo "$stime";
                                echo "</td>";
                                echo "<td id='echo $id'>";
                                    echo "$etime";
                                echo "</td>";
                                echo "<td>";
                                    echo "<a href='delete_meetings_action.php?id=$id' style='text-decoration: none; color:black;'>
                                        <span style='cursor:pointer;'>&times</span></a>&nbsp&nbsp&nbsp&nbsp<span id='update' data-meeting-id='$id' onclick='showPopUpUpdate(this)' style='cursor:pointer;'>update</span>";
                                echo "</td>";
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>

        



            <div id="form_container" style=" margin-left: 33em; background-color:rgba(255, 255, 255); top: 90px;"  >
              <div id= "popup"style= "text-align: center; display: none; border:2px solid black ; border-radius:14px; box-shadow: 0px 0px 100dvw 10px;  0px text-align: center; padding-right: 70px; padding-left: 70px; padding-top:30px;"; > 
                    <div style= " text-align: center;">
                        <h1>Create Meeting!</h1>
                        <!--cancel button-->
                        <p class="cancel-btn" onclick="hidePopUp_Cancel()" >&times</p>
                    </div>
                    <form method= "post" action= "meeting_action.php" name= "register_form" id= "register_form"> 

                      <label style= "filter:none;">Title</label><br>
                      <input type= "text" name= "meeting_title" id= "meeting_title"required style= "width: 441px; height: 52px; border-radius: 10px; border: solid black; text-align: center;"><br><br>
  

                      <label>Description</label><br>
                      <input type= "text" name= "description" id= "description"required style= "width: 441px; height: 52px; border-radius: 10px; border: solid black; text-align: center;"><br><br>
                        

                      <label>Venue</label><br>
                      <input type= "text" name= "venue" id= "venue"required style= "width: 441px; height: 52px; border-radius: 10px; border: solid black; text-align: center;"><br><br>


              
                      <label>Date</label><br>
                      <input type= "date" name= "date" id= "date" required style= "width: 441px; height: 52px; border-radius: 10px; border: solid black; text-align: center;"><br><br>
              
                      <label>Start Time</label>
                      <input type= "time" name= "start_time" id= "start_time"  required style= "width: 136px; height: 52px; border-radius: 10px; border: solid black; text-align: center;">
              
                      <label style="left:10px">End Time</label>
                      <input type= "time"  name= "end_time" id= "end_time" required style= "width: 136px; height: 52px; border-radius: 10px; border: solid black; text-align: center;"><br><br>
              
              
                      <input  id= "submit-btn" type= "submit" name= "submit_meeting"  id= "submit_meeting" value= "Submit" style= "width: 441px; height: 52px; border-radius: 7px; border: solid black; background-color: black; color:rgba(255, 255, 255, 0.873)"><br><br>
                    </form> 
                </div>
            </div>
            <!--form end for creating meetings-->

            <!--form for updating-->
            
            <form id="formUpdate" action="update_meetings_action.php" method="post" style="display:none; position:relative; width: 30em; height:15em; border:2px solid black; 
                background-color:white; border-radius:14px; left: 650px; box-shadow: 0px 0px 90px 1px;"> 
                <p  onclick="hidePopUpUpdate_Cancel()" style="position:absolute; left: 16em; font-size:26px; cursor:pointer;">&times</p>
               
                <input type="hidden" id="hidden-element" name="id">
                <!-- <div>
                <label>Start Time</label>
                <input type= "time" name= "start_time" id= "start_time"  required style= "width: 136px; height: 52px; border-radius: 10px; border: solid black;margin-right:10px;">
              
                <label style="left:10px">End Time</label>
                <input type= "time"  name= "end_time" id= "end_time" required style= "width: 136px; height: 52px; border-radius: 10px; border: solid black;;"><br><br>

                <input  id= "submit-btn" type= "submit" name= "submit_meeting"  id= "submit_meeting" value= "Submit" style= "width: 441px; height: 52px; border-radius: 7px; border: solid black; background-color: black; color:rgba(255, 255, 255, 0.873)"><br><br>
                </div> -->
                <div >
                <label style="left:100px; ">Start Time</label><br>
                <input type="time" id="start_time" name="start_time" style="position:relative; width: 10em; height: 52px; 
                border-radius: 10px; border: solid black; right: 20em; top:10em; ">
                <label>End Time</label><br>
                <input type="time" id="end_time" name="end_time" style="position:relative; width: 10em; height: 52px; 
                border-radius: 10px; border: solid black; right: 5em; bottom:.5em;">
                <div>

                <input type="submit" name="submit" id="submit" value="Submit" style="position:relative; width: 10em; 
                height: 52px; border-radius: 10px; border: solid black; right: 10em; top:2em;">
            </form>
            
             


            
            
    </body>

    <!--function for popup-->
    <script>
        
        function showPopUp(){
            var divId = document.getElementById("popup");

            if (divId.style.display === "none") {
            divId.style.display = "block";}
        }

        function hidePopUp_Cancel(){
            var divId = document.getElementById("popup");

            if (divId.style.display === "block" ) {
            divId.style.display = "none";}
        }

        function showPopUpUpdate(clickedElement){
            // alert(id);
            var meetingId = clickedElement.dataset.meetingId;
            var divId = document.getElementById("formUpdate");
            document.getElementById("hidden-element").value = meetingId;
            if (divId.style.display === "none") {
            divId.style.display = "block";}  
        }

        function hidePopUpUpdate_Cancel(){
            var divId = document.getElementById("formUpdate");
            if (divId.style.display === "block" ) {
            divId.style.display = "none";}
        }

        
        

        

        // function deleteRecord(id){
        //     var meetingID = document.getElementById(id).innerHTML;
        //     // alert(choreID);
        //     window.location.href = 'delete_action.php?id=' + meetingID; 
        // }

    </script>
</html>
