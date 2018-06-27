<?php
if (isset($_POST['delete'])) {
    $filename = $_POST['fileToDelete'];
    $filePath = dirname(__FILE__) . "\\files\\" . $filename;
    if (file_exists($filePath)) { // check if file exists, way of handling error on file missing 
        unlink($filePath);
//        header('location:download.php');
        $message = "file was successfully deleted";
    }
}
?>
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
            <p><?php if (isset($message)) echo $message; // message to the user on success delete ?></p>
            <table>
                <tr>
                    <th>S/N</th>
                    <th>File name</th>
                    <th> Delete File</th>
                </tr>
                <?php
                $directory = dirname(__FILE__) . "\\files\\";
                $r = scandir($directory);
                for ($i = 2; $i < count($r); $i++) {
                    ?>

                    <tr>
                        <td><?php echo $i - 1; ?></td>
                        <td><a href="files/<?php echo $r[$i] ?>"><?php echo $r[$i]; ?></a></td>
                        <td>
                            <form method="post" >
                                <input name="delete" type="submit" value="Delete Now!">
                                <input type="hidden" name="fileToDelete"  value="<?php echo $r[$i]; ?>">
                            </form>
                        </td>
                    </tr>
                    <?php
                };
                ?>

            </table>
        </div>




    </body>
</html>
