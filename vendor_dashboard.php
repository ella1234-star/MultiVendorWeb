<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
.tab {
  float: left;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  width: 300px;
  height: 600px;
}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 300px;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  float: left;
  padding: 0px 12px;
  border: 1px solid #ccc;
  width: 1000px;
  border-left: none;
  height: 600px;
}
</style>
</head>
<?php
include 'header.php';
?>
<body>


<br>
<br>
<br>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Manage_users')" id="defaultOpen">Users</button>
  <button class="tablinks" onclick="openCity(event, 'Manage_sales_deals')">Sales and Deals</button>
  <button class="tablinks" onclick="openCity(event, 'Manage_events')">Events</button>
</div>

<div id="Manage_users" class="tabcontent">
  <h3>Users</h3>
  <p>London is the capital city of England.</p>
</div>

<div id="Manage_sales_deals" class="tabcontent">
  <h3>Paris</h3>
  <?php
  include 'event_table.php';
  ?>
</div>

<div id="Manage_events" class="tabcontent">
  <h3>Event records</h3>
  <?php
  include 'event_table.php';
  ?>
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
   
</body>
</html> 
