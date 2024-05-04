<?php
$filename = $_FILES["inpFile"]["name"];
$targetPath = __DIR__ . "uploads/" . $filename;
move_uploaded_file($_FILES["inpFile"]["tmp_name"],$targetPath);

?>
