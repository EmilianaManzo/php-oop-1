<?php 
include_once __DIR__ . '/partials/head.php';
require_once __DIR__ . '/Model/Movies.php';
include_once __DIR__ . '/Model/db.php';

$belli=[];

foreach ($movies as $movie){
  $film = new Movie ($movie['original_title'] , $movie['title'] ,  $movie['genre'] ,  $movie['plot']);
  $belli[] = $film;
}

var_dump($belli);
?>

<body>
  <div class="container" id="app">
    <div class="row">
      <?php foreach ($belli as $movie) : ?>
      <div class="col">
        <div class="card">
          <h3><?php $movie ->getFullTitle() ?></h3>

          <p>
          <?php foreach($movie->genre as $generi): ?>
            <?php echo $generi ?>
          <?php endforeach?>
          </p>
          <p><?php echo $movie->plot ?></p>
        </div>
      </div>
      <?php endforeach ?>
    </div>
  </div>
</body>
</html>