<?php
include('head.php');
include('connection.php');
?>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">

        <title>food and restaurant</title>
        <style>
        

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


    .provinceBtn {
      background-color: #4CAF50; /* Green */
      border: none;
      height: 50px;
      width: 250px;
      color: white;
      padding: 15px 32px;
      border-radius: 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      transition-duration: 0.4s;
    }

    .provinceBtn:hover {
        box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
    }
    #formF{
        align-items:center;
        text-align: center;
        margin-left: 500px;
    }
        </style>
        
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
    </head>


    


    <br><br><br>

        <form method="POST" id="formF">
        <div class="container py-5">
    <div class="row mt-4">
            <div class="col-md-4 mt-4">
               <div class="card">
          
                    <div class="card-body">
                  <input type="submit" value="Fast Foods" id="provinceBtn" name="Food">
                      </div>
                   
                      <div class="card-body">
                      <input type="submit" value="Dine in" id="provinceBtn" name="Food">
                      </div>

                  
                </div>
             </div>
    </div>
</div>
        </form>
    <?php
    if (isset($_POST['Food'])) {

        $brakop = $_POST['Food'];
        echo "<script>document.getElementById('formF').style.display = 'none';</script>";

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
                    echo "<button class='provinceBtn' value=" . $num . " name='btnShop' onclick='myFun();' >" . $row['Company'] . "</button>";
                }
            }
        }
        echo "</form></center>";
    }

    if (isset($_POST['btnShop'])) {
        $btnSS = $_POST['btnShop'];
        echo "<script> document.getElementById('formF').style.display = 'none'; </script>";
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
                                alert('Liked');
                               
                            }
                    </script>";

            while ($row = mysqli_fetch_array($result)) {
                if ($row[4] != 'pending') {

                    echo "<div>
                                    <img src='images/" . $row[1] . "' id='myImg' style='width: 600px; height: 300px;'>
                                    <p style='color: black;' onmouseout='countDown(" . $row[5] . "," . $row[0] . ")'  id='demo" . $row[0] . "' ><b>" . $row[5] . "</b></p><br>
                        
                                    <button   id='myBtn' name='BtnID' value='" . $row[0] . "' onclick='ay(" . $row[0] . ");' class='provinceBtn'>Like🌼</button>
                                    <h1 style='color: lime'>" . $row[2] . "</h1>
                        </div>";
                }
            }

      
            echo "</center>";
        } else {
            echo " <script> alert('Not working');</script>";
        }
        //echo " <script> alert('Not working');</script>";
        // session_destroy();
    }

    ?>
    <script>
        /*
$("#demo").click(function(d){
alert('Hello');
});

$('#demo').trigger('click');
*/

        function countDown(d, i) {
            // $("#inDate").mouseleave(function(){

            // });
            //alert(d + "<<>>"+ i); 

            var countDownDate = new Date(d + " 00:00:00").getTime();

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
                document.getElementById("demo" + i).innerHTML = "Will expire in  <br>" + days + "d " + hours + "h " +
                    minutes + "m " + seconds + "s ";

                // If the count down is over, write some text 
                if (distance < 0) {
                    clearInterval(x);
                    document.getElementById("demo" + i).innerHTML = "EXPIRED";
                }
            }, 1000);
        }
    </script>
</body>