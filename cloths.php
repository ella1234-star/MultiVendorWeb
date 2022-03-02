<?php
include('head.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Clothe</title>

<style>
body{
    background-image: url('image/backgroud/back.jpg');
}

</style>

</head>
<body>

<br><br><br>
<center><h1>Clothe</h1></center>


<br><br>

<?php
session_start();
echo $_SESSION['just1'];

?>

</body>