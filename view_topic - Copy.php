<!DOCTYPE html>
<html lang="en">
<head>
  <title>View Topic</title>
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
    
    <link rel="stylesheet" href="css/tooplate-style.css">
</head>


<?php

Include('connect.php');
$tbl_name="forum_question"; // Table name 
$id=$_GET['id'];
$sql="SELECT * FROM $tbl_name WHERE id='$id'";
$result = $mysqli->query($sql);

$rows1 = mysqli_fetch_array($result,MYSQLI_ASSOC);
?>


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


<div class="container" style="margin-top:100px;">

	<div >

  			<b><h3 style="text-align:center">Topic of discussion</h3></b>

	</div>

	<div class="well well-lg">

		<?php echo '<h5><B>'.$rows1['topic'].'</h5></B><BR>'; ?>
		
	</div>

	
	    <div class="panel panel-success">
		    <div class="panel-heading" style="text-align:left;word-wrap:break-word;">

		    	<?php echo '<b>By :: '.$rows1['name'].'</b><br>'; ?>
		    	<?php echo '<b>Email :: '.$rows1['email'].'</b>'; ?>

		    	<div class="panel-heading" style="text-align:right">
		    	
		    		<?php echo '<b>'.$rows1['datetime'].'</b>'; ?>
		    		
		    	</div>
		    	
		    </div>
		    
		    <div class="panel-body" style="word-wrap:break-word;"><?php echo $rows1['detail']; ?></div>
		</div>

	
</div>
<hr>
<div >

  	<b><h3 style="text-align:left;margin-left:100px">Replies</h3></b>

</div>


<BR>

<?php

$tbl_name2="forum_answer"; // Switch to table "forum_answer"

// $sql2="SELECT * FROM $tbl_name2 WHERE question_id='$id'";
$sql2="SELECT * FROM $tbl_name2 WHERE id='$id'";
$result2= mysqli_query($mysqli,$sql2);

while($rows2=mysqli_fetch_array($result2,MYSQLI_ASSOC))


{
?>

<div class="container">
   <div class="panel panel-success">

	<div class="col-md-4 panel-heading">

		<div class="well well-lg">
			
			Name:<?php echo $rows2['a_name']; ?><br>
			Email:<?php echo $rows2['a_email']; ?><br>
			Date/Time:<?php echo $rows2['a_datetime']; ?>

		</div>
		
	</div>

	<div class="col-md-8 panel-body" style="word-wrap:break-word;">		
			<?php echo $rows2['a_reply']; ?>
	</div>
	
  </div>
 </div>
<hr><br>

 

<?php
}

$sql3="SELECT view FROM $tbl_name WHERE id='$id'";
$result3=$mysqli->query($sql3);

$rows=mysqli_fetch_array($result3);
//$row=mysqli_fetch_array($res)
$view=$rows['view'];

 

// if have no counter value set counter = 1
if(empty($view))
{
$view=1;
$sql4="INSERT INTO $tbl_name(view) VALUES('$view') WHERE id='$id'";
$result4=$mysqli->query($sql4);
}

 

// count more value
$addview=$view+1;
$sql5="update $tbl_name set view='$addview' WHERE id='$id'";
$result5=$mysqli->query($sql5);

$mysqli->close();
?>


<BR>

<div class="container">
	

<form method="post" action="add_answer.php">
	<div class="row">
							<div class="col-sm-6 form-group">
								<label for="f_name">Name</label>
								<input type="text" placeholder="Enter your Name.."  name="a_name" id="a_name" class="form-control">
							</div>
							
	</div>

	<div class="row">
							<div class="col-sm-6 form-group">
								<label for="a_email">Email</label>
								<input type="text" placeholder="Enter your email.."  name="a_email" id="a_email" class="form-control">
							</div>
							
	</div>	

	<div class="row">
							<div class="col-sm-6 form-group">
								<label for="a_answer">Answer</label>
								<textarea rows="10" placeholder="Enter your reply.."  name="a_reply" id="a_answer" class="form-control"></textarea>
							</div>
							
	</div>	
	<div class="row">

					<div class="col-md-6">
              						<input type="submit" name="Submit" value="SUBMIT" class="btn btn-lg btn-success btn-block">
          			</div>		
	</div>

	<br><br><hr>		
		
		<tr>
			<td>&nbsp;</td>
			<td><input name="id" type="hidden" value="<?php echo $id; ?>"></td>
			<!--<td><input type="submit" name="Submit" value="Submit"> <input type="reset" name="Submit2" value="Reset"></td>-->
		</tr>
		
	</td>
</form>

</div>
<br><br><br><br><br><br><br><br><br><br><br><br>
    <!-- footer part start-->
    <footer class="footer_area padding_top">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-8 col-xl-6">
                    <div class="subscribe_part_text text-center">
                        <!-- <h2>Sign Up for Updates</h2> -->
                        <p></p>
                        <div class="subscribe_form">
                            <form action="#" name="#">
                                <div class="input-group align-items-center">
                                    <!-- <input type="email" class="form-control" placeholder="enter your email"> -->
                                    <div class="subscribe_btn input-group-append">
                                        <!-- <div class="btn_1">Submit</div> -->
                                    </div>
                                </div>
                            </form>
                        </div>
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



