<?php
    require_once "classes/database.php";
    require_once "classes/ratings.php";

    $db = new Database();
    $conn = $db->connect();

    $rating = new Rating($conn);

    $ratings = $rating->getRatings();

?>
<?php
    $pageTitle = "Ratings";
    include "header.php";
?>
        <h1>Post a rating</h1>
        <hr>
        <form action="save_rating.php" method="POST">
            <input name="username" type="text" placeholder="Enter name..." required>
            <br>
            <textarea name="movie_title" rows="2" cols="20" placeholder="Enter movie title that you have watched..." required></textarea>
            <br>
            <input name="rating" type="text" placeholder="Rate it from 1 to 5 rating..." required>
            <button type="submit">Submit</button>
        </form>

        <h2>Previous Ratings</h2>
        <?php
        foreach($ratings as $row):
        ?>
        <p>
            <strong>
                <?php
                    echo htmlspecialchars($row["user_name"]);
                ?>
            </strong>
            <?php
                echo htmlspecialchars($row["rating_number"]);
            ?>
        </p>
        <hr>
        <?php
            endforeach;
        ?>
    



    <?php
    include "footer.php";
?>