<?php
$_SESSION['selectedProvince']='NotSelected'
?>
<!DOCTYPE html>
<html lang="en">
<?php global $provinceSelected; ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

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

    h3{
        color: blue;
        text-align: center;
    }

    </style>
</head>
<?php
?>
<br>
<br>
<br>
<br>
<br>
<br>
<body>
<h3> Select a province to view events</h3>
<div class="container py-5">
    <div class="row mt-4">

<?php
  $province = array("KwaZulu-Natal", "Eastern Cape", "Free State","Guateng","Western Cape","Limpopo","Mpumalanga","Nothern Cape","North West");

  foreach ($province as $value)
        {
           
            ?>
             <form method="post">
            <div class="col-md-4 mt-4">
            <div class="card">
            <div class="card-body">
            <input  type='submit' id="provinceBtn" name="province_select"  value= "<?php echo $value ?>">
               </div>
    </div>
    </div>
            <?php
        }
     
?>
</div>
</div>
 
<?php
if (isset($_POST['province_select'])  ) {
  echo $_POST["province_select"];
  $_SESSION['selectedProvince']= $_POST["province_select"];
 echo "<script> window.open('event_view.php' , '_self');</script>";
} 


?>
    
</body>
</html>