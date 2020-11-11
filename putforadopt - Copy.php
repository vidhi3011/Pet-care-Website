
<?php

session_start();

$con= mysqli_connect('localhost:3306','root','','pawdb')or die("Could not connect to mysql".mysqli_error($con));
 
$_SESSION['message']='';

if(isset($_POST['putforadopt'])){ 

    $pet_kind= $_POST['pet_kind'];
    $pet_name = $_POST['pet_name'];
    $pet_breed= $_POST['pet_breed'];
    $pet_age = $_POST['pet_age'];
    $pet_gender = $_POST['pet_gender'];
    $pet_vaccine = $_POST['pet_vaccine'];
    
    $avatar_path= 'image/'.$_FILES['avatar']['name'];

    $pet_kind = stripslashes($_REQUEST['pet_kind']);
    $pet_kind = mysqli_real_escape_string($con,$pet_kind);  
    $pet_name = stripslashes($_REQUEST['pet_name']);
    $pet_name = mysqli_real_escape_string($con,$pet_name);
    $pet_breed = stripslashes($_REQUEST['pet_breed']); 
    $pet_breed = mysqli_real_escape_string($con,$pet_breed);
    //$avatar_path= mysqli_real_escape_string($con, $avatar_path);


    if(preg_match("!image!", $_FILES['avatar']['type'])){
        if(copy($_FILES['avatar']['tmp_name'], $avatar_path)){
            //$_SESSION['avatar']=$avatar_path;
            $query = "INSERT into putforadoption (pet_kind, pet_name, pet_breed, pet_age, pet_gender, pet_vaccine, image_path)
VALUES ('$pet_kind','$pet_name', '$pet_breed', '$pet_age', '$pet_gender', '$pet_vaccine', '$avatar_path')";


            
            if (mysqli_query($con, $query)){
                $_SESSION['message']="Upload Successful";
                header("location:adminp.php");
            }
            else{
                $_SESSION['message']="Upload UnSuccessful";
            }
        }
        else{
            $_SESSION['message']="File upload not successful";
        }
    }
}

    //$query = "INSERT into putforadoption (pet_name, pet_breed, pet_age, pet_gender, pet_vaccine)
//VALUES ('$pet_name', '$pet_breed', '$pet_age', '$pet_gender', '$pet_vaccine')";
    //mysqli_query($con,$query);

    
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


    <!--::header part start::-->
    <header class="header_area">
        <div class="sub_header">
            <div class="container">
                <div class="row align-items-center">
                  <div class="col-4 col-md-4 col-xl-6">
                      <div id="logo">
                          <a href="adminp.php"><img src="img/logop1.png" alt="PawPal" title="" width="128" height="60"/></a>
                      </div>
                  </div>
                  <div class="col-8 col-md-8 col-xl-6 ">
                      <div class="sub_header_social_icon float-right">
                        <a href="#"></a>
                        <a href="logout.php" class="btn_1 d-none d-md-inline-block">Logout</a>
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
                                    
                                    <li class="nav-item">
                                        <a href="adminp.php" class="nav-link"><u>Adoption</u></a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->
<section class="banner_part">
 <!-- register -->
            <div class="container">
                <div class="row align-content-center">
                <div id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                 <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel"><b>Register an Animal</b></h5>
                </div>

                <div class="modal-body">
                <form  method="POST" class="p-sm-3" enctype='multipart/form-data'>
                <div class="form-group">
                        <label for="pet_kind" class="col-form-label">Which Animal:</label>
                        <input type="text" class="form-control" placeholder="" name="pet_kind" id="pet_kind" required="">
                    </div>
                    
                    <div class="form-group">
                        <label for="pet_name" class="col-form-label"> Name:</label>
                        <input type="text" class="form-control" placeholder="" name="pet_name" id="pet_name" required="">
                    </div>
                    
                    <div class="form-group">
                        <label for="pet_breed" class="col-form-label"> Breed:</label>
                        <input type="text" class="form-control" placeholder="" name="pet_breed" id="pet_breed" required="">
                    </div>
                    <div class="form-group">
                        <label for="pet_age" class="col-form-label"> Age:</label>
                        <input type="number" class="form-control" placeholder="" name="pet_age" id="pet_age" required="">
                    </div>
                    <div class="form-group">
                        <label for="pet_gender">Gender:</label>
                           <select name="pet_gender" id="pet_gender">
                            <option value="select">-Select Option-</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="pet_vaccine">Vaccinated ?:</label>
                           <select name="pet_vaccine" id="pet_vaccine">
                            <option value="select">-Select Option-</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                    </div>

                    <div class="form-group">
                    <label for="avatar" class="col-form-label">Upload Image of Animal:</label>
                    <input type="file" class="form-control" name="avatar" id="avatar" value="" /> 
                    
                    <div class="right-w3l button">
                        <input type="submit" class="form-control" type="submit" name="putforadopt" value="Submit">
                    </div>
                </form>
                
               
        </div>
    </div>
</div>
</div>
</div>
</section>
</html>
