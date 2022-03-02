<?php
include("head.php");

?>
<html>
    <head>
        <title>My Account</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="css/footerStyle.css">
    </head>
    <style>
.wrapper {
    height: 50vh;
    background: #000;
    background: url("https://i.imgur.com/g63vXfd.jpg");
    background-size: cover;
    width: 100%
}

button{
width: 50%;
height:70px;
border-radius: 50px;
background-color: #4ee44e;
cursor: pointer;
}

button:hover{
    background-color: #84fa84;
}

</style>



<body>

<br><br><br>


<div class="wrapper">
<br><br><br><br>
<center><h1>My Account</h1></center>
<div>
<br><br>
<br><br><br><br>
<br><br><br>
<center>
<form method="post">
<button name="check">Visit Dashboard</button>
</form>
</center>
<?php
if(isset($_POST['check'])){
    if($_SESSION['type']=="Client"){
        echo "<script> window.open('index.php' , '_self')</script>";
    }elseif($_SESSION['type']=="Admin"){
        echo "<script> window.open('Admin.php' , '_self')</script>";
    }elseif($_SESSION['type']=="Vendor"){
        echo "<script> window.open('vendor.php' , '_self')</script>";
    }
    elseif($_SESSION['type']==""){
        echo "<script> window.open('index.php' , '_self')</script>";
    }


}


?>


<br><br><br>
<?php

include("footer1.php")
?>
</body>
</html>