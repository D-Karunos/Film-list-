<?php
include_once "nav.php";
include_once "db/connection.php";

$id=$_GET['id'];

$query = mysqli_query($conn, "select * from film_list where id ='$id'");
while ($row=mysqli_fetch_array($query))
{
    
?>
<div class="profile">

    <div class="content">
        <div class="picture">
            <img src="<?=$row['image_uri'];?>">
        </div>

        <div class="text">
            
            <h1><?=$row['film_title'];?></h1>

            <h2><?=$row['director'];?></h2>

            <h3><?=$row['year'];?></h3>

            <p><?=$row['description'];?></p>

        </div>


        
        <div class="buttons">

            <div class="single_button">
                <a href="index.php"> <button>Atgal</button> </a>
            </div>

            <div class="single_button">
                <a href="edit_film_form.php?id=<?=$row['id']?>"><button>Redaguoti</button></a>
            </div>

            <div class="single_button">
               <a href="delete_film.php?id=<?=$row['id']?>"> <button onclick="return confirm('Ar tikrai norite istrinti?')">Trinti</button> </a>
            </div>

        </div>

    </div>
</div>



<?php
}
include_once "footer.php"
?>