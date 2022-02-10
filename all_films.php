<?php
include_once "db/connection.php";

function shorten($string, $maxLength) {
  return substr($string, 0, $maxLength);
}

$films = $conn -> query('SELECT * FROM `film_list` WHERE 1;');


foreach ($films as $film): 
?>

<div class="card">

  <img src="<?=$film['image_uri']?>" style="width:100%">

  <h1><?=$film['film_title']?></h1>

  <p class="title"><?=$film['director']?></p>

  <p><?=$film['year']?></p>

  <p><?=shorten ($film['description'],30).'...'?></p>

  <p><a href="single_film.php?id=<?= $film['id']?>"><button>Placiau</button></a></p>
  
</div>

<?php endforeach; ?>