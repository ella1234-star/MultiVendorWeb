<?php
include 'connection.php';
$mysqli =new mysqli('localhost','learnexu_pres776','Johnson1976','learnexu_multivendors') or die(mysqli_error($mysqli));
$result=$mysqli->query("SELECT * FROM register WHERE Type='Vendor'") or die($mysqli->error);
?>



<div class="card">
  <div class="card-body">
  <div class="container">
  <table class="table table-hover" style="width:980px; overflow-y: auto;">
    <thead>
      <tr>
        <th>Vendor ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Password</th>
        <th>Company</th>
        <th>Status</th>
        <th>Action</th>

      </tr>
    </thead>
    <tbody>
        <?php
        while ($row=$result->fetch_assoc()):?>
      <tr>
        <td><?php echo $row['IDUQ'];?></td>
        <td><?php echo $row['FirstName'];?></td>
        <td><?php echo $row['Email'];?></td>
        <td><?php echo $row['PhoneNum'];?></td>
        <td><?php echo $row['Password'];?></td>
        <td><?php echo $row['Company'];?></td>
        <td>
        <?php echo $row['STATUS'];?>
        <a href="process.php?edit2=<?php echo $row['ID'];?>" class="btn btn-info">Change status</a>

        </td>
      
        
       <td>
            <a href="process.php?delete2=<?php echo $row['ID'];?>&deleteOthers=<?php echo $row['IDUQ'];?>" class="btn btn-danger">Delete</a>
        </td>
      </tr>
     
    </tbody>
    <?php endwhile; ?>
  </table>
</div>
  </div>
</div>


<?php
function pre_rr ($array)
{
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}
?>