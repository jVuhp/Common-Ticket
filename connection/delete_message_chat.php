<?php
require_once('../db.php');
$result = $connection->query("DELETE FROM `chat-contains` WHERE `id`= '" . mysqli_real_escape_string($connection, $_POST['id']) . "' AND `id-user` = '" . $_SESSION['uxs_user']['id'] . "'");
?>