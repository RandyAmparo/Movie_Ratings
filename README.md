# PHP Header and Footer Homework

A simple movie rating website built with PHP, HTML, CSS, and MySQL.

## Files
- `header.php`: shared page header and navigation
- `footer.php`: shared footer and copyright
- `index.php`: rating form and list of ratings
- `about.php`: second content page
- `save_review.php`: saves a submitted rating
- `classes/database.php`: MySQL connection
- `classes/ratings.php`: database queries
- `styles.css`: site appearance

## Setup
1. Start Apache and MySQL in XAMPP.
2. In phpMyAdmin, create/import the `movie_ratings` database and its `ratings` table. You can use your existing SQL file, but be aware it starts with `DROP DATABASE IF EXISTS` and will erase existing data if re-run.
3. Check `classes/database.php` and update the MySQL username, password, host, and port for your local setup. The example assumes XAMPP root with an empty password.
4. Put this folder inside `D:\xampp\htdocs\`.
5. Open `http://localhost/movie_homework/index.php` (adjust the URL if you rename the folder).

## How to use
Enter your name, movie title, and rating from 1 to 5, then submit. The rating will appear under Previous Ratings.
