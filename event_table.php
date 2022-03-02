<?php
include 'connection.php';
$mysqli =new mysqli('localhost','learnexu_pres776','Johnson1976','learnexu_multivendors') or die(mysqli_error($mysqli));
$result=$mysqli->query("SELECT * FROM events") or die($mysqli->error);
?>



<div class="card">
  <div class="card-body">
  <div class="container">
  <table class="table table-hover" style="width:980px;  overflow-y: auto;">
    <thead>
      <tr>
      <th>Vendor ID</th>
        <th>Start Date</th>
         <th>End Date</th>
        <th>Location</th>
        <th>Description</th>
        <th>Event Image</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        <?php
        while ($row=$result->fetch_assoc()):?>
      <tr>
      <td><?php echo $row['vendorID'];?></td>
        <td><?php echo $row['Start Date'];?></td>
        <td><?php echo $row['End Date'];?></td>
        <td><?php echo $row['Location'];?></td>
        <td><?php echo $row['Description'];?></td>
        <td><img src="<?php echo $row['Image_url'];?>"  height=30 width=30></img></td>
        <td>
           <?php echo $row['status'];?>
           <a href="process.php?edit=<?php echo $row['ID'];?>" class="btn btn-info">Change status</a>
          
       </td>
       <td>
            <a href="process.php?delete=<?php echo $row['ID'];?>" class="btn btn-danger">Delete</a>
        </td>
      </tr>
     
    </tbody>
    <?php endwhile; ?>
  </table>
</div>
  </div>
</div>


<?php
function pre_r ($array)
{
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}
?>