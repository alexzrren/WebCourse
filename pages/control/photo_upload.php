<?php
$album = $_POST['album'];
if ((($_FILES["file"]["type"] == "image/gif")
        || ($_FILES["file"]["type"] == "image/jpeg")
        || ($_FILES["file"]["type"] == "image/png"))
    && ($_FILES["file"]["size"] < 3*1024*1024)) {
    if ($_FILES["file"]["error"] > 0) {
        echo "Return Code: " . $_FILES["file"]["error"] . "<br/>";
    } else {
        echo "Upload: " . $_FILES["file"]["name"] . "<br />";
        echo "Type: " . $_FILES["file"]["type"] . "<br />";
        echo "Size: " . ($_FILES["file"]["size"] / 1024/1024) . " Mb<br />";

        if (file_exists("../../photo/". $album . $_FILES["file"]["name"])) {
            echo $_FILES["file"]["name"] . " already exists. ";
        } else {
            move_uploaded_file($_FILES["file"]["tmp_name"],
                "../../photo/". $album . $_FILES["file"]["name"]);
            echo '<h1 style="color: red;">Photo ',$_FILES["file"]["name"],' has successfully uploaded!</h1>';
        }
    }
} else {
    echo "Invalid file";
}