<?php
require_once('../db.php');
session_start();
if (isset($_POST['add_ticket'])) {
	if (!empty($_POST['problem'])) {
		$problem = mysqli_real_escape_string($connection, $_POST['problem']);
	} else header('Location: ' . $pagelink . '/ticket');
	$catResult = $connection->query("SELECT * FROM `category` WHERE `id` = '" . mysqli_real_escape_string($connection, $_POST['catID']) . "'");
	$priority = mysqli_result($catResult, 0, 'priority'); 
	$resultIng = $connection->query("INSERT INTO `chat`(`id-cat`, `id-user`, `priority`, `description`, `status`, `expire`) VALUES (
	'" . mysqli_real_escape_string($connection, $_POST['catID']) . "', '" . $_SESSION['uxs_user']['id'] . "', '" . $priority . "', '" . $problem . "', 'oppened', '" . strtotime('+30 Days') . "'
	)");
	header('Location: ' . $pagelink . '/ticket');
}
?>