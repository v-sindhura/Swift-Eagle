<?php include('server2.php') ?>
<html>
    <head>
        <style>
            body{
            background: url(https://static.independent.co.uk/s3fs-public/thumbnails/image/2016/04/12/19/taxi.jpg?w968h681);
            background-color: #cccccc;
            height:100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            }
            .loginbox
        {
            width: 320px;
            height: 400px;
            background: #000;
            color: #fff;
            top: 45%;
            left: 40%;
            position: absolute;
            transform: translate(-50% -50%);
            box-sizing: border-box;
            padding: 70px 30px;
            border-radius: 50px;
                
        }
        .avatar
        {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            position: absolute;
            top: -100px;
            left:82px;
        }
        h1
        {
            margin: 0;
            padding: 0 0 20px;
            text-align: center;
            font-size: 22px;
            top: 50%;
        }
        .loginbox p
        {
            margin: 0;
            padding: 0;
            font-weight: bold;
        }
        .loginbox input
        {
            width: 100%;
            margin-bottom: 20px;
        }
        .loginbox input[type="text"], input[type="password"]
        {
            border: none;
            border-bottom: 1px solid #fff;
            background: transparent;
            outline: none;
            height: 40px;
            color: #fff;
            font-size: 16px;
        }
        .loginbox input[type="submit"]
        {
            border: none;
            outline: none;
            height: 40px;
            background: #fb2525;
            color: #fff;
            font-size: 18px;
            border-radius: 20px;
        }
        .loginbox input[type="submit"]:hover
        {
            cursor: grabbing;
            background: #ffc107;
            color: #000;
        }
        .loginbox a
        {
            text-decoration: none;
            font-size: 12px;
            line-height: 20px;
            color: white;
        }
        .loginbox a:hover
        {
            color: #ffc107;
        }
             .headings{
            font-size: 80px;
            color:black;
            padding: 10px;
            position: absolute;
            top: 10%;
            left: 480px;
        }
        .avatars1
        {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            position: absolute;
            top: 15px;
            left:600px;
        }
        </style>
    </head>
    <body>
        <img src="https://i.pinimg.com/originals/cb/0c/ac/cb0cacfe6909654f077e0423a3c227ab.jpg" class="avatars1">
    <h1 class="headings">Swift Eagle</h1>
        <div class="loginbox">
        <img src="https://banner2.kisspng.com/20180402/eve/kisspng-car-driving-driver-s-license-driver-s-education-driving-school-5ac29581bf24e3.6079234015227016977829.jpg" class="avatar">
        <h1>Log In Here</h1>
        <form method="post" action="logindriver.php">
            <?php include('errors.php'); ?>
        <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username" value="<?php echo($username); ?>">
            <input type="password" name="password_1" placeholder="&#128274 Enter Password">
            <input type="submit" name="register" value="Log In"><br>
            <a href="">Already a member?</a><br>
        </form>
        
        </div>
    </body>
</html>