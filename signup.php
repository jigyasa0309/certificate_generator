<?php
include 'db.php';
if(isset($_POST['submit']))
{

   $name=$_POST['name'];
   $email=$_POST['email'];
   $password=$_POST['password'];
   $confirm_password=$_POST['confirm_password'];
   $mobile=$_POST['number']; 
   $sql = "insert into userdetails(NAME,EMAIL,PASSWORD,CONFIRM_PASSWORD,MOBILE)
         values ('$name', '$email', '$password', '$confirm_password','$mobile')";

   if(mysqli_query($conn,$sql))
   {
      echo "<script>alert('Done, signed up succesfully kindly login ')</script>";
   
   header("location:profile.php");  
   }
   else 
   {
      echo "error:".mysqli_error($conn);
   }
   mysqli_close($conn);
}
    
?>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>sign up</title>
  <script src="https://kit.fontawesome.com/66aa7c98b3.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="signup.css" />
</head>

<body>
  <form action="signup.php" method="post">
    <h1>Sign Up</h1>
    <p>welcome to A U university</p>
    <div>
      <label for="name">Name:</label>
      <input type="text" name="name" id="name" required>
    </div>
    <div><label for="email">Email:</label>
      <input type="email" name="email" id="email" required>
    </div>

    <div>
      <label for="password">Password:</label>
       <input type="password" name="password" id="Password" required>
    </div>
    <div><label for="confirm_password">Confirm Password:</label> 
      <input type="password" name="confirm_password"
        id="confirm_password" required></label></div>

    <div><label for="phone_number">Phone Number: </label>
      <input type="tel" name="number" id="phone_number"
        required></div>
    <div><input type="submit" name="submit" onclick="profile()" value="Sign Up"></div>
 
  </form>
</body>
<script>
  function profile(){
    window.location.href='profile.php';

  }
 
</script>

</html>







