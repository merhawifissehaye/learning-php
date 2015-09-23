<form  method="post" enctype="multipart/form-data"> 
<input type="file" name="file" size="50" /> 
<br /> 
<input type="submit" value="Upload File" /> 
<?php
session_start();
$_SESSION['name'] = 'aklil';
?>