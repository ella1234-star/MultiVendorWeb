<?php
include('head.php');

?>

<head>
<script src="javascript/jquery.js"></script>

  <link href="css/style3.css" rel="stylesheet">
  <style>
    #regFormC{
      display:none;
    }
    #regFormV {
      display: none;
    }

    footer{
		background-color: #333333;
		text-align: center;
		color: white;
    padding: 30px;
		height: 40px;
	}

  body{
    background-color:#99e599 ;

}
a{
  color:white;
}


  </style>
</head>

<body>
  <center>
    <div class="container">
      <br><br><br>
      <h1>Registration</h1>
      <div class="content">
        <?php include('insert_user.php'); ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
          <div class="user-details">

            <div class="input-box">
              <span class="details" >Select type</span>
              <select class="text1" style="width: 100%;" name="type" id="seeAnotherField">
                <option selected>-</option>
                <option value="Vendor">Vendor</option>
                <option value="Client">Client</option>
              </select>
            </div>
            <div id='regFormC'>

              <div class="input-box">
                <span class="details">Full Name</span>
                <input type="text" style="width: 100%;" placeholder="Enter your name" name="firstname">
                <span class="error">* <?php echo $F_Err; ?></span><br>

              </div>
              <div class="input-box">
                <span class="details">Surname</span>
                <input type="text" placeholder="Enter your username" name="surname">
                <span class="error">* <?php echo $L_Err; ?></span><br>

              </div>
              <div class="input-box">
                <span class="details">Email</span>
                <input type="text" placeholder="Enter your email" name="email">
                <span class="error">* <?php echo $E_Err; ?></span><br>

              </div>
             
              <div class="input-box">
                <span class="details">Password</span>
                <input type="text" placeholder="Password" name="password">
                <span class="error">* <?php echo  $passwordErr; ?></span><br>
              </div>
              <div class="input-box">
                <span class="details">Confirm Password</span>
                <input type="text" placeholder="Confirm your password" name="confirmPas">
              </div>
            </div>

            <div id='regFormV'>
            
              <div class="input-box">
                <span class="details">Full Name</span>
                <input type="text" placeholder="Enter your name" name="firstname">
                <span class="error">* <?php echo $F_Err; ?></span><br>

              </div>
              <div class="input-box">
                <span class="details">Surname</span>
                <input type="text" placeholder="Enter your username" name="surname">
                <span class="error">* <?php echo $L_Err; ?></span><br>

              </div>
              <div class="input-box">
                <span class="details">Email</span>
                <input type="text" placeholder="Enter your email" name="email">
                <span class="error">* <?php echo $E_Err; ?></span><br>

              </div>
              <div class="input-box">
                <span class="details">Phone Number</span>
                <input type="text" placeholder="Enter your number" name="phonenum">
                <span class="error">* <?php echo $C_Err; ?></span><br>

              </div>
              <div class="input-box">
                <span class="details">Address</span>
                <input type="text" placeholder="Address" name="address">
                <span class="error">* <?php echo  $Add_Err; ?></span><br>
              </div>
              <div class="input-box">
                <span class="details">Password</span>
                <input type="text" placeholder="Password" name="password">
                <span class="error">* <?php echo  $passwordErr; ?></span><br>
              </div>
              <div class="input-box">
                <span class="details">Confirm Password</span>
                <input type="text" placeholder="Confirm your password" name="confirmPas">
              </div>
              <div class="input-box">
                <span class="details">Gender</span>
                <select class="text1" style="width: 100%; " name="gender">
                  <option selected>-</option>
                  <option>Male</option>
                  <option>Female</option>
                </select>
              </div>
              <div class="input-box">
                <span class="details">Company Name</span>
                <input type="text" placeholder="Company Name" name="company">
              </div>
            </div>

          </div>

          <div class="button">
            <input type="submit" value="Register" name="register">
          </div>
        </form>
      </div>
    </div>
  </center>

</body>

<script>
$("#seeAnotherField").change(function(){
  if($(this).val() == "Client"){
    $('#regFormC').show();
    $('#regFormV').hide();
  }else if($(this).val() == "Vendor"){
    $('#regFormC').hide();
    $('#regFormV').show();
  }
});

$("#seeAnotherField").trigger("change");


</script>


<br><br><br><br><br><br><br><br>

<footer> 
<p>  Copyright © <?php echo date("Y");?> Whathappeningsir &copy;  All Right Reserved | <a href="terms and condition.php">T&C</a> | <a href="disclaimer.php">Disclaimer</a> | <a href="#">Privacy Policy</a></p>
	</footer>

</html>