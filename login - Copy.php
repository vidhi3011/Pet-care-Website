<?php
session_start();
$conn=mysqli_connect('localhost','root','','pawdb');
//Getting Input value
if(isset($_POST['login'])){
  $username=mysqli_real_escape_string($conn,$_POST['username']);
  $password=mysqli_real_escape_string($conn,$_POST['password']);
  if(empty($username)&&empty($password)){
  $error= 'Fileds are Mandatory';
  }else{
 //Checking Login Detail
 $result=mysqli_query($conn,"SELECT*FROM masterlogin WHERE username='$username' AND password='$password'");
 $row=mysqli_fetch_assoc($result);
 $count=mysqli_num_rows($result);
 if($count==1){
      $_SESSION['user']=array(
   'username'=>$row['username'],
   'password'=>$row['password'],
   'role'=>$row['role']
   );
   $role=$_SESSION['user']['role'];
   //Redirecting User Based on Role
    switch($role){
  case 'user':
  header('location:index.php');
  break;
  case 'ngo':
  header('location:adminp.php');
  break;
  case 'admin':
  header('location:adminp.php');
  break;
 }
 }else{
 $error='Your Password or Username is not Found';
 }
}
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PawPal || Sign In</title>
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
                        <a href="index.php" class="btn_1 d-none d-md-inline-block">Emergency Rescue</a>
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
                                        <a href= "login.php" class="nav-link active"><b><u>Welcome to Paw Pal</b></u></a>
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
   
  <!-- login  -->
  <div class="container">
    <div class="row align-content-center">
  <div id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b>Signin</b></h5>
                </div>
            <div class="modal-body">
                <form  method="POST" class="p-sm-3">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Username</label>
                        <input type="text" class="form-control" placeholder="" name="username" id="recipient-name" required="">
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-form-label">Password</label>
                        <input type="password" class="form-control" placeholder="" name="password" id="password" required="">
                    </div><br>
                    <div class="right-w3l">
                    
                        <input type="submit" class="form-control button" type="submit" name="login" value="Sign In" >
                    </div>
                    <!-- <div class="row sub-w3l my-3">
                        <div class="col-sm-6 sub-w3_pvt">
                            <input type="checkbox" id="brand1" value="">
                            <label for="brand1">
                                <span></span>Remember me?</label>
                        </div> -->
                        <!-- <div class="col-sm-6 forgot-w3l text-sm-right">
                            <a href="#" class="text-secondary">Forgot Password?</a>
                        </div> -->
                    </div>
                    <p class="text-center dont-do modal-footer1">Don't have an account?
                        <a href="register.php" data-toggle="modal" data-target="#exampleModal1" class="font-weight-bold" data-blast="color">
                            Register Now</a>

                    </p>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</section>
<!-- //login -->
<!-- <div align="center">
<h3>PHP MySQL Role Based Access Control</h3>
<form method="POST" action="">
<table>
   <tr>
     <td>UserName:</td>
  <td><input type="text" name="username"/></td>
   </tr>
   <tr>
     <td>PassWord:</td>
  <td><input type="text" name="password"/></td>
   </tr>
   <tr>
     <td></td>
  <td><input type="submit" name="login" value="Login"/></td>
   </tr>
</table>
</form> -->

<!-- </div>-->
</html> 
