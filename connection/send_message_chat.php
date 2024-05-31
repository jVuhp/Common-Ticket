<?php
require_once('../db.php');
require_once('../config.php');

if ($_POST['chatmsg'] != '') {$results = $connection->query("INSERT INTO `chat-contains`(`id-category`, `id-chat`, `id-user`, `id-sender`, `descr`) VALUES ('" . mysqli_real_escape_string($connection, $_POST['cat']) . "', '" . mysqli_real_escape_string($connection, $_POST['idchat']) . "', '".mysqli_real_escape_string($connection, $_POST['userID'])."', '" . mysqli_real_escape_string($connection, $_POST['userID']) . "', '" . mysqli_real_escape_string($connection, $_POST['chatmsg']) . "')");}


?>