<?php
require_once('core.php');
require("config.php");
$db = mysql_connect($dbhost, $dbuser, $dbpassword);
 mysql_select_db($dbdatabase, $db);

?> 
<!--DOCTYPE HTML PUBLIC "-//W3C//DTD 
HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"--> 
<html> 
<head> 
<title><?php echo $config_blogname; ?></title> 
<link rel="stylesheet" href="css/stylesheet.css" type="text/css" /> 
<script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
</head> 
<body> 
<div id="header"> 
<h1><?php echo $config_blogname; ?> 
</h1> 
</div>
<div id="menu">
<a href="index.php">home</a>====
<a href="about_us.php">about us</a>====
<a href="product_and_service.php">Product and Service</a>=====
<a href="media_center.php">Media Center</a>====
<a href="order.php">Place an order</a>====

<a href="login.php">login</a> 
</div>

<div id= "main">
<br/><br/>
