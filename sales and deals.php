<?php

include('head.php');
include('connection.php');
echo "<br><br><br>";
$likeID = $_SESSION['loginE'];
setcookie("userID", $likeID, 0, '/');



?>

<?php
if(!isset($_COOKIE['photoID'])){}
elseif (isset($_SESSION['loginE'])) {
   // if (!($_COOKIE['userID'] == '0' || $_COOKIE['photoID'] == '0')) {

        $stmt = "SELECT `Type` FROM `register` WHERE `IDUQ` = " . $_SESSION['loginE'] . "";
        $q = mysqli_fetch_array(mysqli_query($con, $stmt));
        // echo "<script>alert('$q[0]');</script>";
        if ($q[0] == "Client") {
            $sql = "SELECT  `photoID`, `userID` FROM `favourites` WHERE `userID` =" .$_SESSION['loginE'] . " AND `photoID` = " . $_COOKIE['photoID'] . "";
            $row =  mysqli_fetch_array(mysqli_query($con, $sql));
            $int = 0;
            //if($row){
            if (!($_COOKIE['photoID']  == $row[0] && $_SESSION['loginE'] == $row[1])) {
                $stmt = "INSERT INTO `favourites`(`photoID`, `userID`) VALUES (" . $_COOKIE['photoID'] . "," . $_SESSION['loginE'] . ")";
                if (mysqli_query($con, $stmt)) {
                    echo "<script>alert('Successfully liked...');</script>";
                }
            } else {
                //echo "<script>alert('Not liked...');</script>";
            }
            // }



        }
   // }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="javascript/jquery.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="css/footerStyle.css">
    <title>Sale and Deals</title>

    <style>
        body {
            background-image: url('image/backgroud/bac.jpg');
        }

        button {
            background-color: black;
            color: white;
            font-size: 16px;
            padding: 20px;
            border-radius: 25px;
            cursor: pointer;
        }


        button:hover {
            background-color: orange;
        }

    </style>
<style>
body {font-family: Arial, Helvetica, sans-serif;}

#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}
.kop1{
    width: 700px;
    height:700px;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
</style>
</head>

<body>
  

    <form method="post" id="formD">
        <!--Flexbox content Starting point-->

        <!--<button name="Sales" value="cloth and shoe">Check</button>-->


        <section class="gallery-links">

            <label class="gallery-img">
                <div class="border_3">
                    <div class="containerss">
                        <img class="image" src="image/sales and deals/cloth and shoe (2).jpg" title="click the image below to discuss how u felt" id="hairstyle1" onclick="hair1()">
                        <!--label class="Text1"> Clothes and Shoes </label-->
                        <div class="middle">
                            <input class="mylink" type="submit" value="Clothes & Shoes" name="Sales">
                            <!--button  class="mylink" name="Sales" value="cloth and shoe">Check</button-->

                        </div>
                    </div>
                </div>
            </label>

            <label class="gallery-img">
                <div class="containerss">
                    <div class="border_3">
                        <img class="image" src="image/sales and deals/wholesaler.png" title="click the image below to discuss how u felt" id="hairstyle1" onclick="hair1()">
                        <label class="Text1"> </label>
                        <div class="middle">
                            <input class="mylink" type="submit" value="Wholesalers" name="Sales">
                        </div>
                    </div>
                </div>
            </label>


            <label class="gallery-img">
                <div class="containerss">
                    <div class="border_3">
                        <img class="image" src="image/sales and deals/house and home.jpg" title="click the image below to discuss how u felt">
                        <div class="middle">
                            <input class="mylink" name="Sales" type="submit" value="House & Home">
                        </div>
                    </div>
                </div>
            </label>



            <label class="gallery-img">
                <div class="containerss">
                    <div class="border_3">
                        <img class="image" src="image/sales and deals/electronic.jpg" title="click the image below to discuss how u felt">
                        <!--label class="Text1"> Electronic </label-->
                        <div class="middle">
                            <a href="#"><input class="mylink" name="Sales" type="submit" value="Electronic"></a>
                        </div>
                    </div>
                </div>
            </label>

            <label class="gallery-img">
                <div class="containerss">
                    <div class="border_3">
                        <img class="image" src="image/sales and deals/exclusive.jpg" title="click the image below to discuss how u felt">
                        <!--label class="Text1">Exclusive </label-->
                        <div class="middle">
                            <a href="#"><input class="mylink" name="Sales" type="submit" value="Exclusive"></a>
                        </div>
                    </div>
                </div>
            </label>


            <label class="gallery-img">
                <div class="containerss">
                    <div class="border_3">
                        <img class="image" src="image/sales and deals/grocer.jpg" title="click the image below to discuss how u felt">
                        <!--label class="Text1">Grocers </label-->
                        <div class="middle">
                            <a href="#"><input class="mylink" name="Sales" type="submit" value="Grocers"></a>
                        </div>
                    </div>
                </div>
            </label>

            <label class="gallery-img">
                <div class="containerss">
                    <div class="border_3">
                        <img class="image" src="image/sales and deals/liquor.jpg" title="click the image below to discuss how u felt">
                        <!--label class="Text1">liquor </label-->
                        <div class="middle">
                            <a href="#"><input class="mylink" name="Sales" type="submit" value="liquor"></a>
                        </div>
                    </div>
                </div>
            </label>


            <label class="gallery-img">
                <div class="containerss">
                    <div class="border_3">
                        <img class="image" src="image/sales and deals/sport.jpg" title="click the image below to discuss how u felt">
                        <!--label class="Text1">Sport </label-->
                        <div class="middle">
                            <a href="#"><input class="mylink" name="Sales" type="submit" value="Sport"></a>
                        </div>
                    </div>
                </div>
            </label>

            <label class="gallery-img">
                <div class="containerss">
                    <div class="border_3">
                        <img class="image" src="image/sales and deals/baby.jpg" title="click the image below to discuss how u felt">
                        <!--label class="Text1">Baby & Kids </label-->
                        <div class="middle">
                            <a href="#"><input class="mylink" name="Sales" type="submit" value="Baby & Kids"></a>
                        </div>
                    </div>
                </div>
            </label>


            <label class="gallery-img">
                <div class="containerss">
                    <div class="border_3">
                        <img class="image" src="image/sales and deals/bank.jpg" title="click the image below to discuss how u felt">
                        <!--label class="Text1">Bank </label-->
                        <div class="middle">
                            <a href="#"><input class="mylink" name="Sales" type="submit" value="Bank"></a>
                        </div>
                    </div>
                </div>
            </label>

            <label class="gallery-img">
                <div class="containerss">
                    <div class="border_3">
                        <img class="image" src="image/sales and deals/pharmacy.jpg" title="click the image below to discuss how u felt">
                        <!--label class="Text1">Pharmacy </label-->
                        <div class="middle">
                            <a href="#"><input class="mylink" name="Sales" type="submit" value="Pharmacy"></a>
                        </div>
                    </div>
                </div>
            </label>

            <label class="gallery-img">
                <div class="containerss">
                    <div class="border_3">
                        <img class="image" src="image/sales and deals/garage.jpg" title="click the image below to discuss how u felt">
                        <!--label class="Text1">Garage </label-->
                        <div class="middle">
                            <a href="#"><input class="mylink" name="Sales" type="submit" value="Garage"></a>
                        </div>
                    </div>
                </div>
            </label>

            <label class="gallery-img">
                <div class="containerss">
                    <div class="border_3">
                        <img class="image" src="image/sales and deals/book.jpg" title="click the image below to discuss how u felt">
                        <!--label class="Text1">Books </label-->
                        <div class="middle">
                            <a href="#"><input class="mylink" name="Sales" type="submit" value="Books"></a>
                        </div>
                    </div>
                </div>
            </label>

            <label class="gallery-img">
                <div class="containerss">
                    <div class="border_3">
                        <img class="image" src="image/sales and deals/travel.jpg" title="click the image below to discuss how u felt">
                        <!--label class="Text1">Travel </label-->
                        <div class="middle">
                            <a href="#"><input class="mylink" name="Sales" type="submit" value="Travel"></a>
                        </div>
                    </div>
                </div>
            </label>

            <label class="gallery-img">
                <div class="containerss">
                    <div class="border_3">
                        <center><img class="image" src="image/sales and deals/cars ans spares.jpg" title="click the image below to discuss how u felt"></center>
                        <!--label class="Text1">Cars and Spares </label-->
                        <div class="middle">
                            <a href="#"><input class="mylink" name="Sales" type="submit" value="Cars & Spares"></a>
                        </div>
                    </div>
                </div>
            </label>
        </section>


    </form>
</body>
<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById("myImg");
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    img.onclick = function() {
        alert("Clicked");
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }
</script>

<script>
    function getCookie(cookieName) {
        let cookie = {};
        document.cookie.split(';').forEach(function(el) {
            let [key, value] = el.split('=');
            cookie[key.trim()] = value;
        })
        return cookie[cookieName];
    }

    function myFun() {

        createCookie("titlename", $('#braK').text(), "0");
        //createCookie("Cname", $('#braK').text(), "0");

    }

    function createCookie(name, value, day) {
        var expires;
        if (day) {
            var date = new Date();
            date.setTime(date.getTime() + (day * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toLocaleString();
        } else {
            expires = "";
        }
        document.cookie = escape(name) + "=" + escape(value) + expires + "; path=/";
    }

    function readCookie() {
        var allcookies = document.cookie;
        //alert ("All Cookies: " + allcookies);
        var cookiearry = allcookies.split(';');
        // for (var i =0; i<cookiearry.length;i++ ){
        var name = cookiearry[3].split('=')[0];
        var value = cookiearry[3].split('=')[1];
        alert("Key is : " + name + " and Value is : " + value);
        // }
    }
</script>
<?php
global $brakop;
global $companyName;

// Method to display vendors page once clicked
if (isset($_POST['Sales'])) {

    $brakop = $_POST['Sales'];
    echo "<script>
                    document.getElementById('formD').style.display = 'none';
                    </script>";

    $stmt = "SELECT DISTINCT `vID` FROM `product` WHERE `CAT` = '$brakop'";
    $res = mysqli_query($con, $stmt);
    $VendorArray = array();
    $counter = 1;
    if ($res) {
        while ($row = mysqli_fetch_array($res)) {
            $VendorArray[$counter] = $row[0];
            $counter++;
        }
    }
    echo "<center><form method='post'><h1 id='braK' name='headie' value='$brakop'>$brakop</h1><br>";

    foreach ($VendorArray as $num) {
        $stmt = "SELECT `Company` FROM `register` WHERE `IDUQ` = '$num'";
        $res = mysqli_query($con, $stmt);
        if ($res) {
            while ($row = mysqli_fetch_array($res)) {
                echo "<button value=" . $num . " name='btnShop' onclick='myFun();' >" . $row['Company'] . "</button>";
            }
        }
    }
    echo "</form></center>";
}

if (isset($_POST['btnShop'])) {
    $btnSS = $_POST['btnShop'];
    echo "<script> document.getElementById('formD').style.display = 'none'; </script>";
    $cookieV = $_COOKIE['titlename'];
    // $_SESSION['title'] = "<script>$('#braK').text();</script>";
    $query = "SELECT  `Company` FROM `register` WHERE `IDUQ` = '$btnSS' ";
    $resultQ = mysqli_fetch_array(mysqli_query($con, $query));
    $nyme = $resultQ[0];
    echo "<center><p style='color: white;'><b>$cookieV</b> <u>Ads from </u> <<<<>>>> $nyme  </p><br><br>
                        <script>var a = document.getElementById('braK');
                        </script>";

    $stmt = "SELECT `ID`, `ImgURL`, `DESCRIPTION`,`priority`, `STATUS`,`Date` FROM `product` WHERE `vID` = '$btnSS' AND `CAT` = '$cookieV'";
    $result = mysqli_query($con, $stmt);

    if ($result) {
        echo "<script>
                    function ay(id){
                        var btn = id;
                        createCookie('photoID',btn,'0');
                        var uID = getCookie('userID');
                        //alert('Liked');
                       window.open('sales and deals.php', '_self');
                    }
            </script>";




           
            

            
           echo "<section class='gallery-links'>";
        while ($row = mysqli_fetch_array($result)) {
            if($row[4] != 'pending'){
             
                echo "<!--div class='mySlides fade'>
                <img class='kop1' src='images/" . $row[1] . "' id='myImg'>
                </div-->
                      <center> <label class='gallery-img'>
                      <div class='containerss'>
                          <div class='border_3'>
                          <img class='kop1' src='images/" . $row[1] . "' id='myImg'>
                          <h1 style='color: lime'>" . $row[2] . "</h1>
                                  <div class='middle'>
                                  <button class='mylink' id='myBtn' name='BtnID' value='" . $row[0] . "' onclick='ay(" . $row[0] . ");' class='button button2'>Like🌼</button>
                                  </div>
                                    </div>
                              </div>
                              <p style='color: black;' onmouseout='countDown(".$row[5].",".$row[0].")'  id='demo".$row[0]."' ><b>".$row[5]."</b></p><br>

                  </label></center> 
                      ";
             
                   echo "</section>";  
             

            }     
        }
        
     
        echo "</center>";
    } else {
        echo " <script> alert('Not working');</script>";
    }

}



if (isset($_POST['submit'])) {

    $psw = $_POST['password'];
    $em = $_POST['email'];
    echo "<script>alert('" . $likeID . " " . $psw . "  " . $em . "');</script>";
}

if (isset($_SESSION['loginE'])) {

    if ($_SESSION['loginE'] == "") {
        echo "<script>//alert('" . $_SESSION['loginE'] . "'); 
            readCookie();</script>";
    } else {
        echo "<script>//alert('Logged in!');
            document.getElementById('logoutBtn').style.display = 'block';
            </script>";
    }
}

/*if(isset($_POST['BtnID'])){
        echo "<script>alert('heyyyy :  ".$_COOKIE['userID']."');</script>";
    }*/
?>

<script>
/*
$("#demo").click(function(d){
alert('Hello');
});

$('#demo').trigger('click');
*/

function countDown(d,i){
// $("#inDate").mouseleave(function(){
  
       // });
       //alert(d + "<<>>"+ i); 

        var countDownDate = new Date(d+" 00:00:00").getTime();
        
        // Update the count down every 1 second
        var x = setInterval(function() {
        
          // Get today's date and time
          var now = new Date().getTime();
            
          // Find the distance between now and the count down date
          var distance = countDownDate - now;
            
          // Time calculations for days, hours, minutes and seconds
          var days = Math.floor(distance / (1000 * 60 * 60 * 24));
          var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
          var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            
          // Output the result in an element with id="demo"
          document.getElementById("demo"+i).innerHTML = "Will expire in  <br>"+ days + "d " + hours + "h "
          + minutes + "m " + seconds + "s ";
            
          // If the count down is over, write some text 
          if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo"+i).innerHTML = "EXPIRED";
          }
        }, 1000);
}

</script>
<script>
    $(function() {
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];



        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }


    });
</script>

<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>
<br><br><br><br>


<?php
include("footer1.php");

?>