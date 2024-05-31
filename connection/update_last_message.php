<?php 
require_once('../db.php');require_once('../config.php');$resChat = $connection->query("SELECT * FROM `chat-contains` WHERE `id-chat` = '" . mysqli_real_escape_string($connection, $_POST['idchat']) . "' ORDER BY id DESC");
$chatLastMsg = mysqli_result($resChat, 0, 'datetime'); 
echo timeago($chatLastMsg); 


function timeago($date){$timestamp = strtotime($date);$strTime=array("second", "minute", "hour", "day", "month", "year");$length=array("60","60","24","30","12","10");$currentTime=time();if($currentTime >= $timestamp) { $diff = time()- $timestamp; for($i = 0; $diff >= $length[$i] && $i < count($length)-1; $i++) { $diff = $diff / $length[$i]; } $diff = round($diff); if ($diff > 1) { $timeName = $strTime[$i] . "s"; } else { $timeName = $strTime[$i];} return $diff." ".$timeName." ago";}}

?>