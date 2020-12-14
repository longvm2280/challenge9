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
  $upload_ok = 1;

  $file_name = basename($_FILES["file"]["name"]);

  $target_file = $target_dir . $file_name;
  $target_file_2 = $target_dir_2 . $file_name;

  //Check size max: 40MB
  if ($_FILES["file"]["size"] > 41943040) {
    echo "Sorry, your file is too large.";
    $upload_ok = 0;
  }

  if (!file_exists($target_file) || !file_exists($target_file_2) && $upload_ok == 1) {
    move_uploaded_file($_FILES["file"]["tmp_name"], $target_file); //upload tu index.php
    move_uploaded_file($_FILES["file"]["tmp_name"], $target_file_2); //upload tu upload.php
    echo "Success";
  }
}
?>
</body>
</html>
