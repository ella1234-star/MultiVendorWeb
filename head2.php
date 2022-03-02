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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
          <div class="logo"><a href="index.php"><img src="image/logo/logoicomb1_4_10.png"></a></div>
          <div class="nav-links">
            <div class="sidebar-logo">
              <span class="logo-name"><a href="index.php"><img src="image/logo/logoicomb1_4_10.png"></a></span>
              <i class='bx bx-x'></i>
            </div>
            <ul class="links">
       
              <li>
                <a href="sales and deals.php">Sales and Deals</a>
                
              </li>
              <li><a href="food and res.php">Foods and Restaurants</a></li>

              <li>
                <a href="CEventView.php">Events Province</a>
               
              </li>
              <li><a href="favorite.php">Favorite</a></li>
              <li><a href="e.php">Event View</a></li>

           
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
          <button id='logoutBtn' name='logoutBtn'>Logout</button>
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
