<!DOCTYPE HTML>
<html>
    <link rel="stylesheet" type="text/css" href="style.css">
    <head>
        <title>

        </title>
    </head>
    <body>

        <div class ="uploadform">
            <?php
            $upload = 'UPLOAD NOTES MENU';
            echo $upload;
            ?>

            <form action="upload.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
                <input type="file" name="myFile">
                <input type="submit" name="btn_upload" value="Upload File">
            </form>
        </div>

        <?php
        define("UPLOAD_DIR", "C:/xampp/htdocs/uploadform/uploaded/");

        if (!empty($_FILES["myFile"])) {
            $myFile = $_FILES["myFile"];
            if ($myFile["error"] !== UPLOAD_ERR_OK) {
                echo "<p>An error occurred.</p>";
                exit;
            }

            // To ensure that a file name does not contain any special character
            $name = preg_replace("/[^A-Z0-9._-]/i", "_", $myFile["name"]);

            // Renaming  file with a suffix at end counting when uploaded even if are the same
            $i = 0;
            $parts = pathinfo($name);
            while (file_exists(UPLOAD_DIR . $name)) {
                $i++;
                $name = $parts["filename"] . "-" . $i . "." . $parts["extension"];
            }

            // to save file from temporary directory
            $success = move_uploaded_file($myFile["tmp_name"], UPLOAD_DIR . $name);
            echo "<h4>successfully uploaded your file Sir!!</h4>";
            if (!$success) {
                echo "<p>Unable to save file.</p>";
                exit;
            }

            // The permission of files here for understand letes reviews the linux chmod as taught by Kilma
            chmod(UPLOAD_DIR . $name, 0644);
        }
        ?>

    </body>
</html>