 <html>
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

    <h2 align="center">Topics in Forum</h2>
  <!-- <h4 align="center"><?php print $msg; ?></h4> -->
  <h4 align="center">
 <P>Would you like to <a href="addtopic.html">Add a Topic</a>?</p></h4>
 </body>
 
   
</html>
    
    <?php
//connect to server and select database
//  $conn = mysql_connect("localhost", "root", "")
//     or die(mysql_error());
// mysql_select_db("pawdb",$conn) or die(mysql_error());
$conn = new mysqli("localhost", "root", "", "pawdb");
 //gather the topics
 $get_topics = "SELECT topic_id, topic_title,
 date_format(topic_create_time, '%b %e %Y at %r') as fmt_topic_create_time,
 topic_owner from forum_topics order by topic_create_time desc";
 $get_topics_res = mysqli_query($conn, $get_topics) ;

 if (mysqli_num_rows($get_topics_res) < 1) {
    //there are no topics, so say so
    $msg = "<P>No topics exist.</p>";
 } else {
    //create the display string
//    $display_block = "
    echo '<table cellpadding=3 cellspacing=1 border=1>
    <tr>
    <th>TOPIC TITLE</th>
   <th># of POSTS</th>
    </tr>';
 
    while ($topic_info = mysqli_fetch_array($get_topics_res)) {
        $topic_id = $topic_info['topic_id'];
       $topic_title = stripslashes($topic_info['topic_title']);
        $topic_create_time = $topic_info['fmt_topic_create_time'];
         $topic_owner = stripslashes($topic_info['topic_owner']);
  
       //get number of posts
        $get_num_posts = "SELECT count(post_id) from forum_posts
             where topic_id = $topic_id";
        $get_num_posts_res = mysqli_query($conn, $get_num_posts);
        //  $result = mysqli_query($get_num_posts_res,0,'count(post_id)');
        //  $num_posts = mysqli_fetch_array($result);
        $num_posts = mysql_result($get_num_posts_res ,0,'count(post_id)');
           
         //add to display
         $display_block = "<tr>       
          <td><a href=\"showtopic.php?topic_id=$topic_id\">
         <strong>$topic_title</strong></a><br>
         Created on $topic_create_time by $topic_owner</td>
         <td align=center>$num_posts</td>
         </tr>";
     }
 
   //close up the table
    $display_block .= "</table>";
 }
 ?>



