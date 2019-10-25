<?php

require __DIR__ .'/functions.php';
require __DIR__ .'/data.php';


// This is the file where you can keep your HTML markup. We should always try to
// keep us much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP file altogether.

/* 
The authors and news feed items don't have to be within the same array 
but some sort of connection should exist between a news feed item 
and it's author. The news feed items should be ordered based on 
the published date, so the latest news feed item should go on 
top and vice versa. */


usort ($articles,'compareDates');

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
        <header>
            <h2>News Feed</h2>

            <!-- <nav>
                <a href="#">Home</a>
                <a href="#"></a>
                <a href="#"></a>
            </nav> -->

        </header>

        
        <?php foreach ($articles as $article): ?>
        
        <?php $authorName = getName($article['author'],$authors); ?>

            <article>
                <h1><?php echo $article['title']; ?></h1>
                <p><?php echo $article['content']; ?></p>
                <div class="publishedInfo">
                    <p>	✏️<?php echo $authorName;?></p>
                    <p>Published: <?php echo $article['publishedDate'];?></p>
                    <p><?php echo $article['likes']; ?> 👍</p>
                    
                </div>
            </article>
        <?php endforeach; ?>
    </body>
</html>
