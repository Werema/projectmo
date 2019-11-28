<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>ADELAIDE - ADELAIDE</title>

  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading"><a href="facebook.com">ADELAIDE </a></div>
      <div class="list-group list-group-flush">
        <a href="index.php" class="list-group-item list-group-item-action bg-light">Dashboard</a>
        <a href="events.php" class="list-group-item list-group-item-action bg-light">Events</a>
        <a href="profile.php" class="list-group-item list-group-item-action bg-light">Profile</a>
        
      </div>
    </div>

  
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?logout='1'">Log Out</a>
            </li>
           
          </ul>
        </div>
      </nav>

      <div class="container-fluid">
      <div id="photos">
  <ul id="photo-gallery">
    <li>
      <a href="images/1.jpeg">
        <img src="images/1.jpeg">
      </a>
    </li>
    <li>
    <a href="images/2.jpeg">
        <img src="images/2.jpeg">
      </a>
    </li>
    <li>
    <a href="images/3.jpeg">
        <img src="images/3.jpeg">
      </a>
    </li>
    <li>
    <a href="images/4.jpeg">
        <img src="images/4.jpeg">
      </a>
    </li>
    <li>
    <a href="images/5.jpeg">
        <img src="images/5.jpeg">
      </a>
    </li>
    <li>
    <a href="images/6.jpeg">
        <img src="images/6.jpeg">
      </a>
    </li>
    <li>
    <a href="images/7.jpeg">
        <img src="images/7.jpeg">
      </a>
    </li>
    <li>
    <a href="images/8.jpeg">
        <img src="images/8.jpeg">
      </a>
    </li>
    <li>
    <a href="images/9.jpeg">
        <img src="images/9.jpeg">
      </a>
    </li>
  </ul>
</div>
      </div>
    </div>
  

  </div>
  
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });

    
var $overlay = $('<div id="overlay"></div>');
var $image = $("<img>");

$overlay.append($image);

$("body").append($overlay);

  $("#photo-gallery a").click( function(event) {
    event.preventDefault();
    var imageLocation = $(this).attr("href");

  
    $image.attr("src", imageLocation);

    $overlay.show();
  } );

  $("#overlay").click(function() {
    $( "#overlay" ).hide();
  });

  </script>

</body>

</html>
