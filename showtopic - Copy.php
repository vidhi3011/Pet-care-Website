<?php
  //check for required info from the query string
//  if (!$_GET[topic_id]) {
//     header("Location: topiclist.php");
//     exit;
//  }

 //connect to server and select database
//   $conn = mysql_connect("localhost", "joeuser", "somepass")
//      or die(mysql_error());
//  mysql_select_db("testDB",$conn) or die(mysql_error());
$conn = new mysqli("localhost", "root", "", "pawdb");

  
  //verify the topic exists
 $verify_topic = "SELECT topic_title FROM forum_topics WHERE topic_id = $_POST[topic_id]";
  $verify_topic_res = mysqli_query( $conn, $verify_topic);

  if (mysqli_num_rows($verify_topic_res) < 1) {
      //this topic does not exist
     $display_block = "<P><em>You have selected an invalid topic.
      Please <a href=\"topiclist.php\">try again</a>.</em></p>";
 } else {
      //get the topic title
     $topic_title = stripslashes(mysql_result($verify_topic_res,0,
         'topic_title'));
 
    //gather the posts
    $get_posts = "SELECT post_id, post_text, date_format(post_create_time,
          '%b %e %Y at %r') as fmt_post_create_time, post_owner from
          forum_posts where topic_id = $_GET[topic_id]
          order by post_create_time asc";
  
     $get_posts_res = mysqli_query($conn, $get_posts) ;

     //create the display string
     $display_block = "
     <P>Showing posts for the <strong>$topic_title</strong> topic:</p>
  
     <table width=100% cellpadding=3 cellspacing=1 border=1>
     <tr>
     <th>AUTHOR</th>
    <th>POST</th>
    </tr>";
 
   while ($posts_info = mysqli_fetch_array($get_posts_res)) {
         $post_id = $posts_info['post_id'];
         $post_text = nl2br(stripslashes($posts_info['post_text']));
        $post_create_time = $posts_info['fmt_post_create_time'];
       $post_owner = stripslashes($posts_info['post_owner']);

         //add to display
         $display_block .= "
        <tr>
        <td width=35% valign=top>$post_owner<br>[$post_create_time]</td>
         <td width=65% valign=top>$post_text<br><br>
         <a href=\"replytopost.php?post_id=$post_id\"><strong>REPLY TO
         POST</strong></a></td>
         </tr>";
    }
 
     //close up the table
    $display_block .= "</table>";
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

 
  <h2 align="center">Posts in Topic<?php print $display_block; ?></h1>
  
  </body>
  </html>