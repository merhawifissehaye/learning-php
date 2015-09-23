<?php
//session_start();
//if(!$_session["var"]){
//header("location:index.php");}
//else{
//	echo'You are logged in!';
//}

?>
<!--
<html>
<body>
<br/>
<H1>Login Successful!!!</H1>
</body>
</html


// Check if session is not registered, redirect back to main page.
// Put this code in first line of web page.-->
<?php
require_once('core.php');
if(!array_key_exists('USERNAME', $_SESSION) && !array_key_exists('USERID', $_SESSION)){
	print_r($_SESSION);
	die("trying to redirect to index.php becuase the session variables are not set");
header("location:index.php");
}
else {}
?>

<html>
<body>
Login Successful!
</body>
</html>