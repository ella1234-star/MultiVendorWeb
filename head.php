<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/product style.css">
    <link rel="stylesheet" href="css/footerStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="javascript/jquery.js"></script>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>


<style>
  #logoutBtn{
    display: none;
  }
</style>

</head>

<body>
<nav>
        <div class="navbar">
          <i class='bx bx-menu'></i>
          <div class="logo"><a href="index.php"><img src="image/logo/LogocombFX1_30_3_28.png"><img src="image/logo/logotx_1_30.png"></a></div>
          <div class="nav-links">
            <div class="sidebar-logo">
              <span class="logo-name"><a href="index.php"><img src="image/logo/LogocombFX1_30_3_28.png"></a></span>
              <i class='bx bx-x'></i>
            </div>
            <ul class="links">
       
              <li>
                <a href="index.php">Home</a>
              </li>
              <li>
                <a href="aboutus.php">About us</a>
              </li>
              <li><a href="contact.php">Contact Us</a></li>
              <li><a href="Myaccout.php">My accout</a></li>

          
                
                <?php 
              /*
                if($_SESSION['type']=="Client"){
                    echo "<a href='index.php'>".$_SESSION['type']."</a>";
                }elseif($_SESSION['type']=="Admin"){
                  echo "<a href='Admin.php'>".$_SESSION['type']."</a>";
                }elseif($_SESSION['type']=="Vendor"){
                  echo "<a href='vendor.php'>".$_SESSION['type']."</a>";
                }
*/
              ?>
              
       

           
              <li><a href="login.php">Login</a></li>
              <li><a href="Signup.php">Signup</a></li>
            
            </ul>
          </div>
          <div class="search-box">
            <i class='bx bx-search'></i>
            <div class="input-box">
              <input type="text" placeholder="Search...">
            </div>
          </div>
        
        <form method="post">  
          <!--<button id='logoutBtn' name='logoutBtn'>Logout</button>-->
        </form>
        </div>
      </nav>

      <script src="javascript/script1.js">
          
    </script>

    <?php 

        if(isset($_POST['logoutBtn'])){

         
          session_destroy();
          setcookie("userID", '0',0,'/');
          setcookie("photoID", '0',0,'/');
          $_SESSION['loginE'] = '';
          echo "<script>  alert('Logged out!'); window.open('index.php' , '_self');</script>";
        }
    
    ?>
