<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PawPal || Forum</title>
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
    <link rel="stylesheet" href="css/tablecss.css">
    <!-- <link rel="stylesheet" href="css/tooplate-style.css"> -->
</head>

  
    <!--::header part start::-->
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
    <!-- Header part end-->

    <!--::breadcrumb part start::-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <h1>Forum</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::breadcrumb part start::-->
<?php

//include connect.php page for database connection
Include('connect.php');
$tbl_name="forum_question"; // Table name 
$sql="SELECT * FROM $tbl_name ORDER BY id DESC";
// OREDER BY id DESC is order result by descending

$result = $mysqli->query($sql);
?>

	<body>
			
			<div class="container" style="margin-top:100px;">
				
				<h2>List of all the discussions..</h2>
				<div class="well well-lg">
					<a href="create_topic.php"><b>Create New Discussion..</b> </a>					
				</div>
  				<p>You can click on the topic name to join the discussion.. </p>
				<table class="fl-table" align="center">

					<thead>
				      <tr>
				        <!--<th style="text-align:center;">#</th>-->
				        <th class="bg-info" style="text-align:center;"><b>Topic</b></th>
				        <th class="bg-info" style="text-align:center;"><b>Views</b></th>
				        <th class="bg-info" style="text-align:center;"><b>Details</b></th>
				        <th class="bg-info" style="text-align:center;"><b>Date/Time</b></th>
				      </tr>
				    </thead>

				    <tbody>
					
				

		


<?php
// Start looping table row
while($rows=mysqli_fetch_array($result))
{
?>
<tr>
<!--<td style="text-align:center;"> /*<?php //echo $rows['id']; ?><!--</td>-->
<td class="bg-warning" style="text-align:center;"><a href="view_topic.php?id= <?php echo $rows['id']; ?> "><?php echo $rows['topic']; ?></a><BR></td>
<td class="bg-success" style="text-align:center;"><?php echo $rows['view']; ?></td>
<td class="bg-danger" style="text-align:center;"><?php echo $rows['detail']; ?></td>
<td class="bg-primary" style="text-align:center;"><?php echo $rows['datetime']; ?></td>
</tr>

<?php
// Exit looping and close connection
}
$mysqli->close();
?>
	</BR>
	</td>
	</tr>
	</tbody>


	</div>
	</table>
  </div>
  <br>
  <br>
  <br><br><br><br><br><br>
    <!-- footer part start-->
    <footer class="footer_area padding_top">
        <div class="container">
            <div class="row justify-content-center ">
                 <div class="col-lg-8 col-xl-6">
                    <!-- <div class="subscribe_part_text text-center">
                        <h2>Sign Up for Updates</h2>
                        <p></p>
                        <div class="subscribe_form">
                            <form action="#" name="#">
                                <div class="input-group align-items-center">
                                    <input type="email" class="form-control" placeholder="enter your email">
                                    <div class="subscribe_btn input-group-append">
                                        <div class="btn_1">Submit</div>
                                    </div>
                                </div>
                            </form>
                        </div>--> 
                    </div> 
                </div>
            </div>
            <div class="row justify-content-between section_padding">
                <div class="col-xl-2 col-sm-6 col-md-3 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Menu</h4>
                    <ul>
                    <li><a href="index.php">home</a></li>
                      <li><a href="adopt.php">adopt</a></li>
                      <li><a href="paymentform.php">donate</a></li>
                      <li><a href="contact.html">contact</a></li>
                    </ul>
                </div>
                <div class="col-xl-2 col-sm-6 col-md-3 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Contact</h4>
                    <ul>
                        <li><a href="#">+91 9819091026</a></li>
                        <li><a href="https://mail.google.com/mail/u/3/#inbox?compose=new">pawwpal8@gmail.com</a></li>
                    </ul>
                </div>
                <div class="col-xl-2 col-sm-6 col-md-3 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Address</h4>
                    <ul>
                        <li><a href="https://goo.gl/maps/3XCpKWDcmoCimKpX9">TCET Mumbai</a></li>
                        <li><a href="https://goo.gl/maps/3XCpKWDcmoCimKpX9"> Kandivali East</a></li>
                        <li><a href="https://goo.gl/maps/3XCpKWDcmoCimKpX9"> Mumbai</a></li>
                    </ul>
                </div>
                <div class="col-xl-2 col-sm-6 col-md-3 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Team</h4>
                    <ul>
                        <li><a href="#">Munazza Gaoher</a></li>
                        <li><a href="#">Vidhi Punjabi</a></li>
                        <li><a href="#">Samiksha Bedekar</a></li>
                        <li><a href="#">Asmita Gawde</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright_text">
                        <img src="img/logop1.png" alt="#">
                        <p class="footer-text">
Copyright &copy;<script>document.write(new Date().getFullYear());</script>  <i class="ti-heart" aria-hidden="true"></i>
</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer part end-->

	</body>
  </head>
</html>



