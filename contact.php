<?php
include("head.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="css/footerStyle.css">
    <style>
body{
    background-color:#90ee90 ;

}

.wrapper {
    height: 100vh;
    background: #000;
    background: url("https://i.imgur.com/g63vXfd.jpg");
    background-size: cover;
    width: 100%
}

.overlay {
    width: 100%;
    height: 100vh;
    background: rgba(0, 0, 0, 0.8)
}

.contact-us {
    margin-top: 50px;
    margin-bottom: 50px
}

.contact-us h3,
p {
    color: #fff
}

.address {
    margin-top: 14px !important;
    margin-left: 10px
}

.address span {
    color: #7B1FA2
}

.icons {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background-color: #fff;
    display: inline-block;
    display: flex;
    justify-content: center;
    align-items: center
}

.icons i {
    font-size: 20px
}

.forms {
    padding: 20px
}

.inputs input {
    margin-bottom: 13px;
    border: none;
    border-bottom: 2px solid #eee
}

.inputs input:focus {
    margin-bottom: 13px;
    border: none;
    border-bottom: 2px solid #7B1FA2;
    box-shadow: none
}

.inputs textarea {
    margin-bottom: 13px;
    border: none;
    border-bottom: 2px solid #eee;
    width: 100%;
    resize: none
}

.inputs textarea:focus {
    margin-bottom: 13px;
    border: none;
    border-bottom: 2px solid #7B1FA2;
    box-shadow: none;
    resize: none
}

.form-control {
    padding: .375rem .25rem
}
    </style>
</head>


<body>

<br><br><br>

<form method="post" action="process.php">
<?php 
    $Msg ="";
     if(isset($_GET['error'])){
        $Msg = "Please fill in the blanks";
        echo '<div class="alert alert-danger">'.$Msg.'</div>';
    } 

    if(isset($_GET['success'])){
        $Msg = "YOur message has been sent";
        echo '<div class="alert alert-success">'.$Msg.'</div>';
    }
    ?>
<div class="wrapper">
    <div class="overlay">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-9">
                <div class="contact-us text-center">
                    <h3>Contact Us</h3>
                    <p class="mb-5">Get in touch with Us we avaliable anytime</p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mt-5 text-center px-3">
                           
                                <div class="d-flex flex-row align-items-center mt-3"> <span class="icons"><i class="fa fa-phone"></i></span>
                                    <div class="address text-left"> <span>Phone</span>
                                        <p>501 205 2929</p>
                                    </div>
                                </div>
                                <div class="d-flex flex-row align-items-center mt-3"> <span class="icons"><i class="fa fa-envelope-o"></i></span>
                                    <div class="address text-left"> <span>Address</span>
                                        <p>admin@whathappensir.co.za</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="text-center px-1">
                                <div class="forms p-4 py-5 bg-white">
                                    <h5>Send Message</h5>
                                    <div class="mt-4 inputs"> <input type="text" class="form-control" name="Uname" placeholder="Name">
                                     <input type="text" class="form-control" name="Email" placeholder="Email">
                                     <input type="text" class="form-control" name="Subject" placeholder="Subject">
                                      <textarea class="form-control" name="msg" placeholder="Type your message"></textarea> </div>
                                    <div class="button mt-4 text-left"> <button  name="btn_send" class="btn btn-dark">Send</button> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>
</body>
<br><br><br>


</html>