
<?php

include('connection.php');


 $email = $pass = "";

$F_Err = "";
$L_Err = "";
 $C_Err  = "";
  $E_Err = "";
   $Add_Err = "";
    $R_Err  ="";
     $passwordErr ="";


$randID  =rand();


if ($_SERVER["REQUEST_METHOD"] == "POST") {

if (isset($_POST['log_in'])){
  
    $email = htmlentities(mysqli_real_escape_string($con , $_POST['email']));
    $pass = htmlentities(mysqli_real_escape_string($con , $_POST['password']));
  
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


 $get_user = "select *from register";
 $run_user = mysqli_query($con ,$get_user);
 $row = mysqli_fetch_array($run_user);



 $query = "select *from register where Password ='$pass' AND Email = '$email' ";
$result= mysqli_query($con , $query);
$row2 = mysqli_fetch_array($result);

$ven1 =$row2['Type'];

    $_SESSION['loginE'] = $row2['IDUQ'];
    $likeID = $_SESSION['loginE'];
    setcookie("userID", $likeID,0,'/');

if(mysqli_num_rows($result) == 1 ){
    echo "<script>alert('You have successsfull login'); </script>";
    if($ven1 == "Vendor" && $row2['STATUS']=="OK" )
    {

        echo "<script> window.open('vendor.php' , '_self');
        document.getElementById('logoutBtn').style.display = 'block';</script>";

        $_SESSION['type'] = $ven1;
    
    }elseif($ven1 == "Client" &&  $row2['STATUS']=="OK")
    {
        echo "<script> window.open('index.php' , '_self')</script>";
        $_SESSION['type'] = $ven1;
    }elseif($ven1 == "Admin" &&  $row2['STATUS']=="OK")
    {
        echo "<script> window.open('Admin.php' , '_self');
        document.getElementById('logoutBtn').style.display = 'block';</script>";
        $_SESSION['type'] = $ven1;

    }
    else{
        echo "<script>alert('Status is PENDING...wait for Admin to approve.'); </script>";
    }
    exit();
}
else{
  echo "<script>alert('Invalid login'); </script>";
  echo  "<script> window.open('login.php' , '_self')</script>";


  exit();
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
