<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial;
}
.coupon {
  border: 5px dotted #bbb;
  width: 80%;
  border-radius: 15px;
  margin: 0 auto;
  max-width: 600px;
}
    .Buttons a:hover
        {
            background-color: darkorange;
            border-radius: 10px;
            text-decoration: none;
        }  
.Button2{
            position: absolute;
            left:1100px;
            top:9px;
            font-size-adjust: auto;
            font-family:sans-serif;
            text-decoration: none;
        }
.Button3{
            position: absolute;
            left:1200px;
            top:9px;
            font-size-adjust: auto;
            font-family:sans-serif;
            text-decoration: none;
        }
.container {
  padding: 2px 16px;
  background-color: #f1f1f1;
}
.promo {
  background: #ccc;
  padding: 3px;
}
.expire {
  color: red;
}
</style>
</head>
<body>
    <?php
$db=mysqli_connect('localhost','sindhu','qazwsxedcrfvtgbyhnujmikolp','Cabhiringdb');
    if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
    $sql="SELECT promo,title,description,expires,imgaddress from promocodes";
    $result=mysqli_query($db, $sql);
  while ($row=mysqli_fetch_array($result)) { ?>
<div class="coupon">
  <div class="container">
    <h3>The Swift Eagle</h3>
  </div>
  <img src="<?php echo $row['imgaddress']?>" alt="Avatar" style="width:100%;">
  <div class="container" style="background-color:white">
    <h2><b><?php echo $row['title']?></b></h2> 
    <p><?php echo $row['description']?></p>
  </div>
  <div class="container">
    <p>Use Promo Code: <span class="promo"><?php echo $row['promo']?></span></p>
    <p class="expire"><?php echo $row['expires']?></p>
  </div>
</div>
    
   <?php }

    ?>
 
    
<div class="Buttons">
        <p1>
    
    <a href="adminlogin.php" class="Button2"> admin login </a>
   <a href="customerhomepage.php" class="Button3">BACK</a> 
            </p1>
    </div>
</body>
</html>