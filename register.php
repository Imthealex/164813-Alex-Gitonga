<?php     

include 'connection.php';

if(isset($_POST['signUp'])){
    $First_name=$_POST['name'];
    $phoneNumber=$_POST['number'];
    $Email_address=$_POST['email'];
    $Password=$_POST['password'];
    $Password=md5($Password);

    $checkEmail="SELECT * From user_information where Email_address ='$Email_address'";
    $result=$conn->query($checkEmail);
    if($result->num_rows>0){
      echo "Email Address Already exists!";
    }
    else{
      $insertQuery="INSERT INTO user_information(First_name,phoneNumber,Email_address,Password)
      VALUES ('$First_name','$phoneNumber','$Email_address','$Password')";
       if($conn->query($insertQuery)==TRUE){
        header("location: Registration.php");
       }
       else{
        echo"Error:".$conn->error;
       }
    }
}

  if(isset($_POST['signIn'])){
    $Email_address=$_POST['email'];
    $Password=$_POST['password'];
    $Password=md5($Password);

    $sql="SELECT * FROM user_information WHERE Email_address='$Email_address' and password='$Password'";
    $result=$conn->query($sql);
    if($result->num_rows>0){
      session_start();
      $row=$result->fetch_assoc();
      $_SESSION['Email_address']=$row['Email_address'];
      header("location: homepage.php");
      exit();
    }
    else{
      echo "Not Found,Incorrect Email or Password!";
    }
}
?>