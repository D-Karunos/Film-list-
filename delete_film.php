<?php
include_once "db/connection.php";

$id = $_GET['id'];

if (isset($_GET)) {
    $sql = "DELETE FROM film_list WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
  header('Location: index.php');
} else {
  echo "Error deleting record: " . $conn->error;
}
}