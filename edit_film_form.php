<?php
include_once "db/connection.php";
include_once "nav.php";

$id=$_GET['id'];

$query = mysqli_query($conn, "select * from film_list where id ='$id'");
while ($row=mysqli_fetch_array($query))
{
?>
<h1 style="text-align: center;">Redaguoti filma</h1>
<div class="container">  
  <form id="contact" action='update_film.php?id=<?= ($row['id']); ?>' method="POST">

    <input type="hidden" name='id' value='<?= ($row['id']); ?>'>
    <fieldset>
        <label>Filmo Pavadinimas</label>
        <input placeholder="Filmo Pavadinimas" type="text" name="film_title" value="<?=$row['film_title']?>">
    </fieldset>

    <fieldset>
        <label>Paveiksliukas</label>
        <input placeholder="URL" type="url" name="image_uri" value="<?=$row['image_uri']?>">
    </fieldset>

    <fieldset>
        <label>Filmo Direktorius</label>
        <input placeholder="Filmo Direktorius" type="text" name="director" value="<?=$row['director']?>">
    </fieldset>

    <fieldset>
        <label>Metai</label>
        <input placeholder="Metai" type="text" name="year" value="<?=$row['year']?>">
    </fieldset>

    <fieldset>
        <label>Trumpas aprasymas</label>
        <textarea placeholder="įveskite aprašymą" type="text" name='description' rows='4' maxlength="1000"><?= ($row['description']); ?></textarea>
    </fieldset>

    <fieldset>
      <a href="update_film.php?id=<?=$row['id']?>"><button name="submit">Issaugoti</button></a>
    </fieldset>

  </form>
</div>
<?php
}
include_once "footer.php";
