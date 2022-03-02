<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<style>
/*this is for the tab */

* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
.tab {
  float: left;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  width: 30%;
  height: 300px;
}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  float: left;
  padding: 0px 12px;
  border: 1px solid #ccc;
  width: 70%;
  border-left: none;
  height: 600px;
}

/*it end here*/

/*this is for the footer*/
footer{
		background-color: #333333;
		text-align: center;
		color: white;
    padding: 30px;
		height: 40px;
	}
a{
  color:white;
}
/*End here*/

/*this is for the notification button */
    .notification {
  background-color: #555;
  color: white;
  text-decoration: none;
  padding: 15px 26px;
  position: relative;
  display: inline-block;
  border-radius: 2px;
}

.notification:hover {
  background: red;
}

.notification .badge {
  position: absolute;
  top: -10px;
  right: -10px;
  padding: 5px 10px;
  border-radius: 50%;
  background-color: red;
  color: white;
}

/*it end here*/
#notify{
    display: none;
}
</style>
</head>
<body>
<h3>Event</h3>
  <div class="container">
    <div class="row">
        <div class="col-md-12">
            
                <h2>Post Advert</h2>
           
            <form action="" method="post" enctype="multipart/form-data">

                <div class="form-group">

                    <label>From Today : Choose your End Date</label>
                    <input   id="inDate" name="dateVal" type="date"  class="form-control">  
                </div> 
                <br>                       

                <div class="form-group">
                    <label>Category</label>
                    <select name="cat" class="form-control">
                    <option selected>Select Category</option>
                    <option><---Sales and Deals---></option>
					<option>Clothes & Shoes</option>
					<option>Wholesalers</option>
                    <option>Electronic</option>
                    <option>Exclusive</option>
                    <option>Grocers</option>
                    <option>Liquor</option>
                    <option>Sport</option>
                    <option>Baby & Kids</option>
                    <option>Bank</option>
                    <option>Pharmacy</option>
                    <option>House & Home</option>
                    <option>Cars & Spares</option>
                    <option>Garage</option>
                    <option>Books</option>
                    <option>Travel</option>
                    <option><---Ends---></option>
                    <option>Food and Restaurants</option>
                    <option>Fast Foods</option>
                    <option>Dine In</option>
                    <option>etc</option>

		</select required>

                </div>
                <br>
                <div class="form-group">
                    <label>Allow your post as Priority Aids</label>
                    <select  name="pio" class="form-control">
                    <option selected>Select Priority Aids</option>
					<option>YES</option>
					<option>NO</option>
		</select required>

                </div>


                <br>
              

                <div class="form-group">
                    <label>Description</label>
                    <input type="text" name="text" class="form-control"  placeholder="Write Something about your post" required>
                </div>
                <br>
                <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="image" class="form-control" required>
                </div>
               <br>
                <input type="submit" class="btn btn-primary" name="upload" value="Upload Post" required>
            </form>
        </div>
    </div>        
   
</body>
</html> 
