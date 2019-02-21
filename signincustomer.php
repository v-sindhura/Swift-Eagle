<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Sign up-Food App</title>
    <style>
        body{
            margin: 0;
            padding: 0;
            background: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSiYVuxZggd4hwk2YEZOFYg-KJZrr4n-Ohto9hc03pEglzDbJ1m);
            background-size:cover;
            background-position: center;
        }
        .loginbox
        {
            width: 320px;
            height: 800px;
            background: #000;
            color: #fff;
            top: 20%;
            left: 38%;
            position: absolute;
            transform: translate(-50% -50%);
            box-sizing: border-box;
            padding: 70px 30px;
                
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

    
    </style>
    </head>
    <body>
    <div class="loginbox">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ6ibI5P0aMmW6vN4ToKYA1q4FZnd3r0AJI0QUEQ8mFSjgt3wJ8" class="avatar">
        <h1>Sign Up Here</h1>
        <form method="post" action="signincustomer.php">
            <?php include('errors.php'); ?>
        <p>Username</p>
            <input type="text" name="username" placeholder="&#9993 Enter Username" value="<?php echo($username); ?>">
            <p>Name</p>
            <input type="text" name="name" placeholder="Enter Name" value="<?php echo($name); ?>">
            <p>Email</p>
            <input type="text" name="email" placeholder="Enter Email" value="<?php echo($email); ?>">
            <p>Date of Birth</p>
            <input type="text" name="dob" placeholder="YYYY-MM-DD" value="<?php echo($dob); ?>">
            <p>Mobile Number</p>
            <input type="text" name="mobile" placeholder="Enter Mobile Number" value="<?php echo($mobile); ?>">
            <p>Password</p>
            <input type="password" name="password_1" placeholder="Enter Password">
            <p>Confirm Password</p>
            <input type="password" name="password_2" placeholder="Confirm Password">
            <input type="submit" name="register" value="Signup"><br>
        </form>
        
        </div>
    </body>
</html>