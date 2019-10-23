<?php

require __DIR__ .'/data.php'

// This is the file where you can keep your HTML markup. We should always try to
// keep us much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP file altogether.

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Karla&display=swap" rel="stylesheet">
        <title>Plain news</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h2>News Feed</h2>

        <?php foreach ($articles as $article): ?>
        <article>
            <h1><?php echo $article['title']; ?></h1>
            <p><?php echo $article['content']; ?></p>
            <p><?php echo $article['publishedDate']; ?></p>
            <p><?php echo $article['likes']; ?></p>
        </article>
        <?php endforeach; ?>
       

    </body>
</html>
