<?php
include 'connection.php';
$mysqli =new mysqli('localhost','learnexu_pres776','Johnson1976','learnexu_multivendors') or die(mysqli_error($mysqli));
$resultVendors=$mysqli->query("SELECT  DISTINCT Company FROM register Where Type='Vendor'") or die($mysqli->error);


?>
<style>
#submit {
  background-color: #4CAF50; /* Green */
  border: none;
  height: 40px;
  width: 150px;
  border-radius: 8px;
  padding: 15px 32px;
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  transition-duration: 0.4s;
}
</style>
<form action="admin_dashboard.php" method="post"  id="filterForm" >  
      <select name="filter" style="width: 200px; height: 30px;">  
      <option value = "" selected> Show All </option>  
      <?php while($row1=mysqli_fetch_array($resultVendors)):;?>
        <option  value ="<?php echo $row1[0];?>" <?php if(isset($_POST['filter']) && $_POST['filter']== $row1[0]) echo "selected='selected'"; ?>> <?php echo $row1[0];?></option>  
        <?php endwhile; ?>
      </select>  
      <input type = "submit" name = "submit" id="submit" value = "Filter company" class='submit'>  

     
</form>  

<?php
$filter='default';
 $result=$mysqli->query("SELECT p.ID,p.vID, p.ImgURL, p.DESCRIPTION, p.CAT, p.priority, p.STATUS, r.Company FROM product p INNER JOIN register r ON r.IDUQ = p.vID; ") or die($mysqli->error); 
 if(isset($_POST['submit'])){
    if(!empty($_POST['filter']) ) {  
        $filter=$_POST['filter']; 
        if ( $filter!='default')
        {
        $selected =  $filter; 
        $result=$mysqli->query("SELECT p.ID, p.vID, p.ImgURL, p.DESCRIPTION, p.CAT, p.priority, p.STATUS, r.Company FROM product p INNER JOIN register r ON r.IDUQ = p.vID WHERE r.Company=  '$selected' ") or die($mysqli->error); 
        $_SESSION['selectedIndex']=1;
        }
        else{
            $result=$mysqli->query("SELECT p.ID, p.vID, p.ImgURL, p.DESCRIPTION, p.CAT, p.priority, p.STATUS, r.Company FROM product p INNER JOIN register r ON r.IDUQ = p.vID; ") or die($mysqli->error); 
 
          }

       
        
    }
    
    
}

?>

<script>
document.getElementById("filter").selectedIndex =   $_SESSION['selectedIndex'];
})

</script>

