<?php

session_start();
include("connection.php")
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Account</title>
</head>
<body>
  <div style="text-align: center; padding:15%;">
    <p style="font-size: 50px;font-weight:bold;">
      Welcome, <?php 
      if(isset($_SESSION['Email_address'])){
        $Email_address=$_SESSION['Email_address'];
        $query=mysqli_query($conn,"SELECT user_information. * FROM `user_information` WHERE user_information.Email_address='$Email_address'");
        while($row=mysqli_fetch_array($query)){
          echo $row['First_name'];
        }
      }
      ?>
      :)
    </p>
  </div>
</body>
</html>