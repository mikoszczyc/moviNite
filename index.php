<?php
  session_start();
  include_once 'php/dbh.inc.php';
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mikołaj Koszczyc">

    <title>MoVinite</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/grayscale.min.css" rel="stylesheet">

  </head>

  <body id="page-top">
<?php
    include 'php/nav.php';
    include 'php/header.php';
    include 'php/about.php';
    include 'php/movies.php';
    // include 'php/signup.php';
    include 'php/contact.php';
    include 'php/footer.php';
    include 'php/bootstrap.php';
    include 'php/modalCard.php';
?>
<script src="js/grabThisId.js" charset="utf-8"></script>
  </body>

</html>