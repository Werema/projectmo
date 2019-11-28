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
          </ul>
        </div>
      </nav>

      <div class="container-fluid">
    

<head>
  <title>adelaide visual</title>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <h1>ADELAIDE VISUAL</h1>
          <h2>A company by Ally</h2>
        </div>
      </div>
     
    </div>
    <div id="content_header"></div>
    <div id="site_content">
	  <div id="sidebar_container">
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <h3>History</h3>
            <h4>Founded on</h4>
            <h5>December 1st, 2016</h5>
            <p>The Company Adelaide Visual was founded and co founded by Ally.</p>
          </div>
          <div class="sidebar_base"></div>
        </div>
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <h3>Our Motto</h3>
			<p>Visual accuracy through capture.</p>
          </div>
          <div class="sidebar_base"></div>
        </div>
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <h3>Our Vision</h3>
              <p>Take Photos</p>
			  <p>Make Memories</p>
			  <p>Leave Footprints</p>
          
          </div>
          <div class="sidebar_base"></div>
        </div>
      </div>
      <div id="content">
        <h1>Who is Adelaide</h1>
        <p>Adelaide visual is a Photography company founded in the year 2016 by Ally Werema, a young entepreneur driven by his love and passion for photography</p>
		<h2>About Ally;<h2>
		<p>Ally was born in the year 1998.</p>
		<p>Born and raised in Nairobi.</p>
		<p>Ally began his Passion for photography in the year 2008 when he first saw himself on a photograph and decided that that was his calling.</p>
      </div>
	  </div>
    <div id="content_footer"></div>
    <div id="footer">
      
      <p>Copyright &copy; adelaide photography |</p>
    </div>
  </div>
</body>

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
