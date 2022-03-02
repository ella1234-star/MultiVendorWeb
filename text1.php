<?php
include("head.php");
include('connection.php');
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<title>Texting1</title>


  <div class="container">
    <div class="row">
        <div class="col-md-12">
            
                <h2>Post Competion</h2>
           
            <form action="" method="post" enctype="multipart/form-data">

                <div class="form-group">

                    <label>Date</label>
                    <input type="date" name="date" class="form-control">  
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
                <div class="form-group">
                    <label>Company Name</label>
                    <input type="text" name="CName" class="form-control">
                </div>
                <br>
                <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="image" class="form-control">
                </div>
               <br>
                <input type="submit" class="btn btn-primary" name="upload_event" value="Make Competion">
            </form>
        </div>
    </div>        
</div>

    <?php


    if(isset($_POST['upload_event']))
    {    

        $date_event = $_POST['date'];
        $location = $_POST['location'];
        $description = $_POST['description'];
        $CompanyName = $_POST['CName'];
        $image=$_FILES['image']['name'];


        $target = "images/".basename($_FILES['image']['name']);

        $query = "INSERT INTO `competion`(`Date`, `Location`, `Description`, `Company Name`, `Image_url`) VALUES ('$date_event','$location','$description', '$CompanyName', '$image')";
        $results=mysqli_query($con,$query);
        if ($results) {
            move_uploaded_file($_FILES['image']['tmp_name'],$target);
        echo "<script> alert('Competion Successfully made inserted successfully..... !')</script>";

       // echo "<script>window.open('eventDemo.php' , '_self')</script>";
        } 
        else {
            echo "Not inserted";
        }
    
       
    }
    ?>
