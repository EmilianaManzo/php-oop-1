<?php 
include_once __DIR__ . '/partials/head.php';
require_once __DIR__ . '/Model/Movies.php';

$matrix = new Movie ('Matrix' , 'Matrix', 'Sci-fi', 'lorem lorem lorem');

$interstellar = new Movie ('Interstellar' , 'Interstellar', 'Sci-fi', 'FILM PREFE X LA VITA');

$le_pagine_della_nostra_vita = new Movie ('The Notebook' , 'Le Pagine della Nostra Vita ', 'Romantico', 'lorem lorem lorem lorem');

var_dump($matrix);
var_dump($interstellar);
var_dump($le_pagine_della_nostra_vita);




?>

<body>
  <div class="container">
    <div class="film">
      <h1></h1>
      <p></p>
    </div>
  </div>
</body>
</html>