<?php include('server4.php'); ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

.container {
  padding: 16px;
  background-color: white;
}


input[type=text] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus {
  background-color: #ddd;
  outline: none;
}


hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 35%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

a {
  color: dodgerblue;
}

.signin {
  background-color: #f1f1f1;
  text-align: left;
}
</style>
</head>
<body>


  <div class="container">
    <h1>Add Promo</h1>
    <form method="post" action="addpromo.php">
        <?php include('errors.php'); ?>
    <p>Please fill in this form to create  an promo.</p>
    <hr>

    <label for="Promo Code"><b>Promo Code</b></label>
    <input type="text" name="promo" placeholder="Enter Promo Code"  required>
    <label for="Title"><b>Title</b></label>
    <input type="text" name="title" placeholder="Enter Title for the promo"  required>
    <label for="Description"><b>Description</b></label>
    <input type="text" name="description" placeholder="Enter Description for the promo"  required>
    <label for="Expires"><b>Expires</b></label>
    <input type="text" name="expires" placeholder="Enter the aplicable users for the promo"  required>
    <label for="image"><b>image address</b></label>
    <input type="text" name="imgaddress" placeholder="Enter the imageaddress for the promo"  required>
    <hr>
    <input type="submit" class="registerbtn" name="regbutton" value="Create Promo">
    </form>
  </div>
  
  <div class="container signin">
     <a href="promomain.html">back</a>
  </div>


</body>
</html>
