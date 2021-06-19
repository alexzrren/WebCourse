<div id="sys-name" style="margin-top: 20px;">
    <span style="border-bottom: 3px darkblue solid; font-size: 20px; font-weight: bold;">Photo Management</span>
</div>
<form action="photo_upload.php" method="post" enctype="multipart/form-data" style="margin:20px">
    <div style="margin-bottom: 15px;">
    <span>Upload Photo:</span>
    <input type="file" name="file" id="file">
    </div>
    <div style="margin-bottom: 15px;">
    <span style="margin-right: 10px; margin-bottom: 15px;">To Album</span>
    <select name="album">
        <?php
$fh = opendir('../../photo');
while( ($filename = readdir($fh)) !== false )
{
      if($filename != "." && $filename != "..")
      {
      echo '<option value=',$filename,'>',$filename,'</option>';
      }
}
        ?>
    </select>
    </div>
    <input type="submit" name="submit" value="Submit">
</form>