?php

//Check if there is a server request method 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST['username'];
    $movie_title = $_POST['movie_title'];
    $rating = $_POST['rating'];
    echo "Thank you, your message has been recorded:";
    echo "<hr><h2>{$username}</h2><p>{$movie_title}</p><p>{$rating}</p>";
}

?>