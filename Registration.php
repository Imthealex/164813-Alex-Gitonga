<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Client's page</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="main">
    <input type="checkbox" id="chk" aria-hidden="true">
  <div class="signup">
    
    <form class="form3" method="post" action="register.php"><div class="inputg">

      <label for="chk" aria-hidden="true">SignUp</label>
    <input class="aborder" type="name" name="name" placeholder="First name">
    <div class="usererror"></div>

    <input class="info" class="aborder" type="number" name="number" placeholder="Phone Number" >

    
    <input class="emailborder" type="email" name="email" placeholder="Enter your Email">
    <div class="emailerror"></div>
        
        <input class="pasborder" type="password" name="password" placeholder="Create Password">
      <div class="passworderror"></div>

  </br>
      <input href="" type="submit" name="signUp" value="Sign Up" >
      </br>
    </div>
  </form>
</div>

    <div class="login">
      <form class="form1" method="post" action="register.php">
        <div class="inputg">
          <label for="chk" aria-hidden="true">LOGIN</label>
        
           <input class="emailborder" type="email" name="email" placeholder="Email Address" id="email">
           <div class="emailerror"></div>
           <input class="pasborder" type="password" name="password" placeholder="Password" id="password">
            <div class="passworderror"></div>
    </br>
           <input class="submit"type="submit" name="signIn" value="sign In">
    </br>
        </div>     
  </form>
    </div>	
  </div>

</body>
</html>