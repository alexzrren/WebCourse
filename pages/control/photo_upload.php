<link rel="stylesheet" type="text/css" href="../../css/control.css">
<div style="width: 880px; background-color:lightsteelblue; margin:auto; padding:20px 50px 40px 50px;">
<?php
$album = $_POST['album'];
if ((($_FILES["file"]["type"] == "image/gif")
        || ($_FILES["file"]["type"] == "image/jpeg")
        || ($_FILES["file"]["type"] == "image/png")))
{
    if($_FILES["file"]["size"] < (1*1024*1024)) {
        if ($_FILES["file"]["error"] > 0) {
            echo "Return Code: " . $_FILES["file"]["error"] . "<br/>";
        } else {
            if (file_exists("../../photo/" . $album . '/' . $_FILES["file"]["name"])) {
                echo '<h1 style="color: red; text-align: center; margin-top: 50px">UPLOAD FAILURE</h1>';
                echo '<p id="up-info">'.$_FILES["file"]["name"] . ' already exist</p>';
            } else {
                move_uploaded_file($_FILES["file"]["tmp_name"],
                    "../../photo/" . $album . '/' . $_FILES["file"]["name"]);
                echo '<h1 style="color: red; text-align: center;">UPLOAD SUCCESSFUL</h1>';
                echo '<p id="up-info">Filename: '.$_FILES["file"]["name"] . '</p>';
                echo '<p id="up-info">Type: '.$_FILES["file"]["type"] . '</p>';
                echo '<p id="up-info">Size: '.($_FILES["file"]["size"] / 1024 / 1024) . 'MB</p>';
            }
        }
    }
    else{
        echo '<h1 style="color: red; text-align: center; margin-top: 50px">UPLOAD FAILURE</h1>';
        echo '<p style="text-align: center;">Invalid file!</p>';
        echo '<p style="text-align: center;">(Size over 1Mb)</p>';
    }
}
else {
    echo '<h1 style="color: red; text-align: center; margin-top: 50px">UPLOAD FAILURE</h1>';
    echo '<p style="text-align: center;">Invalid File!</p>';
    echo '<p style="text-align: center;">(Valid file-suffix: .jpg  .jpeg  .gif  .png)</p>';
}
?>
    <span style="margin-right: 400px;"></span><span id="mgmt-btn"><a href="management.php?mgmt=2">RETURN</a></span>
</div>