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

    <body>
        <div id="left-side-content">
            <p id="team-logo">[ ] MeetEase</p>
            <p id="logout-btn">Logout &#8617 </p>
        </div>

        <div id="right-side-content">
            <button onclick="showPopUp()" type="button" id="create-btn" style= "border-radius: 7px;">Create &#43</button>

            <!-- <form id="meeting-content" action="">
                <p id="close-btn">&times</p>
                <input type="text" id="title" name="title" placeholder="Title" ><br>
                <input type="date" id="date" name="date" placeholder="Date"><br>
                <input type="time" id="start-time" name="start-time" placeholder="Start Time"><br>
                <input type="time" id="end-time" name="end-time" placeholder="End Time"><br>
                <input type="text" id="desc" name="desc" placeholder="Description">
            </form> -->
            <div style="padding-right:300px; padding-left:300px;" >
            <div id= "popup"style= "text-align: center; marngin-right: 0px; display: none; border:3px solid black ; border-radius:14px; box-shadow: 0px 0px 2dvw 0px ;  " > 
                <div style= "padding-right: 30px; padding-left: 30px; padding-top:30px; " >
                    <div style= " text-align: center;">
                        <h1>Create Meeting!</h1>
                        <!--cancel button-->
                        <p class="cancel-btn" onclick="hidePopUp_Cancel()" >&times</p>
                    </div>
                    <form method= "post" action= "meeting_action.php" name= "register_form" id= "register_form"> 

                    <label>Title</label><br>
                    <input type= "text" name= "meeting_title" id= "meeting_title"required style= "width: 441px; height: 52px; border-radius: 10px; border: solid black; text-align: center;"><br><br>
  

                      <label>Description</label><br>
                      <input type= "text" name= "description" id= "description"required style= "width: 441px; height: 52px; border-radius: 10px; border: solid black; text-align: center;"><br><br>
                        

                      <label>Venue</label>
                      <input type= "text" name= "venue" id= "venue"required style= "width: 441px; height: 52px; border-radius: 10px; border: solid black; text-align: center;"><br><br>


              
                      <label>Date</label><br>
                      <input type= "date" name= "date" id= "date" required style= "width: 441px; height: 52px; border-radius: 10px; border: solid black; text-align: center;"><br><br>
              
                      <label>Start Time</label>
                      <input type= "time" name= "start_time" id= "start_time"  required style= "width: 139px; height: 52px; border-radius: 10px; border: solid black; text-align: center;">
              
                      <label style="left:10px">End Time</label>
                      <input type= "time"  name= "end_time" id= "end_time" required style= "width: 139px; height: 52px; border-radius: 10px; border: solid black; text-align: center;"><br><br>
              
              
                      <input  id= "submit-btn" type= "submit" name= "submit_meeting"  id= "submit_meeting" value= "Submit" style= "width: 441px; height: 52px; border-radius: 7px; border: solid black; background-color: rgba(0, 0, 0, 0.778); color:rgba(255, 255, 255, 0.873)"><br><br>
                    </form> 
              
                  </div>

            </div>
            </div>


    

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
    </script>
</html>
