<?php
session_start();
$filter='default';
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
.tab {
  float: left;
  border: 1px solid #ccc;
  background-color: #b2ff59;
  width: 300px;
  overflow-x: hidden;
  overflow-y: auto;
  height: 450px;
}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: #b2ff59;
  padding: 22px 16px;
  width: 300px;
  border-bottom:  green;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #e7ff8c;
}




/* Create an active/current "tab button" class */
.tab button.active {
  background-color: #ccff90;
}

/* Style the tab content */
.tabcontent {
  float: left;
 overflow-y: auto;
  background-color:#fafafa;
  
  padding: 0px 12px;
  border: 1px solid #ccc;
  width: 1045px;
  border-left: none;
  height: 450px;
}
</style>
</head>
<?php
include 'header.php';
?>
<body>

<?php
require_once 'process.php';
?>
<br>




<?php
if(isset($_SESSION['message'])):?>
<div class= "alert alert-<?=$_SESSION['msg_type']?> alert-dismissible fade in">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
<?php
echo $_SESSION['message'];
unset($_SESSION['message']);
?>
</div>
<?php endif; ?>
<br>
<br>
<center>
<h2><img src="user_profile_icon.PNG"  height=50 width=50></img> Admin Panel</h2>
</center>

<div class="tab">
  <div class="tablinks" > <?php include 'admin_details.php'; ?></div>
  <button class="tablinks"  class="btn default" onclick="openCity(event, 'Manage_users')" id="defaultOpen"> <span class="fas fa-users"></span>   Users</button>
  <button class="tablinks" onclick="openCity(event, 'Manage_sales_deals')"> <span class="fas fa-ad">    Sales and Deals</button> 
  <button class="tablinks" onclick="openCity(event, 'Manage_events')"> <i class="fas fa-calendar"></i>  Events</button>
  <button class="tablinks" onclick="openCity(event, 'Upload_Competition')"> <i class="fas fa-award"></i> Competition</button>
</div>


<div  class="tabcontent">
</div>

<div id="Manage_users" class="tabcontent">
<center>
<h3>Users records</h3>
</center>
<br>
  <?php
  include 'Users_table.php';
  ?>
</div>

<div id="Manage_sales_deals" class="tabcontent">
<center>
<h3>Sales and Deals</h3>
</center>
<br>
<?php
  include 'filter.php';
  ?>
  <br>
  <?php
  include 'products.php';
  ?>
  
</div>

<div id="Manage_events" class="tabcontent">
<center>
<h3>Event records</h3>
</center>
<br>
  <?php
  include 'event_table.php';
  ?>
</div>

<div id="Upload_Competition" class="tabcontent">
<center>
<h3>Upload Vendor Competitions</h3>
</center>
<br>
 
</div>


<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();


</script>

<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
   
</body>
</html> 
