<?php
 //connect to server and select database; we'll need it soon
//  $conn = mysql_connect("localhost", "joeuser", "somepass")
//      or die(mysql_error());
// mysql_select_db("testDB",$conn) or die(mysql_error());
$conn = new mysqli("localhost", "root", "", "pawdb");
//check to see if we're showing the form or adding the post
 if ($_POST[op] != "addpost") {
    // showing the form; check for required item in query string
//    if (!$_GET[post_id]) {
//         header("Location: topiclist.php");
//         exit;
//     }
  
       //still have to verify topic and post
    $verify = "SELECT ft.topic_id, ft.topic_title from
     forum_posts as fp left join forum_topics as ft on fp.topic_id = ft.topic_id where fp.post_id = $_POST[post_id]";

    $verify_res = mysqli_query($verify, $conn) ;
    if (mysql_num_rows($verify_res) < 1) {
       //this post or topic does not exist
       header("Location: topiclist.php");
        exit;
   } else {
       //get the topic id and title
       $topic_id = mysqli_result($verify_res,0,'topic_id');
      $topic_title = stripslashes(mysql_result($verify_res,
        0,'topic_title'));
 
        print "
        <html>
        <head>
         <title>Post Your Reply in $topic_title</title>
         </head>
        <body>
        <h1>Post Your Reply in $topic_title</h1>
         <form method=post action=\"$_SERVER[PHP_SELF]\">
  
         <p><strong>Your E-Mail Address:</strong><br>
         <input type=\"text\" name=\"post_owner\" size=40 maxlength=150>
  
         <P><strong>Post Text:</strong><br>
         <textarea name=\"post_text\" rows=8 cols=40 wrap=virtual></textarea>
  
        <input type=\"hidden\" name=\"op\" value=\"addpost\">
         <input type=\"hidden\" name=\"topic_id\" value=\"$topic_id\">
 
         <P><input type=\"submit\" name=\"submit\" value=\"Add Post\"></p>
  
         </form>
       </body>
         </html>";
   }
  } else if ($_POST[op] == "addpost") {
     //check for required items from form
     if ((!$_POST[topic_id]) || (!$_POST[post_text]) ||
      (!$_POST[post_owner])) {
        header("Location: topiclist.php");
         exit;
     }
  
     //add the post
    $add_post = "insert into forum_posts values ('', '$_POST[topic_id]',
      '$_POST[post_text]', now(), '$_POST[post_owner]')";
    mysqli_query($add_post,$conn);
 
     //redirect user to topic
     header("Location: showtopic.php?topic_id=$topic_id");
    exit;
  }
 ?>
 <html>
 <head>
 <title>Posts in Topic</title>
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
    <style>
        table {
    border-collapse: collapse;
    width: 100%;
}
 
table a {
    color: #000;
}
 
table a:hover {
    color:#373737;
    text-decoration: none;
}
 
th {
    background-color: #B40E1F;
    color: #F0F0F0;
}
 
td {
    padding: 5px;
}
 
/* Begin font styles */
h1, #footer {
    font-family: Arial;
    color: #F1F3F1;
}
 
h3 {margin: 0; padding: 0;}
 
/* Menu styles */
.item {
    background-color: #00728B;
    border: 1px solid #032472;
    color: #FFF;
    font-family: Arial;
    padding: 3px;
    text-decoration: none;
}
 
.leftpart {
    width: 70%;
}
 
.rightpart {
    width: 30%;
}
 
.small {
    font-size: 75%;
    color: #373737;
}
#footer {
    font-size: 65%;
    padding: 3px 0 0 0;
}
 
.topic-post {
    height: 100px;
    overflow: auto;
}
 
.post-content {
    padding: 30px;
}
 
textarea {
    width: 500px;
    height: 200px;
}
</style>
</head>
 <body>
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
                                        <a href= "create_topic.php" class="nav-link active"><b><u>Create a topic</b></u></a>
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
  </body>
  </html>

 