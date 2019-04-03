<?php include('server5.php'); ?>
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

<form  method="post" action="deletepromo.php">
    <?php include('errors.php'); ?>
  <div class="container">
    <h1>Delete Promo</h1>
    <p>Please fill in this form to Delete existing promo.</p>
    <hr>

    <label for="Promo Code"><b>Promo Code</b></label>
    <input type="text" placeholder="Enter Promo Code" name="promoname" required>
    <label for="Title"><b>Reason</b></label>
    <input type="text" placeholder="Reason to delete" name="reason">
    <hr>
    <button type="submit" class="registerbtn">Delete Promo</button>
  </div>
  
  <div class="container signin">
     <a href="offers.php">BACK</a>
  </div>
</form>

</body>
</html>
