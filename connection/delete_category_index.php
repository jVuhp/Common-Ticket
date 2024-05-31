<?php 
require_once('../db.php');
session_start();
if ($_SESSION['uxs_user']['id'] == '') return;

if ($rank == 'Admin' OR $rank == 'Developer') {
	$resultIngs = $connection->query("DELETE FROM `category` WHERE `category`.`id` = '" . mysqli_real_escape_string($connection, $_POST['categoryId']) . "'");
}
?>