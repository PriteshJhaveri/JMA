<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
   <meta name="viewport" content="width-device-width,initial-scale=1.0">
    <title>
      <?php print $title?>
    </title>
    <meta name="description" content="<?php print $description?>">
    
    <!-- Optional theme -->
<link rel="stylesheet" href="css/bootstrap-theme.min.css">

     <link rel="stylesheet" href="http://s.mlcdn.co/animate.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
<script src="https://use.fontawesome.com/10e6ab0213.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
function initialize() {
  var mapProp = {
    center:new google.maps.LatLng(51.508742,-0.120850),
    zoom:5,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>

</head>

<body>
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header" id="links">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#links">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand logo">Logo goes here</a>
            </div>
            <div class="collpase navbar-collapse" id="links">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="event-gallery.php">Events Gallery and Activities</a></li>
                    <li><a href="news-media.php">News and media </a></li>
                    <li><a href="notices.php">Notices</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Membership <span class="caret"></span>
                    </a>
                        <ul class="dropdown-menu">
                            <li role="separator" class="dropdown-header">Membership Details</li>
                            <li><a href="#">Membership Form</a></li>
                            <li><a href="#">Existing Member Details</a></li>
                            <li><a href="#">Membership Type</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Awards</a></li>
                    <li><a href="#">Terms and Conditions</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>
    <article id="main">