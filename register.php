<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Css/register.css"> <!-- link to css -->
    <link rel="preconnect" href="https://fonts.googleapis.com"> <!---->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <!--for the font Inter-->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet"> <!---->
    <title>Document</title>
</head>
<body>
    <div id="content-container">
        <div id="form-content">
            <form action="register_action.php" method="post" name= "register_form" id= "register_form">
                <p id="title-txt">Create your account today!</p>
                <p id="para-title-txt"> Start your first scheduled meeting with
                    <span id="para-title-txt-span"> Us!</span> </p>
                <div id="input-content">
                    <div id="content-one">
                        <input type="text" id="fname" placeholder="First Name" name="fname" required>
                        <input type="text" id="lname" placeholder="Last Name"  name="lname" required>
                    </div>
    
                    <div id="content-two">
                        <input type="email" id="email" placeholder="Email" name="email" required>
                        <input type="password" id="password" placeholder="Password" name="password" required>
                    </div>
                </div>
              <input type="submit" id="submit" name="submit_button" value="Join Us">
                <p id="footer-txt-left"> Got questions?&nbsp&nbsp<span id="footer-txt-left-span">meetease@almost247.co.gh</span> </p>
            </form>
        </div>

        <div id="img-content">
            <p class="circle" id="first-c"></p>
            <p class="circle" id="second-c"></p>
            <p class="circle" id="third-c"></p>
            <p class="circle" id="forth-c"></p>
            <p class="circle" id="fifth-c"></p>
            <p class="circle" id="sixth-c"></p>
            <p class="circle" id="seventh-c"></p>
            <p class="circle" id="eighth-c"></p>
            <p class="circle" id="nineth-c"></p>
            <p class="circle" id="tenth-c"></p>
            <p class="circle" id="eleventh-c"></p>
            <p class="circle" id="twelevth-c"></p>
            <p class="circle" id="thirteen-c"></p>
            <p class="circle" id="forteen-c"></p>
            <p id="footer-txt-right">Already have an account yet?&nbsp&nbsp
                <a href="loginpage.html"><span id="footer-txt-right-span">Login here!</span></a></p>
        </div>
    </div>
</body>
</html>
