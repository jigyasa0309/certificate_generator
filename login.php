
<?php 
session_start();     
    include'db.php'; 
    if(isset($_POST['submit'])){
    
    $email = $_POST['email'];  
    $password = $_POST['password']; 
    $query= "SELECT * FROM USERDETAILS WHERE EMAIL='$email'&& PASSWORD='$password'";
    $data= mysqli_query($conn,$query);
    $total= mysqli_num_rows($data);
    if($total==1){
       // echo "<h1><center> Login successful </center></h1>"; 
       $_SESSION['user_name']=$email; 
        header("location:profile.php");  

    }
    else{
    echo "<h1> Login failed. Invalid username or password.</h1>";  
    }
 }
          
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Form</title>
    <script
      src="https://kit.fontawesome.com/66aa7c98b3.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="login.css" />
  </head>
  <body>
    <div class="container">
      <form class="form-1" name="f1" method="post" action="login.php">
        <h1>Login</h1>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required />
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required />
      
        <input class="button" type="submit" name= "submit" value="Login">
        <span>Forgot Password</span>
        <!-- .........///sign-up///.......... -->

        <p>Or SignUp Using</p>
        <div class="icons">
          <a href="https://www.facebook.com/" target="blank"
            ><i class="fab fa-facebook-f"></i
          ></a>
          <a href="https://twitter.com/" target="blank"
            ><i class="fab fa-twitter"></i
          ></a>
          <a href="https://mail.google.com/" target="blank"
            ><i class="fab fa-google"></i
          ></a>
        </div>
      </form>
    </div>
  </body>
</html>

  