<?php
include 'connection.php';
$mysqli =new mysqli('localhost','learnexu_pres776','Johnson1976','learnexu_multivendors') or die(mysqli_error($mysqli));
$resultVendors=$mysqli->query("SELECT  * FROM register WHERE Type='Admin' AND IDUQ='4774849'") or die($mysqli->error);

?>

<div class="card border-success mb-3" style="width: 300px; height 70px;">

<?php while($row1=mysqli_fetch_array($resultVendors)):;?>
<div class="card-header"> Welcome Back!  <?php echo $row1['FirstName'] ?></div>
  <div class="card-body">
    <h5 class="card-title"> Company: <?php echo $row1['Company'] ?></h5>
    <p class="card-text"><?php echo $row1['Email'] ?></p>
  </div>
        <?php endwhile; ?>
</div>