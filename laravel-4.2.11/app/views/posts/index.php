<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Posts list <a href="./posts/create">create a new post</a></h1>
        <ul>
            <?php foreach($posts as $post){ ?>
            <h2><a href="./posts/<?php echo $post->id?>">
                <?php echo $post->title ?></a></h2>
            <p><?php echo $post->body ?></p>
            <?php } ?>
        </ul>
    </body>
</html>