<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Events</title>
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



<div class="container">
    <div class="row">
        <div class="col-md-12">
            
                <h2>Post Event</h2>

                <?php
date_default_timezone_set('Africa/Johannesburg');
echo "The time is " . date("M/D/Y h:i:sa");

                ?>
           
            <form action="" method="post" enctype="multipart/form-data">

                <div class="form-group">

                    <label>Start Date</label>
                    <input type="date" name="StartDate" class="form-control">  
                </div> 
                
                  <div class="form-group">

                    <label>End Date</label>
                    <input type="date" name="EndDate" class="form-control">  
                </div> 
                <br>                       

                <div class="form-group">
                    <label>Location</label>
                    <select name="location" class="form-control">
					<option selected>Select Location Below</option>
					<option>KwaZulu-Natal</option>
					<option>Eastern Cape</option>
                    <option>Free State</option>
                    <option>Guateng</option>
                    <option>Western Cape</option>
                    <option>Limpopo</option>
                    <option>Mpumalanga</option>
                    <option>Nothern Cape</option>
                    <option>North West</option>
		</select required>

                </div>
                <br>
              

                <div class="form-group">
                    <label>Description</label>
                    <input type="text" name="description" class="form-control">
                </div>
                <br>
                <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="image" class="form-control">
                </div>
               <br>
                <input type="submit" class="btn btn-primary" name="upload_event" value="UPLOAD_EVENT">
            </form>
        </div>
    </div>        
</div>

    <?php

    include ('connection.php');

    if(isset($_POST['upload_event']))
    {    
        $date_eventStart = $_POST['StartDate'];
        $date_eventEnd = $_POST['EndDate'];
        $location = $_POST['location'];
        $description = $_POST['description'];
        $image=$_FILES['image']['name'];
    
        $query = "INSERT INTO `events`( `StartDate`,`EndDate`, `Location`, `Description`, `Image_url`,`status`)  VALUES ('$date_eventStart', '$date_eventEnd' ,'$location','$description','$image','pending')";
        
    $results=mysqli_query($con,$query);


        if ($results) {
            move_uploaded_file($_FILES['image']['tmp_name'],"$image");
        echo "<script> alert('Event Successfully made inserted successfully..... !')</script>";
        echo "<script>window.open('eventDemo.php' , '_self')</script>";
        } 
        else {
            echo "Not inserted";
        }
    
    }
    ?>
</body>
</html>

