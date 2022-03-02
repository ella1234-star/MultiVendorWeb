<?php
session_start();
$mysqli =new mysqli('localhost','learnexu_pres776','Johnson1976','learnexu_multivendors') or die(mysqli_error($mysqli));

//Delete record for event table
if (isset($_GET['delete'])){
    $ID=$_GET['delete'];
   
    $mysqli->query("DELETE FROM events WHERE ID=$ID") or die($mysqli->error());

    $_SESSION['message']="Record has been deleted!";
    $_SESSION['msg_type']="success";
  

    header("location: admin_dashboard.php");
  
}

//Delete record for register table
if (isset($_GET['delete2'])){
    $ID=$_GET['delete2'];
    $vID=$_GET['deleteOthers'];

    $mysqli->query("DELETE FROM register WHERE ID=$ID") or die($mysqli->error());
    $mysqli->query("DELETE FROM product WHERE vID=$vID") or die($mysqli->error());

    $_SESSION['message']="Record has been deleted!";
    $_SESSION['msg_type']="Danger";

    header("location: admin_dashboard.php");
  
}

//Delete record for product table


if (isset($_GET['delete3'])){
    $ID=$_GET['delete3'];
    $mysqli->query("DELETE FROM product  WHERE ID=$ID") or die($mysqli->error());

    $_SESSION['message']="Record has been deleted!";
    $_SESSION['msg_type']="Danger";

    header("location: admin_dashboard.php");
  
}


// Update status for event table
if(isset($_GET['edit'])){

    $ID=$_GET['edit'];
    $result= $mysqli->query( "SELECT * FROM events WHERE ID=$ID") or die($mysqli->error());
    if (count($result)==1){
    $row=$result->fetch_array();
    $status=$row['status'];
    }
if( $status=='approve')
{
 $mysqli->query("UPDATE events SET status='pending' WHERE ID=$ID") or die($mysqli->error());

}
else 
{
    $mysqli->query("UPDATE events SET status='approve' WHERE ID=$ID") or die($mysqli->error());
  
}




    $_SESSION['message']="Record status has changed!";
    $_SESSION['msg_type']="success";

    header("location: admin_dashboard.php");
}


// Update status for register table
if(isset($_GET['edit2'])){

    $ID=$_GET['edit2'];
    $result= $mysqli->query( "SELECT * FROM register WHERE ID=$ID") or die($mysqli->error());
    if (count($result)==1){
    $row=$result->fetch_array();
    $status=$row['STATUS'];
    }
if( $status=='approve')
{
 $mysqli->query("UPDATE register SET status='pending' WHERE ID=$ID") or die($mysqli->error());

}
else 
{
    $mysqli->query("UPDATE register SET status='approve' WHERE ID=$ID") or die($mysqli->error());
  
}




    $_SESSION['message']="Record status has changed!";
    $_SESSION['msg_type']="success";

    header("location: admin_dashboard.php");
}


// Update status for product table
if(isset($_GET['edit3'])){

    $ID=$_GET['edit3'];
    $result= $mysqli->query( "SELECT * FROM product WHERE ID=$ID") or die($mysqli->error());
    if (count($result)==1){
    $row=$result->fetch_array();
    $status=$row['STATUS'];
    }
if( $status=='approve')
{
 $mysqli->query("UPDATE product SET status='pending' WHERE ID=$ID") or die($mysqli->error());

}
else 
{
    $mysqli->query("UPDATE product SET status='approve' WHERE ID=$ID") or die($mysqli->error());
  
}




    $_SESSION['message']="Record status has changed!";
    $_SESSION['msg_type']="success";
    header("location: admin_dashboard.php");
}

    

?>
