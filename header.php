<?php // Shared header used by every page. ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo htmlspecialchars($pageTitle ?? 'Movie Ratings'); ?> | Marquee Cinema</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<header class="site-header">
    <div class="container">
        <h1>🎬 Marquee Cinema</h1>
        <nav><a href="index.php">Home</a> <a href="about.php">About</a></nav>
    </div>
</header>
