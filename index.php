<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com"> <!---->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <!--for the font Inter-->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet"> <!---->
    <title>Document</title>
</head>
<body>
    <div id="nav-bar">
        <p id="team-logo">[ ] MeetEase</p>
        <a href="loginpage.php"><p id="login-btn">Login</p></a>
    </div>

    <div id="txt-content">
        <div id="hero-txt">
            <p>Connect,</p>
            <p>Share and</p>
            <p>Engage</p>
            <p class="txt-shade" id="first-shade"></p>
            <p class="txt-shade" id="second-shade"></p>
            <p class="txt-shade" id="third-shade"></p>
        </div>

        <p id="sub-hero-txt">Join the Movement. MeetEase makes <br>
            connecting with people a breeze</p>


        <a href="register.php"><p id="txt"> Start Now -> </p></a>
        
    </div>

    <div id="img-content">
        <img src="./Assets/teams-teamwork-to-assemble-a-working-puzzle-transformed.png"
             alt="people holding pieces of jigsaw puzzle"/>
    </div>
</body>

<style>
    body{
        font-family: "Inter";
    }

    #nav-bar{
        position: relative;
        display: flex;
        gap: 70em;
        padding-left: 2em;
    }

    #team-logo{
        font-weight: 700;
    }

    #login-btn{
        transition: .3s;
        cursor: pointer;
    }

    #login-btn:hover{
        transform: scale(1.1);
        font-weight: 700;
    }

    #txt-content{
        float: left;
    }

    #hero-txt{
        font-size: 60px;
        margin-left: 2em;
        margin-top: 2.3em;
        font-weight: 700;
        line-height: 1em;
    }

    #img-content{
        float: right;
    }

    #first-shade,#second-shade,#third-shade{
        position: absolute;
        width: 4.5em;
        height: .5em;
        background-color: #D9D9D9;
    }

    #first-shade{
        bottom: 8.3em;
        z-index: -1;
    }

    #second-shade{
        bottom: 6.4em;
        z-index: -1;
        width: 4.9em;
    }

    #third-shade{
        bottom: 4.3em;
        z-index: -1;
        width: 3.8em;
    }

    #sub-hero-txt{
        margin-left: 7em;
        margin-top: 2.3em;
        line-height: 1.6em;
    }

    #txt{
        margin-left: 7em;
        margin-top: 2.3em;
        font-weight: 100;
        transition: .3s;
        cursor: pointer;
    }

    #txt:hover{
        transform: scale(1.1);
        font-weight: 700;
    }

    a{
        text-decoration: none;
        color: inherit;
    }

</style>

</html>
