<!DOCTYPE html>
<html>
<head>
  <title>Upload</title>
</head>
<body>
<form method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="file" id="file">
  <input type="submit" name="upload" value="Upload">
</form>

<?php
if (isset($_POST["upload"])) {
  $target_dir = "Page/uploads/";
  $target_dir_2 = "uploads/";

  $file_name = basename($_FILES["file"]["name"]);

  $target_file = $target_dir . $file_name;
  $target_file_2 = $target_dir_2 . $file_name;

  if (!file_exists($target_file) || !file_exists($target_file_2)) {
    move_uploaded_file($_FILES["file"]["tmp_name"], $target_file); //upload tu index.php
    move_uploaded_file($_FILES["file"]["tmp_name"], $target_file_2); //upload tu upload.php
    echo "Success";
  }
}
?>
</body>
</html>