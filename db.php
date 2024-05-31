<?php 

require_once('config.php');
function mysqli_result($res, $row, $field=0) { 	
$res->data_seek($row); 	$datarow = $res->fetch_array(); 	
return $datarow[$field]; 
}
$connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_DATA);
if ($connection->connect_error) {	
die("Connection failed: " . $connection->connect_error);
}

session_start();
$resCodes = $connection->query("SELECT * FROM `site_use_license`");
$licCodes = mysqli_result($resCodes, 0, 'code');
$resLast = $connection->query("SELECT * FROM `chat` WHERE `id-user` = '" . $_SESSION['uxs_user']['id'] . "' ORDER BY id DESC");
$lastTicketCat = mysqli_result($resLast, 0, 'id-cat');
$lastTicket = mysqli_result($resLast, 0, 'id');
$resUserObject = $connection->query("SELECT * FROM `uxs_user` WHERE `id` = '" . $_SESSION['uxs_user']['id'] . "'");


$rank = mysqli_result($resUserObject, 0, 'role');
$pagelink = HTTPS . SITE_LINK;
$webkey = $_SESSION['site_verify'];
if ($webkey != $licCodes) { 
session_start(); 
session_destroy(); 
}
if(!isset($webkey) || !$webkey) {
	header('Location: https://unixsystem.com.ar/verify.php?v1=' . $licCodes . '&v2=' . $pagelink);
}
if ($_GET['license'] == 'accepted') {
	session_start();
	$_SESSION['site_verify'] = $licCodes;
	header('Location: ' . $pagelink);
}

?>