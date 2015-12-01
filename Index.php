<!DOCTYPE html>
<html>
<head>
    <title>GamePlan</title>
    <style>
        #TopSpace{
            height: 1px;
            width: 100%;
        }
        #Header{
            margin-top: 14px;
            width: 100%;
            height: 80px;
            background-color: #46d146;
            fill-opacity: 0.75;
        }
        #Navigation{
            float: left;
            width: 180px;
            height: 675px;
            background-color: #D21620;
        }
        #LoginArea {
            float:right;
            width: 180px;
            height: 80px;
            background-color: #1D279B;
        }
    </style>
</head>
<body>
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
</body>
</html>