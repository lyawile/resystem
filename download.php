<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $directory = dirname(__FILE__) . "\\files\\";
        $r = scandir($directory);
        for ($i = 2; $i < count($r); $i++) {
            ?>
            <a href="files/<?php echo $r[$i] ?>"><?php echo $r[$i]; ?></a>
            <?php
        };
        ?>
    </body>
</html>
