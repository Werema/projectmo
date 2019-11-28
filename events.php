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
      <div class="sidebar-heading">ADELAIDE </div>
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
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="upload.php">Upload File</a>
                <a class="dropdown-item" href="uploads2.php">Uploads by the public</a>
                <div class="dropdown-divider"></div>
                
              </div>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid">
    
<body>
<h2>Email adress</h2>
		<p><a href="https://plus.google.com/115757126498171983931">awerema55@gmail.com</a></p>
		<h2>Instagram</h2>
		<p><a href="https://www.instagram.com/_adelaide_55/">@adelaide_55</a></p>
		<h2>Twiter</h2>
		<p><a href="https://twitter.com/_ADELAIDE_55">@_adelaide_55</p>
		<h2>Facebook</h2>
		<p><a href="https://www.facebook.com/we.josh">adelaide photography</p>
        </body>
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
