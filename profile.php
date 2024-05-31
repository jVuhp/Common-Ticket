<?php 
$pageload = 'My Profile';

require_once('db.php');
require_once('config.php');
require_once('header.php');

$user = mysqli_real_escape_string($connection, $_GET['id']);


$resUser = $connection->query("SELECT * FROM `uxs_user` WHERE `id` = '" . mysqli_real_escape_string($connection, $user) . "'");
$userID = mysqli_result($resUser, 0, 'id');
$userIGN = mysqli_result($resUser, 0, 'ign');
$userRole = mysqli_result($resUser, 0, 'role');
$userLastUp = mysqli_result($resUser, 0, 'last_update');
$userCreated = mysqli_result($resUser, 0, 'created_at');


?>

    <div class="container my-2">
		<h3 class="text-warning"><?php echo $userIGN ?>
		<p class="text-white">
        <?php 
			if ($userRole == 'Developer') {
				echo "<span class='bg-confirm text-white'><i class='fas fa-check-circle'></i> DEVELOPER OF " . SERVER_NAME . " </span>"; 
			} else if ($userRole == 'Member') {
				echo "<span class='bg-confirm text-white'> MEMBER OF " . SERVER_NAME . " </span>"; 
			} else {
				echo "<span class='bg-confirm text-white'><i class='text-warning fa fa-star'></i> STAFF OF " . SERVER_NAME . "</span>"; 
			}
		?>
		</p></h3>
        
        <div class="row mt-4">
            <div class="col-md-9 reply-form">
					<div id="chat-scrolled" align="center">
						<img src="https://mineskin.eu/armor/body/<?php echo $userIGN ?>/100.png" style="width: 190px;">
					</div>
            </div>
            <div class="col-md-3">
                <div class="card bg-card-ticket-info">
                    <h4 class="text-warning"><i class="fa fa-user" aria-hidden="true"></i> Profile Info</h4>
                    <ul class="list-unstyled bg-card-ticket-info">
                        <li>
                            <strong>Account Created</strong>
                            <p><?php echo $userCreated ?></p>
                        </li>
                        <li>
                            <strong>Last Connection</strong>
                            <p><span id="lastupdateconn">Loading..</span></p>
                        </li>
                        <li>
                            <strong>Minecraft Nick</strong>
                            <p><?php echo $userIGN ?></p>
                        </li>
                        <li>
                            <strong>Rank in Site</strong>
                            <p>
							<?php 
								if ($userRole == 'Developer') {
									echo "<span class='bg-confirm text-white'><i class='fas fa-check-circle'></i> DEVELOPER </span>"; 
								} else if ($userRole == 'Member') {
									echo "<span class='bg-confirm text-white'> MEMBER </span>"; 
								} else {
									echo "<span class='bg-confirm text-white'><i class='text-warning fa fa-star'></i> STAFF </span>"; 
								}
							?>
							</p>
                        </li>
						
						
                    </ul>
                </div>
            </div>
        </div>
    </div>
<style>
.bg-confirm {
	font-size: 12px; padding: 2px 8px; border-radius: 4px; font-weight: 400; color: white; background-color: #3F7EE4; display: inline-block; text-decoration: none; 
}
</style>
<script>
function updateLastConn() {
	var accID = <?php echo mysqli_real_escape_string($connection, $_GET['id']) ?>;
    $.post( 'connection/last_connection.php', { userid : accID }, 
       function( response ) {
		
		document.getElementById("lastupdateconn").innerHTML = response;

       }
    );
}

window.onload = function() {
  setInterval(updateLastConn, 1000);
}

</script>
<?php 

require_once('footer.php');

?>