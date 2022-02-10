<?php
include_once "db/connection.php";
include_once "nav.php";

?>
<h1 style="text-align: center;">Prideti filma</h1>
<div class="container">  
  <form id="contact" action='new_film.php' method="POST">

    <fieldset>
        <label>Filmo Pavadinimas</label>
        <input placeholder="Filmo Pavadinimas" type="text" name="film_title">
    </fieldset>

    <fieldset>
        <label>Paveiksliukas</label>
        <input placeholder="URL" type="url" name="image_uri">
    </fieldset>

    <fieldset>
        <label>Filmo Direktorius</label>
        <input placeholder="Filmo Direktorius" type="text" name="director">
    </fieldset>

    <fieldset>
        <label>Metai</label>
        <input placeholder="Metai" type="text" name="year">
    </fieldset>

    <fieldset>
        <label>Trumpas aprasymas</label>
        <textarea placeholder="įveskite aprašymą" type="text" name='description' rows='4' maxlength="1000"></textarea>
    </fieldset>

    <fieldset>
      <a href="update_film.php?id=<?=$row['id']?>"><button name="submit">Prideti</button></a>
    </fieldset>

  </form>
</div>
<?php

include_once "footer.php";
