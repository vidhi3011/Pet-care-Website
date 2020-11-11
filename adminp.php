<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PawPal || Admin</title>
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
    <!-- table CSS -->
    <link rel="stylesheet" href="css/tablecss.css">
    

    <style type="text/css">
h2{
    color: #082B49;
  font-family: "Quicksand", sans-serif;
  font-weight: 400;
  text-align: center;
}
</style>
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
                                        <a href="adminp.php" class="nav-link"><u>Dashboard</u></a>
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

    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-content-center">
                <div class="col-lg-7 col-xl-6">
                    <div class="banner_text">
                        <h5>Welcome to PawPal</h5>
                        <h1>Give Aimals
                            Best Care</h1>
                        <a href="#" class="btn_1">The NGO Dashboard</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br><br><br>
    <a align="center" href="putforadopt.php"><h1><u>Click here to put for adoption</u></h1></a><br><br><br><br>
    <h1 align="center"> DATABASE FOR POTENTIAL PETS</h1>
    <div class="table-wrapper">
    <table class="fl-table" align="center">
        <thead>
        <tr>
            <th>ID NO</th>
            <th>Animal</th>
            <th>Breed</th>
            <th>Name</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Vaccine</th>
            <th>Image</th>
            <th>Actions</th>
            
        </tr>
        </thead>
   
    
    <?php

$db = mysqli_connect('localhost:3306','root','','pawdb');  
if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

$records = mysqli_query($db,"SELECT * from putforadoption"); 
$foster = mysqli_query($db, "SELECT * from adopt");


while($rows = mysqli_fetch_array($records))
{
?>

    

                
        <td>
        <tr>
            <td><?php echo $rows['petid'];?></td>
            <td><?php echo $rows['pet_kind'];?></td>
            <td><?php echo $rows['pet_breed'];?></td>
            <td><?php echo $rows['pet_name'];?></td>
            <td><?php echo $rows['pet_age'];?></td>
            <td><?php echo $rows['pet_gender'];?></td>
            <td><?php echo $rows['pet_vaccine'];?></td>
            <td><img src="<?php echo $rows['image_path'];?>" width="250" height="200"/></td>
            <td>
                <a href="edit_animal.php?petid=<?php echo $rows["petid"]; ?>" class="link"><img alt='Edit' title='Edit' src='img/edit.png' width='30px' height='30px' hspace='10' /></a> 
                <a href="delete_animal.php?petid=<?php echo $rows["petid"]; ?>"  class="link"><img alt='Delete' title='Delete' src='img/delete.png' width='30px' height='30px'hspace='10' /></a>
            </td>
        </tr>
      
       
</td>
<?php
}
?> 
</table>
    </div>


<br/><br/><br/><br/> 
<h1 align="center"> DATABASE FOR POTENTIAL FOSTER PARENTS</h1>
<table class="fl-table" align="center">
<thead>
<tr>
    <th>Pet ID NO</th>
    <th>Parent ID</th>
    <th>Parent Name</th>
    <th>Parent Age</th>
    <th>Parent Address</th>
    <th>Parent Email</th>
    <th>Action</th>
  
    
    
</tr>
</thead>

<?php

while($rows1 = mysqli_fetch_array($foster))
{        

?>

        
<tbody>
<tr>
    <td><?php echo $rows1['pet_id'];?></td>
    <td><?php echo $rows1['cust_id'];?></td>
    <td><?php echo $rows1['name'];?></td>
    <td><?php echo $rows1['age'];?></td>
    <td><?php echo $rows1['address'];?></td>
    <td><?php echo $rows1['email'];?></td>
    <td>
    <script>
    $('input[type="radio"][name="a"]').click(function() {
  $('input[name="a"]:not(:checked)').attr("disabled", true); 
});</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<form>
  <input type="radio" name="a" value="Accepted" /><a href="mailto:<?php echo $rows1['email'];?>?subject=Result%20of%20your%20application%20to%20Pawpal&body=Congratulations!%20your%20application%20to%20adopt%20the%20pet%20is%20accepted.%20Please%20come%20to%20the%20center%20with%20the%20documents%20within%2036%20hours%20of%20receiving%20this%20mail.">ACCEPTED</a><br>
  <input type="radio" name="a" value="Rejected" /><a href="mailto:<?php echo $rows1['email'];?>?subject=Result%20of%20your%20application%20to%20Pawpal&body=We%20are%20sorry%20to%20inform%20that%20your%20application%20to%20adopt%20a%20pet%20from%20Pawpal%20is%20rejected.">REJECTED</a>

</form></td></tr>
</tbody>

<?php
}
mysqli_close($db);  // close connection ?>

</table>
</div>
<br><br><br><br>

<h1 align="center"> DONATIONS</h1>
    <div class="table-wrapper">
    <table class="fl-table" align="center">
        <thead>
        <tr>
            <th>ID NO</th>
            <th>Money</th>
        </tr>
        </thead>
        
   
    
    <?php

$db = mysqli_connect('localhost:3306','root','','pawdb');  
if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

$don = mysqli_query($db,"SELECT * from donate"); 
while($row = mysqli_fetch_array($don))
{
?>

        
        <td>
        <tr>
            <td><?php echo $row['mid'];?></td>
            <td><?php echo $row['moneyy'];?></td>
            </tr>
      
       
</td>
<?php

}

?> 
</table>
<?php
$db = mysqli_connect('localhost:3306','root','','pawdb');  
if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}


$plus = "SELECT SUM(moneyy) AS value_sum FROM donate";
$result = $db->query($plus);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<h2>TOTAL COLLECTION IS :  Rs.". $row["value_sum"]."</h2>";
    }
} else {
    echo "0 results";
}
$db->close();

?>

    </div>


<br/><br/><br/><br/> 



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
                                <!-- <div class="input-group align-items-center"> -->
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
Copyright &copy;<script>document.write(new Date().getFullYear());</script>  <i class="ti-heart" aria-hidden="true"></i>
</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    
    <!-- footer part end-->

    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- counterup js -->
    <script src="js/jquery.counterup.min.js"></script>
    <!-- waypoints js -->
    <script src="js/waypoints.min.js"></script>
    <!-- easing js -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- particles js -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
</body>

</html>