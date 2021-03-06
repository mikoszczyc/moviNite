
<!-- Movies Section -->
<section id="movies" class="movies-section bg-black">
  <div class="container">
    <?php
    if (@$_SESSION['userType'] === 1) {
      include 'php/adminPanel.php';
    }
     ?>
    <!-- Cards with Movies -->
    <div class="row mt-5 justify-content-center">
<?php
// Extract data about movies into an array
  $sqlMovies = "SELECT * FROM movies";
  $resultMovies = mysqli_query($conn, $sqlMovies);
  $movieId = array();
  if (mysqli_num_rows($resultMovies) > 0) {
    while ($row = mysqli_fetch_assoc($resultMovies)) {
      $movieId[] = $row;
    }
  }
  foreach ($movieId as $datatitle) {
    $movieID=$datatitle['movieID'];
    $movieDatatitle=$datatitle['datatitle'];

echo <<< CARDS
      <div class="card card-movie-poster bg-blacker text-white text-center  text-align-middle mx-1 mb-2">
        <div class="card-body">
        <a data-toggle="modal" href="#myModal$movieID"><img class="card-img " src="img/movieCovers/$movieDatatitle.jpg"></a>
        </div>
      </div>
CARDS;
}
 ?>
</div>
</div>
</section>
