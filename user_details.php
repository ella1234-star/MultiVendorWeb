<?php
include 'connection.php';
$mysqli =new mysqli('localhost','learnexu_pres776','Johnson1976','learnexu_multivendors') or die(mysqli_error($mysqli));
$resultVendors=$mysqli->query("SELECT  * FROM register WHERE Type='Vendor' AND IDUQ='1234567'") or die($mysqli->error);

?>

<div class="card border-success mb-3" style="width: 300px; height 40px;">

<?php while($row1=mysqli_fetch_array($resultVendors)):;?>
<div class="card-header"> Welcome Back!  <?php echo $row1[2] ?></div>
  <div class="card-body">
    <h5 class="card-title"> Company: <?php echo $row1[6] ?></h5>
    <p class="card-text"><?php echo $row1[3] ?></p>
  </div>
        <?php endwhile; ?>
</div>