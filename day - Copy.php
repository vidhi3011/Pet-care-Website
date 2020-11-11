<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
 
  <style>
    #map{
      height:500px;
      width:100%;
    }
  </style>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PawPal || Locate Daycare</title>
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

<body>


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

  <h1>Animal Daycare in Mumbai</h1>
  <div id="map"></div>
  <script>
    function loadMap(){
      // Map options
      var options = {
        zoom:11,
        center:{lat:19.0760,lng:72.8777}
      }

      // New map
      var map = new google.maps.Map(document.getElementById('map'), options);

      // Listen for click on map
      google.maps.event.addListener(map, 'click', function(event){
        // Add marker
        addMarker({coords:event.latLng});
      });

      /*
      // Add marker
      var marker = new google.maps.Marker({
        position:{lat:42.4668,lng:-70.9495},
        map:map,
        icon:'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png'
      });

      var infoWindow = new google.maps.InfoWindow({
        content:'<h1>Lynn MA</h1>'
      });

      marker.addListener('click', function(){
        infoWindow.open(map, marker);
      });
      */

      // Array of markers
      var markers = [
        {
          coords:{lat:19.0826,lng:72.8534},
          //iconImage:'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
          content:'<h1>Pawcity</h1><br><h3> 075060 58781</h3><br>'
        },
        {
          coords:{lat:19.1466,lng:72.8248},
          content:'<h1>Heaven For Pets</h1><br><h3> +91 89768 18646</h3><br><h4>11am - 5pm</h4>'
        },
        
        {
          coords:{lat:18.9805,lng:72.8515},
          content:'<h1>The Bark Club</h1><br><h3>099303 01200</h3><br><h4>Open 24 hours</h4>'
        },
        {
          coords:{lat:19.1609,lng:72.8546 },
          content:'<h1>Paw Paradise - Dog Boarding | Training | Grooming</h1><br><h3>+91 9867520843</h3><br><h4>10am - 10pm</h4>'
        },
        {
          coords:{lat:19.2307,lng:72.8526},
          content:'<h1>K Doggie Daycare</h1><br><h3> 087678 76466</h3><br><h4>Open 24 hours</h4>'
        },
        {
          coords:{lat:19.1481,lng:72.8361},
          content:'<h1>PETSITTERZ-MUMBAI</h1><br><h3> 098216 24079</h3><br><h4>Open 24 hours</h4>'
        }
      ];

      // Loop through markers
      for(var i = 0;i < markers.length;i++){
        // Add marker
        addMarker(markers[i]);
      }

      // Add Marker Function
      function addMarker(props){
        var marker = new google.maps.Marker({
          position:props.coords,
          map:map,
          //icon:props.iconImage
        });

        // Check for customicon
        if(props.iconImage){
          // Set icon image
          marker.setIcon(props.iconImage);
        }

        // Check content
        if(props.content){
          var infoWindow = new google.maps.InfoWindow({
            content:props.content
          });

          marker.addListener('click', function(){
            infoWindow.open(map, marker);
          });
        }
      }
    }
  </script>
  <script async defer
    src="https://maps.googleapis.com/maps/api/js?AIzaSyCDEcuB2iyxfmAcDHje7tud-YTUlOdJucQ&callback=loadMap">
    </script>
</body>
</html>