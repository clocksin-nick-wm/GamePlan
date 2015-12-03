<!DOCTYPE html>
<html>
<head>
    <title>GamePlan</title>
    <link href="Styles_Index.css" type="text/css" rel="stylesheet">
</head>
<body >
<div id="Main">
    <div id="TopSpace">
        <!-- Nothing goes here this is just here to make is so I can have a margin on the <div id="Header"> -->
    </div>
    <div id="Header">
        <img src="GamePlan_logo_2.png" style="height: 80px; width: 116px; margin-left: 20px;" alt="Logo">
        <!-- Main Header should go here -->
        <div id="LoginArea" style="color: white;">
            <!-- This is where the Login and Username and SignUp with a new account will happen -->
            <p style="margin-top: 0; margin-bottom: 0;">Login</p>
            <p style="margin-top: 0; margin-bottom: 0;">Sign Up</p>
        </div>
    </div>
    <div id="Navigation">
        <!-- everything navigation goes here (other than signing up and logging out and creating new accounts) -->
    </div>
    <!-- This is where everything inside the Main div will go that's not inside the header or navigation -->
    <div id="Picture_Slider">
        <!-- This is where the Picture Slider using JQuery -->
    </div>
    <!-- Script for keeping the JQuery slider scaled with the window size -->
    <script>
        var windowHeight = window.innerHeight;
        var windowWidth = window.innerWidth;
        console.log(windowHeight);
        console.log(windowWidth);
        document.getElementsByTagName("BODY").onresize = sliderSizeController();
        function sliderSizeController() {
            document.getElementById("Picture_Slider");


        }
    </script>
    <script src="jquery.js" type="text/javascript"></script>
    <script src="Picture%20Slider.js" type="text/javascript"></script>

</div>
</body>
</html>