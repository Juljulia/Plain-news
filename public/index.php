<?php

require __DIR__ .'/functions.php';
require __DIR__ .'/data.php';

usort ($articles,'compareDates');

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Karla&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/sanitize.css@11.0.0/sanitize.css">
        <title>Plain news</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <header>
            <nav>
                <h2 class = "headerText">News</h2>
                <a href="#">Home</a>
                <a href="#">Category</a>
            </nav>
        </header>

        <div class="wrapper">
            <?php foreach ($articles as $article): ?>

            <?php $authorName = getName($article['authorId'],$authors); ?>

                <article>
                    <h1 class="title"><?php echo $article['title'];?></h1>
                    <div class="publishedInfo">
                        <p><?php echo $authorName;?></p>
                        <p>🕒<?php echo $article['publishedDate'];?></p>
                    </div>
                    <p class ="content"><?php echo $article['content'];?></p>
                    <p class= "likes">👍<?php echo $article['likes'];?></p>
                </article>
            <?php endforeach?>
        </div>
    </body>
</html>
