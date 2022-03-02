<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Competion Page</title>
</head>
<?php
include('head.php');
?>
<br>
<br>
<br>
<br>
<br>
<br>
<body>
<center><h1>Competion Page</h1></center>
<div class="container py-5">
    <div class="row mt-4">

<?php
    require 'connection.php';


    $query="SELECT * FROM `competion` ";
    $query_run=mysqli_query($con,$query);
    $check_users= mysqli_num_rows($query_run)>0;

  
    if ($check_users)
    {
        while($row=mysqli_fetch_array($query_run))
        {
    
            ?>
            <div class="col-md-3 mt-3">
            <div class="card">
            <img src="images/<?php echo $row['Image_url'];?> "  width="390px" height="300px" alt="Faculty">
            <div class="card-body">
             <p class= "card-text">
             <?php  echo $row['Description']; ?>
             <?php  echo "<b>Date At</b>  :". $row['Date'] . "At "."<b>".$row['Company Name']. "</b>" ?>

            </p>
    </div>
    </div>
    </div>
            <?php
        }
    }
    else
    {
        echo "No  users found";
    }

  

?>
</div>
</div>
</body>
</html>