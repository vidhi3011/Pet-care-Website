
	<?php 
	//$typeofanimal ='';
	//$address ='';
	//$message ='';
	//$description ='';
		if(isset($_POST['sendmail'])) {
			//$mail->TypeofAnimal = $_POST["typeofanimal"];
			//$mail->Address = $_POST["address"];
			//$mail->Message = $_POST["message"];
			//$mail->Description = $_POST["description"];

			require 'PHPMailerAutoload.php';
			require 'credential.php';

			$mail = new PHPMailer;

			$mail->SMTPDebug = 0;                               // Enable verbose debug output

			$mail->isSMTP();                                      // Set mailer to use SMTP
			$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                               // Enable SMTP authentication
			$mail->Username = EMAIL;                 // SMTP username
			$mail->Password = PASS;                           // SMTP password
			$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
			$mail->Port = 587;                                    // TCP port to connect to

			$mail->setFrom(EMAIL, 'Pawpal');
			$mail->addAddress($_POST['email']);     // Add a recipient

			$mail->addReplyTo(EMAIL);
			// print_r($_FILES['file']); exit;
			for ($i=0; $i < count($_FILES['file']['tmp_name']) ; $i++) { 
				$mail->addAttachment($_FILES['file']['tmp_name'][$i], $_FILES['file']['name'][$i]);    // Optional name
			}

			$mail->isHTML(true);                                  // Set email format to HTML

			$mail->Subject = $_POST['subject'];

			//$mail->Body    = '<div style="border:2px solid red;">Here are the<b>Details!</b></div>';
			$mail->Body    = '<h3>TypeofAnimal:'.$_POST['typeofanimal'].'<br> Address:  '.$_POST['address'].'<br>
			Message:  '.$_POST['message'].'<br>Description:  '.$_POST['description'].'<h3>';
			$mail->AltBody = $_POST['message'];

			if(!$mail->send()) {
			    echo 'Message could not be sent.';
			    echo 'Mailer Error: ' . $mail->ErrorInfo;
			} else {
                echo '<script>'; echo 'alert("Message has been sent successfully.")'; echo '</script>';
			    
			}

		}
	 ?>
	 <!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PawPal ||Rescue</title>
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
    <style>
        form { 
margin: 0 auto; 
width:950px;
}
</style>
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
                        <a href="https://api.whatsapp.com/send?phone=+919892906102"><i class="flaticon-phone"></i>Pawpal Helpline</a>
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
                                        <a href= "rescue.php" class="nav-link active"><b><u>Rescue Animals </b></u></a>
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
<section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <h1>Emergency Rescue</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<br>
<br>
<div class="container">

<h2 class="text-center"><i>"We can't help everyone but everyone can help someone"</i></h2>
<hr>
</div>
 
	<div class="row">
    <div class="col-12 col-md-offset-2 ">
        <form align="center" role="form" method="post" enctype="multipart/form-data">
        	<div class="row">
                <div class="col-sm-12 form-group">
                    <label for="email"><b>To Email:</b></label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" maxlength="50" value="pawwpal8@gmail.com">
                </div>
            </div><br/>
            <div class="row">
                <div class="col-sm-12 form-group">
                    <label for="subject"><b>Subject:</b></label>
                    <textarea class="form-control" type="textarea" id="subject" name="subject" placeholder="Enter subject" maxlength="50" rows="2"></textarea>
                </div>
            </div><br/>
            <div class="row">
                <div class="col-sm-12 form-group">
                    <label for="subject"><b>Type of Animal:</b></label>
                    <textarea class="form-control" type="textarea" id="typeofanimal" name="typeofanimal" placeholder="Enter type of animal" maxlength="50" rows="2"></textarea>
                </div>
            </div><br/>
           
            <div class="row">
                <div class="col-sm-12 form-group">
                    <label for="subject"><b>Address:</b></label>
                    <textarea class="form-control" type="textarea" id="address" name="address" placeholder="Enter Full Address" maxlength="6000" rows="4"></textarea>
                </div>
            </div><br/>
            
            <div class="row">
                <div class="col-sm-12 form-group">
                    <label for="name"><b>Message:</b></label>
                    <textarea class="form-control" type="textarea" id="message" name="message" placeholder="Your Message Here" maxlength="6000" rows="4"></textarea>
                </div>
            </div><br/>
            <div class="row">
                <div class="col-sm-12 form-group">
                    <label for="name"><b>Description:</b></label>
                    <textarea class="form-control" type="textarea" id="description" name="description" placeholder="Enter Description" maxlength="6000" rows="4"></textarea>
                </div>
            </div><br/>
            <div class="row">
                <div class="col-sm-12 form-group">
                    <label for="name"><b>File:</b></label>
                    <input name="file[]" multiple="multiple" class="form-control" type="file" id="file">
                </div>
            </div><br/>
             <div class="row">
                <div class="col-sm-12 form-group">
                    <button type="submit" name="sendmail" class="btn btn-lg btn-success btn-block">Send</button>
                </div>
            </div>
        </form>
	</div>
</div>

</body>
</html>
