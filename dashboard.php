<?php

session_start();
require("db.php");
$userName = $_SESSION['user_name'];

if (!$userName) {
    header('Location: login.php');
    exit();
}
?>


<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <style>

.container {
    width: 80%;
    margin: 0 auto;
    text-align: center;
  }
  
  .greet h1 {
    margin-top: 2px;
  }
  
  main {
    margin-top: 20px;
  }
  
  h2 {
    font-size: 24px;
    margin-bottom: 10px;
  }
  
  .btn {
    display: inline-block;
    padding: 10px 20px;
    background-color: #4CAF50;
    color: white;
    text-decoration: none;
    border-radius: 4px;
  }
  
  .btn:hover {
    background-color: #45a049;
  }
  
   </style>
      <link rel="stylesheet" href="profile.css">

</head>

<body>   
    <div class="container">

        <main>
            <h2>Welcome,
                <?php echo $userName; ?>!
            </h2>
          
        <div id="sidebar" class="neumorphic">
            <ul class="menu">
                <li>HOME</li>
                <li>VIEW REPORTS</li>
                <li>EXAMINATION RESULTS</li>
                <li>PLACEMENTS</li>
                <a href = "logout.php" tite = "Logout">Logout</a>
            </ul>
        </div>
    

            <!-- <?php include 'certificate.php'; ?> -->
            <a href="downloadcertificate.php" class="btn">Generate Certificate</a>
        </main>
    </div>
</body> 
</html>

    