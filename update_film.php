<?php
include_once "db/connection.php";

$id = $_GET['id'];

if (isset($_POST)) {

    if (!empty($_POST['id'])) {
        $id=$_POST['id'];
        $film_title = $_POST['film_title'];
        $image_uri = $_POST['image_uri'];
        $director = $_POST['director'];
        $year = $_POST['year'];
        $description = $_POST['description'];
        try {
            $sql = "UPDATE film_list 
        SET film_title = '$film_title',
        image_uri = '$image_uri',
        director = '$director',
        year = '".$year."',
        description = '$description'
        WHERE id='$id'";

            $conn->query($sql);
            header('Location: index.php');

        } catch (PDOException $e) {
            echo "Error updating details" . $e->getMessage();
        }
    }
}