<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Css/loginpage.css"> <!-- link to css -->
    <link rel="preconnect" href="https://fonts.googleapis.com"> <!---->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <!--for the font Inter-->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet"> <!---->
    <title>Document</title>
</head>
<body>
    <div id="content-container">
        <div id="form-content">
            <form action= "login_action.php" method= "POST">
                <p class="Inter" id="txt"> Welcome Back! </p>
                <p class="Inter" id="para-title-txt"> Please login into your account </p>
                <input type="email" id="email" placeholder="Email" name="email" required>
                <input type="password" id="password" placeholder="Password" name="password" required>
                <input type="submit" id="submit" name="submit" value="Login">
                <p id="footer-txt-left">Do you have an account yet?&nbsp&nbsp
                    <a href="register.php"><span id="footer-txt-left-span">Create one Now!</span></a></p>
            </form>
        </div>

        <div id="image-content">
            <img id="icon" src="Assets/weekday-young-man-making-a-presentation.png" alt="">
            <p id="footer-txt-right">Got questions? &nbsp&nbsp <span id="footer-txt-right-span">meetease@almost247.co.gh</span></p>
        </div>
    </div>
</body>
</html>
