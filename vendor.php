<?php
include("head.php");
include('connection.php');
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<title>Vendor Page</title>
<style>

/*this is for the tab */

* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
.tab {
  float: left;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  width: 10%;
  height: 300px;

}

.BtnB{
    background-color:Red;
    padding:10px;
    border-radius: 10px;
    border:none;
    color:white;
}

.BtnB:hover{
    background-color:#FF7F7F;
 
}


/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
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
  width: 90%;
  border-left: none;
  height: 700px;
}

/*it end here*/

/*this is for the footer*/
footer{
		background-color: #333333;
		text-align: center;
		color: white;
    padding: 30px;
		height: 40px;
	}
a{
  color:white;
}
/*End here*/

/*this is for the notification button */
    .notification {
  background-color: #555;
  color: white;
  text-decoration: none;
  padding: 15px 26px;
  position: relative;
  display: inline-block;
  border-radius: 2px;
}

.notification:hover {
  background: red;
}

.notification .badge {
  position: absolute;
  top: -10px;
  right: -10px;
  padding: 5px 10px;
  border-radius: 50%;
  background-color: red;
  color: white;
}

/*it end here*/
#notify{
    display: none;
}
.kop1{
    color:Blue;
}
</style>
</head>
<script>
    document.getElementById('logoutBtn').style.display = 'block';
</script>
<body>
<br><br><br>


<?php

$vendoID = $_SESSION['loginE'];

$sql = "SELECT * FROM `register` WHERE  IDUQ = '$vendoID'";

$result =mysqli_query($con,$sql);
if($result){
    while($row = mysqli_fetch_array($result)){
        echo  "<center> <h2 class='kop1'> Welcome Back : " . $row['Company'] . " </h2></center>";
    }
}

?>


<p>Click on the buttons inside the tabbed menu:</p>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Post Advert</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Post Event</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">All Product</button>
 <!-- <button class="tablinks" onclick="openCity(event, 'AllEvent')">All Event</button>-->

</div>

<div id="London" class="tabcontent">
            <h3>Post Advert</h3>
            <?php //echo $_SESSION['loginE'];
                $msg ="";

                if(isset($_POST['upload'])){
                    //the path to store the uploaded image
                    $target = "images/".basename($_FILES['image']['name']);
                    include('connection.php');

                    //get all submitted data from the form
                    $image = $_FILES['image']['name'];

                    $text = $_POST['text'];
                $category = $_POST["cat"];
                    $SessionID = $_SESSION['loginE'];

                    $prio = $_POST['pio'];
                    $useDate = $_POST['dateVal'];

                    if(!empty($useDate)){
                        echo  "<script>alert('Yes we have something  $useDate')</script>";
                    }else{
                        die();
                    }
                    $sql = "INSERT INTO `product`(`vID`, `ImgURL`, `DESCRIPTION`, `CAT`, `priority`, `STATUS`,`Date`) 
                    VALUES ('$SessionID','$image','$text','$category', '$prio', 'pending','$useDate')";
                
                    mysqli_query($con,$sql);
                    if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
                        echo  "<script>alert('Image uploaded successfully')</script>";
                        echo  "<script>alert('Please Wait for Admin to Approve your post.... We will be with you soon')</script>";
                    }else{
                    echo  "<script>alert('Image Not uploaded successfully')</script>";
                    }

                }
            ?>
            <center>
            <form method="POST" enctype="multipart/form-data"> 
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        
                            <h2>Post Advert</h2>
                    
                        <form action="" method="post" enctype="multipart/form-data">

                            <div class="form-group">

                                <label>From Today : Choose your End Date</label>
                                <input   id="inDate" name="dateVal" type="date"  class="form-control">  
                            </div> 
                            <br>                       

                            <div class="form-group">
                                <label>Category</label>
                                <select name="cat" class="form-control">
                                <option selected>Select Category</option>
                                <option><---Sales and Deals---></option>
                                <option>Clothes & Shoes</option>
                                <option>Wholesalers</option>
                                <option>Electronic</option>
                                <option>Exclusive</option>
                                <option>Grocers</option>
                                <option>Liquor</option>
                                <option>Sport</option>
                                <option>Baby & Kids</option>
                                <option>Bank</option>
                                <option>Pharmacy</option>
                                <option>House & Home</option>
                                <option>Cars & Spares</option>
                                <option>Garage</option>
                                <option>Books</option>
                                <option>Travel</option>
                                <option><---Ends---></option>
                                <option>Food and Restaurants</option>
                                <option>Fast Foods</option>
                                <option>Dine In</option>
                                <option>etc</option>

                    </select required>

                            </div>
                            <br>
                            <div class="form-group">
                                <label>Allow your post as Priority Aids</label>
                                <select  name="pio" class="form-control">
                                <option selected>Select Priority Aids</option>
                                <option>YES</option>
                                <option>NO</option>
                    </select required>

                            </div>


                            <br>
                        

                            <div class="form-group">
                                <label>Description</label>
                                <input type="text" name="text" class="form-control"  placeholder="Write Something about your post" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="image" class="form-control" required>
                            </div>
                        <br>
                            <input type="submit" class="btn btn-primary" name="upload" value="Upload Post" required>
                        </form>
                    </div>
                </div>        
            
            </form>

            <form method='post' id="notify" >
                <table border="1" style="padding: 20px;"  >
                <tr>
                <th>ID</th><th>vendorID</th><th>Status</th><th>Seen</th><th>Date</th>
                </tr>

                <?php
                $query = "SELECT *FROM `notification` WHERE `vendorID` = ".$_COOKIE['userID']." ";

                $stmt = mysqli_query($con , $query);

                while($row = mysqli_fetch_array($stmt)){
                    echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td><button name='UpdateSeen' value='".$row[0]."'>Update</button></td><td>".$row[4]."</td></tr>";
                }
                ?>

                </table>
            </form>
            <?php
                    $sql = "SELECT * FROM `notification` WHERE `vendorID` = ".$_COOKIE['userID']."";
                    $result =mysqli_query($con,$sql);
                    if($result){
                        $i = 0;
                        while(mysqli_fetch_array($result)){
                            $i++;
                        }
                    }

                    if(isset($_POST['UpdateSeen'])){
                        
                            $sql = "DELETE FROM `notification` WHERE `id` = ".$_POST['UpdateSeen']."";
                            mysqli_query($con,$sql);
                            echo "<script>alert('Seen!'); window.location = window.location;</script>";
                    }
            ?>

            <a href="#" id="btnNotify" class="notification">
            <span id="btnNotify">Inbox</span>
            <span class="badge" ><?php echo $i; ?></span>
            </a>

            <script>
                var btn = document.getElementById('btnNotify');
                btn.onclick = function(){
                    var buttonN = document.getElementById('notify');
                    buttonN.style.display = "block";
                }
            </script>
            </center>

</div>

<div id="Paris" class="tabcontent">
  <h3>Event</h3>
  <div class="container">
    <div class="row">
        <div class="col-md-12">
            
                <h2>Post Event</h2>
           
            <form action="" method="post" enctype="multipart/form-data">

                <div class="form-group">

                    <label>Date</label>
                    <input type="date" name="date" class="form-control">  
                </div> 
                <br>                       

                <div class="form-group">
                    <label>Location</label>
                    <select name="location" class="form-control">
					<option selected>Select Location Below</option>
					<option>KwaZulu-Natal</option>
					<option>Eastern Cape</option>
                    <option>Free State</option>
                    <option>Guateng</option>
                    <option>Western Cape</option>
                    <option>Limpopo</option>
                    <option>Mpumalanga</option>
                    <option>Nothern Cape</option>
                    <option>North West</option>
		</select required>

                </div>
                <br>
              

                <div class="form-group">
                    <label>Description</label>
                    <input type="text" name="description" class="form-control">
                </div>
                <br>
                <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="image" class="form-control">
                </div>
               <br>
                <input type="submit" class="btn btn-primary" name="upload_event" value="UPLOAD_EVENT">
            </form>
        </div>
    </div>        
</div>

    <?php


    if(isset($_POST['upload_event']))
    {    
        $vendoID =  $_SESSION['loginE'];

        $date_event = $_POST['date'];
        $location = $_POST['location'];
        $description = $_POST['description'];
        $image=$_FILES['image']['name'];


        $target = "images/".basename($_FILES['image']['name']);

        $query = "INSERT INTO `events`(`vendorID`, `Date`, `Location`, `Description`, `Image_url`, `status`) VALUES ('$vendoID','$date_event','$location','$description', '$image', 'pending')";
        $results=mysqli_query($con,$query);
        if ($results) {
            move_uploaded_file($_FILES['image']['tmp_name'],$target);
        echo "<script> alert('Event Successfully made inserted successfully..... !')</script>";
        echo "<script> alert('Please Wait for the Admin to Approve your Event ')</script>";

       // echo "<script>window.open('eventDemo.php' , '_self')</script>";
        } 
        else {
            echo "Not inserted";
        }
    
        echo $vendoID;

    }
    ?>
</div>

<div id="Tokyo" class="tabcontent">
    <h3> Product</h3>
    <?php
    $vendoID = $_SESSION['loginE'];

                $query = "SELECT *FROM product WHERE vID ='$vendoID'";
                $result= mysqli_query($con , $query);
                $i = 1;
                $k = 1;
                $idArray2 = array();
                $idArray3 = array();

                echo "<br><br> ";
                echo "<form method='post'>";
                echo "<table border='1' width='70%'>";
                echo " <tr>
                            <td>Auto ID</td>
                            <td><b>ID</b></td>
                            <td><b>VendorID</b></td>
                            <td><b>Image</b></td>
                            <td><b>Description</b></td>
                            <td><b>Category</b></td>
                            <td><b>Priority</b></td>
                            <td><b>Status</b></td>
                ";
                if($result){

                    while($row = mysqli_fetch_array($result)){
                        
                        $idArray2[$i] = $row[1];
                        $idArray3[$k]= $row[0];
                        if($row[6] == 'pending'){
                        
                            //  echo "<table border='1'>";
                            echo "<tr>";
                            echo "<td>".$i."</td><td>". $row[0]. "</td><td>".$row[1]."</td><td><img src='images/".$row[2]."' style='width: 100px; height: 100px;'></td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td>"."<td><b>".$row[6]."</b></td><td><center><button class='BtnB' name='uploadBtn2' value='".$i."'>Delete Advert</button><br></center></td>";
                            echo "</tr>";
                    
                            //  echo "</table>";
                            }
                            else{
                                echo "<tr>";
                                echo "<td>".$i."</td><td>". $row[0]. "</td><td>".$row[1]."</td><td><img src='images/".$row[2]."' style='width: 100px; height: 100px;'></td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6]."</td><td><center><button class='BtnB'  name='uploadBtn2' value='".$i."'>Delete Advert</button><br></center></td></td>";
                                echo "</tr>";
                            }
                    
                            $i++;
                        $k++;
                    }
            
                    foreach( $idArray3  as $digit){
                //    echo "<script>alert('$digit')</script>";
                    }
                }
    
    //here is where am gonnna delete the post
                if(isset($_POST['uploadBtn2'])){
                    $indexID2 = $_POST['uploadBtn2'];
                    $num1 = $idArray2[$indexID2];
                    $num2 = $idArray3[$indexID2];


                //   echo "<script>alert('Successfully Update  $num2 ')</script>";

                    $insert ="DELETE FROM `product` WHERE `ID` = $num2 ";
                    
                    $query = mysqli_query($con , $insert);
                    
                    if ($query){
                        echo "<script>alert('Successfully Delete Product ')</script>";
                    }
    //End here

                    //"DELETE FROM `product` WHERE 0"
                // echo $num;

                /*
                    $insert ="UPDATE `product` SET `STATUS`='OK' WHERE vID = $num1 AND `ID` = $num2 ";
                    
                    $query = mysqli_query($con , $insert);
                    
                    if ($query){
                        echo "<script>alert('Successfully Update  $num2 ')</script>";
                    }
    */
                


                }

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