<?php
  //check for required fields from the form
//  if ((!$_POST[topic_owner]) || (!$_POST[topic_title])
//     || (!$_POST[post_text])) {
//    header("Location: addtopic.html");
//     exit;
// }

 //connect to server and select database
//  $conn = mysqli_connect("localhost", "root", "","pawdb")
//     or die(mysql_error());
//  mysqli_select_db("pawdb",$conn) or die(mysql_error());
$conn = new mysqli("localhost", "root", "", "pawdb");
// 
// $row = $result->fetch_assoc();
 //create and issue the first query
 $add_topic = "INSERT into forum_topics values ('', '$_POST[topic_title]',
     now(), '$_POST[topic_owner]')";
// mysql_query($add_topic,$conn) or die(mysql_error());
 mysqli_query($conn , $add_topic);

 //get the id of the last query 
  $topic_id = mysqli_insert_id($conn);
 
 //create and issue the second query
 $add_post = "INSERT into forum_posts values ('', '$topic_id',
     '$_POST[post_text]', now(), '$_POST[topic_owner]')";
 mysqli_query($conn, $add_post) or die(mysql_error());

 //create nice message for user
 $msg = "<P>The <strong>$topic_id</strong> topic has been created.</p>";
 ?>
  <html>
 <head>
  <title>New Topic Added</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PawPal || AddTopic</title>
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
                          <a href="#"><img src="img/logop1.png" alt="PawPal" title="" width="128" height="60"/></a>
                      </div>
                  </div>
                  <div class="col-8 col-md-8 col-xl-6 ">
                    
                      <div class="sub_header_social_icon float-right">
                        <a href="#"><i class="flaticon-phone"></i>98201 22602</a>
                        <a href="#" class="btn_1 d-none d-md-inline-block">Emergency Rescue</a>
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
                                        <a href= "index.html" class="nav-link active"><b><u>Home</b></u></a>
                                    </li>
                                    <li class="nav-item active">
                                        <a href= "addtopic.html" class="nav-link active"><b><u>Add a topic</b></u></a>
                                    </li>
                                    <li class="nav-item active">
                                        <a href= "create_cat.php" class="nav-link active"><b><u>Create a category</b></u></a>
                                    </li>
                                    <li class="nav-item active">
                                        <a href= "logout.php" class="nav-link active"><b><u>Logout</b></u></a>
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
<br>
<br>
 <h1 align="center">New Topic Added<?php print $msg; ?></h1>
 <!-- <?php print $msg; ?> -->

 <br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

    <!-- footer part start-->
    <footer class="footer_area padding_top">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-8 col-xl-6">
                    <!-- <div class="subscribe_part_text text-center"> -->
                        <!-- <h2>Sign Up for Updates</h2>
                        <p></p> -->
                        <!-- <div class="subscribe_form">
                            <form action="#" name="#">
                                <div class="input-group align-items-center">
                                    <input type="email" class="form-control" placeholder="enter your email">
                                    <div class="subscribe_btn input-group-append">
                                        <div class="btn_1">Submit</div>
                                    </div>
                                </div>
                            </form>
                        </div> -->
                    <!-- </div> -->
                </div>
            </div>
            <div class="row justify-content-between section_padding">
                <div class="col-xl-2 col-sm-6 col-md-3 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Menu</h4>
                    <ul>
                        <li><a href="#">home</a></li>
                        <li><a href="#">about</a></li>
                        <li><a href="#">shop</a></li>
                        <li><a href="#">contact</a></li>
                    </ul>
                </div>
                <div class="col-xl-2 col-sm-6 col-md-3 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Contact</h4>
                    <ul>
                        <li><a href="#">+91 9819091026</a></li>
                        <li><a href="https://mail.google.com/mail/u/2/#inbox?compose=new">1032180269@Tcetmumbai.in</a></li>
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
    Copyright &copy;<script>document.write(new Date().getFullYear());</script>  
    <!-- <i class="ti-heart" aria-hidden="true"></i> -->
    </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer part end-->
    
 </body>
 </html>