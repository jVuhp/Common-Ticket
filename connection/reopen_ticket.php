<?php 

require_once('../db.php');

$resClose = $connection->query("UPDATE `chat` SET `status` = 'oppened' WHERE `chat`.`id` = '" . mysqli_real_escape_string($connection, $_GET['id']) . "'");

header('Location: ' . $_SERVER['HTTP_REFERER']);

?>