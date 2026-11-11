<?php
    require_once "classes/database.php";
    require_once "classes/ratings.php";

    $db = new Database();
    $conn = $db->connect();

    $rating = new Rating($conn);

    $username = $_POST["username"];
    $movie_title = $_POST["movie_title"];
    $rating_number = $_POST["rating"];

    $rating->addRating($username, $movie_title, $rating_number);

    header("Location: index.php");
    exit;
?>