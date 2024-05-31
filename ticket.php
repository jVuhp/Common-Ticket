<?php 

$pageload = 'Ticket';

require_once('header.php');

$ticketID = mysqli_real_escape_string($connection, $_GET['chat']);
$qTicket = mysqli_real_escape_string($connection, $_GET['q']);
$qCat = mysqli_real_escape_string($connection, $_GET['cat']);

session_start();

if (!$ticketID) {
	
	if (!$qTicket) {
?>
<section class="content">
	

<div class="container mt-5 px-2 bk">

    <div class="table-responsive">
	<div class="pull-left">
		<h2 style="color: #5865f2;"> <b><i class="fa fa-ticket"></i> Ticket's</b> </h2>
	</div>
	
	<div class="pull-right">
		<a href="?q=add" class="btn btn-success">ADD</a>
	</div>
	

	
<table class="table table-responsive table-borderless">
        
    <thead>
        <tr class="bg-bk">
          <th scope="col" width="5%">#</th>
          <th scope="col" width="10%">Priority</th>
          <th scope="col" width="40%">Problem</th>
          <th scope="col" width="20%">Status</th>
          <th scope="col" class="text-end" width="10%"><span>Created at</span></th>
          <th width="10%"> </th>
        </tr>
    </thead>
	<tbody>
	<?php 
	
	$listTicketMy = $connection->query("SELECT * FROM `chat` WHERE `id-user` = '" . $_SESSION['uxs_user']['id'] . "' ORDER BY id DESC");
	if($listTicketMy->num_rows > 0) {
	while($ticketList = mysqli_fetch_array($listTicketMy)) {
		$totalChat = $connection->query("SELECT COUNT(id)AS totalcont FROM `chat-contains` WHERE `id-chat` = '" . $ticketList['id'] . "'");
		$containsTotal = mysqli_result($totalChat, 0, 'totalcont');
		
		
		$timeObtend = strtotime($ticketList['datetime']);
		$timeDay = date('j', $timeObtend);
		$timeMonth = date('F', $timeObtend);
		$timeYear = date('Y', $timeObtend);
		$timeMnHr = date('h:i A', $timeObtend);
		
	?>
		<tr class="checktabletr">
			<td>#<?php echo $ticketList['id'] ?></td>
			<td><?php echo $ticketList['priority'] ?></td>
			<td><?php echo $ticketList['description'] ?></td>
			<td><?php echo $ticketList['status'] ?><br>Message: <?php echo $containsTotal ?></td>
			<td><?php echo $timeDay ?> of <?php echo $timeMonth ?>, <?php echo $timeYear ?> (<?php echo $timeMnHr ?>)</td>
			<td>
				<a href="?cat=<?php echo $ticketList['id-cat'] ?>&chat=<?php echo $ticketList['id'] ?>" class="removelines"><i class="fa fa-eye"></i></a>
			</td>
		</tr>
	<?php 
	
	}
	} else echo "<tr class='checktabletr'><td></td><td></td><td>Not have Ticket's</td></tr>";
	
	?>
	</tbody>
</table>
	
  </div>
    
</div>
</section>
<?php
	} else if ($qTicket == 'all') {
?>
	<?php if ($rank == 'Developer' OR $rank == 'Admin' OR $rank == 'Staff') { } else { require_once('connection/permissions.php'); return;  } ?>
<section class="content">
	

<div class="container mt-5 px-2 bk">

    <div class="table-responsive">
	<div class="pull-left">
		<h2 style="color: #5865f2;"> <b><i class="fa fa-ticket"></i> Ticket's</b> </h2>
	</div>
	

	
<table class="table table-responsive table-borderless">
        
    <thead>
        <tr class="bg-bk">
          <th scope="col" width="5%">#</th>
          <th scope="col" width="10%">By</th>
          <th scope="col" width="10%">Priority</th>
          <th scope="col" width="40%">Problem</th>
          <th scope="col" width="20%">Status</th>
          <th scope="col" class="text-end" width="10%"><span>Created at</span></th>
          <th width="10%"> </th>
        </tr>
    </thead>
	<tbody>
	<?php 
	
	$listTicketMy = $connection->query("SELECT * FROM `chat` ORDER BY id DESC");
	while($ticketList = mysqli_fetch_array($listTicketMy)) {
		$totalChat = $connection->query("SELECT COUNT(id)AS totalcont FROM `chat-contains` WHERE `id-chat` = '" . $ticketList['id'] . "'");
		$containsTotal = mysqli_result($totalChat, 0, 'totalcont');
		
		$userInfo = $connection->query("SELECT username FROM `uxs_user` WHERE `id` = '" . $ticketList['id-user'] . "'");
		$userIGNifno = mysqli_result($userInfo, 0, 'username');
		
		
		$timeObtend = strtotime($ticketList['datetime']);
		$timeDay = date('j', $timeObtend);
		$timeMonth = date('F', $timeObtend);
		$timeYear = date('Y', $timeObtend);
		$timeMnHr = date('h:i A', $timeObtend);

	?>
		<tr class="checktabletr">
			<td>#<?php echo $ticketList['id'] ?></td>
			<td><?php echo $userIGNifno ?></td>
			<td><?php echo $ticketList['priority'] ?></td>
			<td><?php echo $ticketList['description'] ?></td>
			<td><?php echo $ticketList['status'] ?><br>Message: <?php echo $containsTotal ?></td>
			<td><?php echo $timeDay ?> of <?php echo $timeMonth ?>, <?php echo $timeYear ?> (<?php echo $timeMnHr ?>)</td>
			<td>
				<a href="?cat=<?php echo $ticketList['id-cat'] ?>&chat=<?php echo $ticketList['id'] ?>" class="removelines"><i class="fa fa-eye"></i></a>
			</td>
		</tr>
	<?php 
	
	}
	
	?>
	</tbody>
</table>
	
  </div>
    
</div>
</section>
<?php
	} else {
		
		if (!$qCat) {
?>
	
	<div class="container">
		<p><h1 class="text-warning"><i class="fa fa-certificate"></i> Select Category</h1></p>
		<select class="form-control" onchange="javascript:handleSelect(this)">
				<option value="?q=add&cat=1">Select one category</option>
<?php
			$i = 0;
			$sqlCat = $connection->query("SELECT * FROM category");
			while($Categ = mysqli_fetch_array($sqlCat)) {
				$i++;

?>
				<option value="?q=add&cat=<?php echo $Categ['id'] ?>">(<?php echo $i ?>) - <?php echo $Categ['description'] ?></option>
			<?php 
			}
			?>
		</select>
	</div>
	
<?php
		} else {
?>

<div class="contentPanel col-12">
	<div class="container mb-3">
		<div align="center" class="text-white">
			<form method="POST" action="connection/add_ticket.php">
			  <label>
				<p class="label-txt">Describe problem</p>
				<input type="hidden" name="catID" value="<?php echo $qCat ?>">
				<input type="text" class="input text-white" name="problem">
				<div class="line-box">
				  <div class="line"></div>
				</div>
			  </label>
			  <button type="submit" name="add_ticket">CREATE</button>
			</form>
		</div>
	</div>
</div>
<?php
		}

	}
	
} else {
?>
<?php 

$resLasts = $connection->query("SELECT * FROM `chat` WHERE `id` = '" . mysqli_real_escape_string($connection, $_GET['chat']) . "'");


$idChat = mysqli_result($resLasts, 0, 'id');
$idCatChat = mysqli_result($resLasts, 0, 'id-cat');
$idUserChat = mysqli_result($resLasts, 0, 'id-user');
$priorityChat = mysqli_result($resLasts, 0, 'priority');
$descChat = mysqli_result($resLasts, 0, 'description');
$statusChat = mysqli_result($resLasts, 0, 'status');
$expireChat = mysqli_result($resLasts, 0, 'expire');
$datetimeChat = mysqli_result($resLasts, 0, 'datetime');



$resUser = $connection->query("SELECT * FROM `uxs_user` WHERE `id` = '" . mysqli_real_escape_string($connection, $idUserChat) . "'");
$idUserOwner = mysqli_result($resUser, 0, 'username');



$resChat = $connection->query("SELECT * FROM `chat-contains` WHERE `id-chat` = '" . mysqli_real_escape_string($connection, $idChat) . "' ORDER BY id DESC");

$timeObtend = strtotime($datetimeChat);
$timeDay = date('j', $timeObtend);
$timeMonth = date('F', $timeObtend);
$timeYear = date('Y', $timeObtend);
$timeMnHr = date('h:i A', $timeObtend);


?>

	<?php if ($rank == 'Developer' OR $rank == 'Admin' OR $rank == 'Staff' OR $_SESSION['uxs_user']['id'] == $idUserChat) { } else { require_once('connection/permissions.php'); return;  } ?>
    <div class="container my-2">
        <p class="text-white">Problem: <?php echo $descChat ?></p>
        <div class="row mt-4">
            <div class="col-md-9 reply-form">
					<div id="chat-scrolled">
						<div class="container" id="leet"></div>
					</div>
                    <div id="div_id_username" class="form-group required">
                        <div class="controls form-group d-flex w-100">
							
                            <textarea class="input-md  textinput textInput form-control" id="idobtend" placeholder="Write something" type="text" <?php if ($statusChat == 'closed') { echo "disabled"; }?>><?php if ($statusChat == 'closed') { echo "Ticket closed"; }?></textarea>
                            <button type="submit" class="btn btn-info border-radius-0  m-0 w-25" onclick="<?php if ($statusChat != 'closed') { echo "send_message(" . $_GET['cat'] . ", " . $_GET['chat'] . ")"; }?>">SEND</button>
                        </div>
                    </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-card-ticket-info">
                    <h4 class="text-warning"><i class="fa fa-ticket" aria-hidden="true"></i> Ticket #<?php echo $idChat ?> <span class="badge badge-danger"><?php if ($statusChat == 'closed') { echo "Closed"; } ?></span></h4>
                    <ul class="list-unstyled bg-card-ticket-info">
                        <li>
                            <strong>Ticket Creation By</strong>
                            <p><?php echo $idUserOwner ?></p>
                        </li>
                        <li>
                            <strong>Create ago</strong>
                            <p><?php echo $timeDay ?> of <?php echo $timeMonth ?>, <?php echo $timeYear ?> (<?php echo $timeMnHr ?>)</p>
                        </li>
                        <li>
                            <strong>Last Message</strong>
                            <p><span id="lastupdatemsg">Loading..</span></p>
                        </li>
                        <li>
                            <strong>Priority</strong>
                            <p><?php echo $priorityChat ?></p>
                        </li>
                        <li>
                            <strong>Network</strong>
                            <p><span class="badge badge-warning"><?php echo SERVER_NAME ?></span></p>
                        </li>
						
						
                    </ul>
                    <div class="row m-0 mb-4">
                        <div class="col">
                            <a class="btn btn-success w-100" href="<?php echo $pagelink ?>/ticket" role="button"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
                        </div>
                        <div class="col">
							<?php if ($statusChat != 'closed') { ?>
								<a class="btn btn-danger w-100" href="<?php echo $pagelink ?>/connection/close_ticket?id=<?php echo $idChat ?>" role="button"><i class="fa fa-times" aria-hidden="true"></i> Close</a>
							<?php } else { 
								if ($rank == 'Staff' OR $rank == 'Admin' OR $rank == 'Developer') { ?>
								<a class="btn btn-warning w-100" href="<?php echo $pagelink ?>/connection/reopen_ticket?id=<?php echo $idChat ?>" role="button"><i class="fa fa-plus" aria-hidden="true"></i> Re Open</a>
							<?php } } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<style>
form {
  width: 60%;
  margin: 60px auto;
  background: #2b2d31;
  padding: 60px 120px 80px 120px;
  text-align: center;
  -webkit-box-shadow: 2px 2px 3px rgba(0,0,0,0.1);
  box-shadow: 2px 2px 3px rgba(0,0,0,0.1);
}
label {
  display: block;
  position: relative;
  margin: 40px 0px;
}
.label-txt {
  position: absolute;
  top: -1.6em;
  padding: 10px;
  font-family: sans-serif;
  font-size: .8em;
  letter-spacing: 1px;
  color: #5865f2;
  transition: ease .3s;
}
.input {
  width: 100%;
  padding: 10px;
  background: transparent;
  border: none;
  outline: none;
}

.line-box {
  position: relative;
  width: 100%;
  height: 2px;
  background: #BCBCBC;
}

.line {
  position: absolute;
  width: 0%;
  height: 2px;
  top: 0px;
  left: 50%;
  transform: translateX(-50%);
  background: #8BC34A;
  transition: ease .6s;
}

.input:focus + .line-box .line {
  width: 100%;
}

.label-active {
  top: -3em;
}

button {
  display: inline-block;
  padding: 12px 24px;
  background: rgb(220,220,220);
  font-weight: bold;
  color: rgb(120,120,120);
  border: none;
  outline: none;
  border-radius: 3px;
  cursor: pointer;
  transition: ease .3s;
}

button:hover {
  background: #8BC34A;
  color: #ffffff;
}

</style>
<?php require_once('footer.php'); ?>