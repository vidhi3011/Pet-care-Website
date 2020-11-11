<?php

session_start();

$con= mysqli_connect('localhost:3306','root','','pawdb')or die("Could not connect to mysql".mysqli_error($con));
 
$_SESSION['message']='';
// get passed parameter value, in this case, the record ID
// isset() is a PHP function used to verify if a value is there or not
$pet_id=isset($_GET['petid']) ? $_GET['petid'] : die('ERROR: Record ID not found.');
 

    


if(isset($_POST['adoptapet'])){ 

    $name= $_POST['name'];
    $age = $_POST['age'];
    $address= $_POST['address'];
    $email = $_POST['email'];
    
    $query = "INSERT into adopt (pet_id, name, age, address, email)
    VALUES ('$pet_id','$name', '$age', '$address', '$email')";

if (mysqli_query($con, $query)){
    $_SESSION['message']="Upload Successful";
    header("location:adopt.php");
    
}

}  
    
?>



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PawPal || Adopt</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<header class="header_area">
        <div class="sub_header">
            <div class="container">
                <div class="row align-items-center">
                  <div class="col-4 col-md-4 col-xl-6">
                      <div id="logo">
                          <a href="index.php"><img src="img/logop1.png" alt="PawPal" title="" width="128" height="60"/></a>
                      </div>
                  </div>
                  <div class="col-8 col-md-8 col-xl-6 ">
                      <div class="sub_header_social_icon float-right">
                        <a href="#"><i class="flaticon-phone"></i>98201 22602</a>
                        <a href="rescue.php" class="btn_1 d-none d-md-inline-block">Emergency Rescue</a>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main_menu">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <i class="ti-menu"></i>
                            </button>

                            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                                <ul class="navbar-nav">
                                    <li class="nav-item active">
                                        <a class="nav-link active" href="index.php">Home</a>
                                    </li>
                                    <!-- <li class="nav-item">
                                        <a href="about.html" class="nav-link">About</a>
                                    </li> -->
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Sevices
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="paymentform.php">Donation</a>
                                            <a class="dropdown-item" href="adopt.php">Adoption</a>
                                        </div>
                                    <li class="nav-item">
                                        <a href="faq.html" class="nav-link">FAQ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="main_forum.php" class="nav-link">Forum</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Locate
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="vet.php">Veterinary</a>
                                            <a class="dropdown-item" href="day.php">Day Care</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a href="contact.html" class="nav-link">Contact</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="logout.php" class="nav-link">Log Out </a>
                                    </li>
                                   
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
<br>

<!-- Header part end--> 
<section class="banner_part">
 <!-- register -->
            <div class="container">
                <div class="row align-content-center">
                <div id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                 <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel"><b>Adopt</b></h5>
                </div>

            <div class="modal-body">
                <form  method="POST" class="p-sm-3" enctype='multipart/form-data'>

                
                       
                <input type="hidden" class="form-control" placeholder="" name="pet_id" id="pet_id" required="" value="$pet_id">
                   

                <div class="form-group">
                        <label for="name" class="col-form-label">Name</label>
                        <input type="text" class="form-control" placeholder="" name="name" id="name" required="">
                    </div>
                    
                    <div class="form-group">
                        <label for="age" class="col-form-label">Age:</label>
                        <input type="number" class="form-control" placeholder="" name="age" id="age" required="">
                    </div>
                    
                    <div class="form-group">
                        <label for="address" class="col-form-label">Address:</label>
                        <input type="text" class="form-control" placeholder="" name="address" id="address" required="">
                    </div>

                    <div class="form-group">
                        <label for="email" class="col-form-label">Email:</label>
                        <input type="email" class="form-control" placeholder="" name="email" id="email" required="">
                    </div>
                    
                    <div class="right-w3l button">
                        <input type="submit" class="form-control" type="submit" name="adoptapet" value="Submit">
                    </div>
                </form>
                
        </div>
    </div>
</div>
</div>
</div>
</section>
</body>
</html>
