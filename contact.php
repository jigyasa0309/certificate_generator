<?php

include 'db.php';
if(isset($_POST['submit']))

{

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $sql = "insert into contact(NAME,EMAIL,MESSAGE)
          values ('$name', '$email', '$message')";
 
    if(mysqli_query($conn,$sql))
    {
       echo "<script>alert('We will be contacting you soon!!! ')</script>";
    }
 
    else 
    {
       echo "error:".mysqli_error($conn);
    }
    mysqli_close($conn);
 }
     
 ?>
 






