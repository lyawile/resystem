<!DOCTYPE html>
<html>
    <head>
        <style type="text/css">
            table{
                /*border: 1px solid black;*/
                text-align: left;
                width: 100%;
            }
            td, th{
                border: 1px solid black;
            }
            tr:first-child{
                background-color: #f5f5f5;
            }
            .outer-wrapper{
                width:1000px;
                margin: 0 auto;
            }

        </style>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div class="outer-wrapper">
            <p>
                <a href="upload.php">Upload more files</a>
            </p>
            <table>
                <tr>
                    <th>S/N</th>
                    <th>File name</th>
                </tr>
                <?php
                $directory = dirname(__FILE__) . "\\files\\";
                $r = scandir($directory);
                for ($i = 2; $i < count($r); $i++) {?>
                    
                    <tr>
                        <td><?php echo $i - 1; ?></td>
                        <td><a href="files/<?php echo $r[$i] ?>"><?php echo $r[$i]; ?></a></td>
                    </tr>
                    <?php
                };
                ?>

            </table>
        </div>




    </body>
</html>
