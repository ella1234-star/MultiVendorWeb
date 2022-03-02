
<?php

include('connection.php');
$first_name = $last_name = $email = $pass = $rePass ="";

$F_Err = "";
$L_Err = "";
 $C_Err  = "";
  $E_Err = "";
   $Add_Err = "";
    $R_Err  ="";
     $passwordErr ="";


$randID  =rand();


if ($_SERVER["REQUEST_METHOD"] == "POST") {

if (isset($_POST['register'])){
    $first_name = htmlentities(mysqli_real_escape_string($con , $_POST['firstname']));
    $last_name = htmlentities(mysqli_real_escape_string($con , $_POST['surname']));
    $email = htmlentities(mysqli_real_escape_string($con , $_POST['email']));
    $Phone_Num = htmlentities(mysqli_real_escape_string($con , $_POST['phonenum']));
    $Address = htmlentities(mysqli_real_escape_string($con , $_POST['address']));
    $pass = htmlentities(mysqli_real_escape_string($con , $_POST['password']));
    $Repass = htmlentities(mysqli_real_escape_string($con , $_POST['confirmPas']));
    $Type = htmlentities(mysqli_real_escape_string($con , $_POST['type']));
    $Gender = htmlentities(mysqli_real_escape_string($con , $_POST['gender']));
    $Company = htmlentities(mysqli_real_escape_string($con , $_POST['company']));



    if (empty($_POST["firstname"])) {
      $F_Err = "Name is required";
    } else {
      $first_name = test_input($_POST["firstname"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z ]*$/",$first_name)) {
        $F_Err = "Only letters and white space allowed";
      }
    }

    
    if (empty($_POST["surname"])) {
        $last_name = htmlentities(mysqli_real_escape_string($con , $_POST['surname']));
        $L_Err = "Surname is required";
      } else {
        $last_name = test_input($_POST["surname"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$last_name)) {
          $L_Err = "Only letters and white space allowed";
        }
      }


      if (empty($_POST["email"])) {
        $E_Err = "Email is required";
      } 
        else {
            $email = test_input($_POST["email"]);
            // check if e-mail address syntax is valid
            if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
                $E_Err = " Invalid Email Format"; 
            }
      }

      if (empty($_POST["phonenum"])) {
        $C_Err = "Contact Number Require";
      } 

      if (empty($_POST["address"])) {
        $Add_Err = "Address is required";
      }

      
 
  
           
if (empty($_POST["password"]))  {
    $passwordErr = "Password required";
 }
 else{
 
    $pass = test_input($_POST["password"]);
    if (strlen($_POST["password"]) <= '8') {
        $passwordErr = "Your Password Must Contain At Least 8 Characters!";
    }
    elseif(!preg_match("#[0-9]+#",$pass)) {
        $passwordErr = "Your Password Must Contain At Least 1 Number!";
    }
    elseif(!preg_match("#[A-Z]+#",$pass)) {
        $passwordErr = "Your Password Must Contain At Least 1 Capital Letter!";
    }
    elseif(!preg_match("#[a-z]+#",$pass)) {
        $passwordErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
    } else {
        $passwordErr = "Correct Password";
    }
 
 }
/*
    $insert = "INSERT INTO `register`(`IDUQ`, `FirstName`, `Surname`, `Email`, `PhoneNum`, `Address`, `Password`, `Type`, `Company`, `Male`,'STATUS') VALUES ('$randID', '$first_name', '$last_name', '$email','$Phone_Num','$Address','$pass','$Type','$Company','$Gender','pending')";
    $query = mysqli_query($con , $insert);

    if ($query){
        echo "<script>alert('Weldone $first_name, you are good to go.')</script>";
     }else{
        echo "<script>alert('Registration failed, please try again!')</script>";
        echo "<script> window.open('Signup.php' , '_self')</script>";
     };

*/

$insert = "INSERT INTO `register`(`IDUQ`, `FirstName`, `Surname`, `Email`, `PhoneNum`, `Address`, `Password`, `Type`, `Company`, `Male`, `STATUS`)
 VALUES ('$randID', '$first_name', '$last_name','$email', '$Phone_Num', '$Address', '$pass','$Type','$Company','$Gender','pending')";

$query = mysqli_query($con ,$insert);

if($query){
  echo "<script>alert('Weldone, you are good to go.')</script>";
  echo "<script> window.open('login.php' , '_self')</script>";

}



   }
}
   
   


function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
 };

     ?>
