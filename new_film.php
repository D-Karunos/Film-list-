<?php
include_once "db/connection.php";

if (isset($_POST)) {
    $film_title = $_POST['film_title'];
    $image_uri = $_POST['image_uri'];
    $director = $_POST['director'];
    $year = $_POST['year'];
    $description = $_POST['description'];

    try {
        $sql = "INSERT INTO film_list (film_title, image_uri, director, year, description)
        VALUES ('$film_title', '$image_uri', '$director', '$year', '$description')";

    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header('Location: index.php');
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
    } catch (PDOException $e) {
        echo "Error updating details" . $e->getMessage();
    }
}