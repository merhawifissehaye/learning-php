
<form method="post" enctype="multipart/form-data">
<input type="text" name="upload" value="1">
<input type="file" name="file">
<input type="submit" value="Upload">
</form>
<?php
if($_POST[upload] == "1")
{
	$to = "uploads/".$_FILES['file']['name'];
	move_uploaded_file($_FILES['file']['tmp_name'], $to);
	echo "<h1>Done!</h1>";
}
?>