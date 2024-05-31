<?php
require_once('../db.php');
require_once('../config.php');
$results = $connection->query("SELECT * FROM `chat-contains`");
while($chatcontains = mysqli_fetch_array($results)) {
	$result = $connection->query("SELECT * FROM `uxs_user` WHERE `uxs_user`.`id` = '" . $chatcontains['id-user'] . "' ORDER BY id DESC");
	$username = mysqli_result($result, 0, 'username');
	$roleuser = mysqli_result($result, 0, 'role');
	$ign = mysqli_result($result, 0, 'ign');
	$idchat = $chatcontains['id'];
	
	if ($chatcontains['id-category'] == $_POST['cat']) {
		if ($chatcontains['id-chat'] == $_POST['idchat']) {
			if ($chatcontains['id-user'] == $_POST['user']) {
				echo "<div class='commentBoxs mypost'><ul class='list-unstyled'><li><a href='#' onclick='delete_message(" . $idchat . ")'><i class='fa fa-xmark'></i></a><span class='profileText'>" . $chatcontains['descr'] . "</span> <span class='profileBox'><img src='https://mineskin.eu/armor/bust/" . $ign . "/100.png' size='64'></span></li></ul></div>";
			} else {
				echo "<div class='commentBox'><ul class='list-unstyled'><li><span class='profileBox'><img src='https://mineskin.eu/armor/bust/" . $ign . "/100.png' size='64'></span> <span class='profileText'>" . $chatcontains['descr'] . "</span></li></ul></div>";
			}
		}
		
	}
}

?>