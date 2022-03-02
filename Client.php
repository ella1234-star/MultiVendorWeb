<?php
include('header.php');
session_start();
?>

<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Client Page</title>
</head>
<br><br><br>
<center><h1>Client Page</h1></center>
<?php echo $_SESSION['loginE'];?>
</body>