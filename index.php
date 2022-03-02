<?php

include('head.php');
include('connection.php');
if(isset($_COOKIE['userID'])){
  if($_COOKIE['userID'] != ''){
    echo "<script>document.getElementById('logoutBtn').style.display = 'block';</script>";
  }

}
?>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
   

    <style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;
background-color:#99e599;
}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  font-family: 'Arial';
  color: black;
  font-size: 45px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}


@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

.kop{
  width:500px;
  height:500px;
}
/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
  .kop{
  width:100px;
  height:100px;
}
}

#provinceBtn {
      background-color: #4CAF50; /* Green */
      border: none;
      height: 50px;
      width: 250px;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      transition-duration: 0.4s;
    }

    #provinceBtn:hover {
        box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
    }

    h3{
        color: blue;
        text-align: center;
    }

</style>

<title>MultivendorWeb</title>
<body>


<div class="container py-5">
    <div class="row mt-4">
   
    <center>

            <div class="col-md-4 mt-4">
               <div class="card">
             
            
                    <div class="card-body">
                    <a href="sales and deals.php"><input  type='submit' id="provinceBtn" name="province_select"  value= "Sales and Deals"></a>
                      </div>

                      <div class="card-body">
                      <a href="food and res.php"><input  type='submit' id="provinceBtn" name="province_select"  value= "Food and Restaurants"></a>
                      </div>

                      <div class="card-body">
                      <a href="events.php"> <input  type='submit' id="provinceBtn" name="province_select"  value= "Event"></a>
                      </div>

                      <div class="card-body">
                      <a href="favorite.php"> <input  type='submit' id="provinceBtn" name="province_select"  value= "Favourite"></a>
                      </div>
                      
                      <div class="card-body">
                      <a href="competition.php"> <input  type='submit' id="provinceBtn" name="province_select"  value= "Competion"></a>
                      </div>

                </div>
             </div>
    </center>

    </div>
</div>




<br><br><br>
<center><h1>Priorty Ads this week</h1></center>
<section class="gallery-links">
<?php
  $stmt = "SELECT * FROM product WHERE priority = 'YES' AND STATUS = 'OK'";
  $req = mysqli_query($con,$stmt);
  if($req){
    while($row = mysqli_fetch_array($req)){
      $iduq = $row['vID'];
      $stmt2 = "SELECT  `Company` FROM `register` WHERE `IDUQ` = '$iduq' ";
      $companye_name = mysqli_query($con,$stmt2);
      $row2=mysqli_fetch_array($companye_name);

      echo "<!--div class='mySlides fade'>
           <img class='kop' src='images/".$row[2]."'>
            <div >".$row[3]."</div> 
            </div-->
            <center> <label class='gallery-img'>
            <div class='containerss'>
                <div class='border_3'>
                        <img class='image' src='images/".$row[2]."' title='".$row[3]."'>
                        <label > Its happening at <b>".$row2[0]."</b></label>
                        <div class='middle'>
                            <!--a href='#'><input class='mylink' type='button' value='QUICK VIEW' ></a-->
                             </div>
                          </div>
                    </div>
        </label></center> 
            ";
    }
  }else{
    echo "ERROR requesting Priorty Ads";
  }


?>

</section>
<link rel="stylesheet" href="css/footerStyle.css">
<br><br>

<!--------------------Footer Section------------------------------------------->
<?php
include("footer1.php");
?>
    </body>
</body>
</html>