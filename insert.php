<?php
include 'db.php';
if(isset($_POST['submit']))
{

   $name = $_POST['name'];
   $email = $_POST['email'];
   $mobile = $_POST['number'];
   $gender = $_POST['gender'];
   $address = $_POST['address'];
   $city = $_POST['city'];
   $state = $_POST['state'];
   $country = $_POST['country'];
    
   $sql = "insert into registration(NAME,EMAILID,CONTACT,GENDER,ADDRESS,CITY,STATE,COUNTRY)
         values ('$name', '$email', '$mobile', '$gender','$address','$city','$state','$country')";

   if(mysqli_query($conn,$sql))
   {
     // echo "<script>alert('Done')</script>";
     header("location:home.html");
   }

   else 
   {
      echo "error:".mysqli_error($conn);
   }
   mysqli_close($conn);
}
    
?>



