
<div class="card">
  <div class="card-body">
  <div class="container">
  <table class="table table-hover" style="width:980px;  overflow-y: auto;">
    <thead>
      <tr>
      <th>Company</th>
        <th>Image</th>
        <th>Description</th>
        <th>Category</th>
        <th>Priority</th>
        <th>Status</th>
        <th>Date</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        <?php
        while ($row=$result->fetch_assoc()):?>
      <tr>
      <td>
           <?php echo $row['Company'];?>  
       </td>
        <td><img src="<?php echo $row['ImgURL'];?>"  height=30 width=30></img></td>
        <td><?php echo $row['DESCRIPTION'];?></td>
        <td><?php echo $row['CAT'];?></td>
        <td><?php echo $row['priority'];?></td>
        <td><?php echo $row['Date'];?></td>
        
    
        <td>
           <?php echo $row['STATUS'];?>
           <a href="process.php?edit3=<?php echo $row['ID'];?>" class="btn btn-info">Change status</a>
          
       </td>
       
       <td>
            <a href="process.php?delete3=<?php echo $row['ID'];?>" class="btn btn-danger">Delete</a>
        </td>
      </tr>
     
    </tbody>
    <?php endwhile; ?>
  </table>
</div>
  </div>
 
</div>


<?php
function pre_rrr ($array)
{
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}
?>