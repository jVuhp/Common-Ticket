<?php 
session_start();
require_once('db.php');
require_once('config.php');

$pagename = SITE_NAME;
if (!$_SESSION['uxs_user_logged']) {
	$result = $connection->query("SELECT * FROM `uxs_user` WHERE `username` = 'Demo'");
	if($useraccounts = mysqli_fetch_array($result)) {
		$_SESSION['uxs_user'] = $useraccounts;
		$_SESSION['uxs_user_logged'] = true;
		$result = $connection->query("UPDATE `uxs_user` SET `last_update` = '" . date("Y-m-d H:i:s") . "' WHERE `uxs_user`.`username` = '" . mysqli_real_escape_string($connection, $_POST['user']) . "'");
	}
}
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE-edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="departamentos, Alquileres, alquileres" name="keywords" />
        <meta content="Hola, Somos UniXSystem. Desarrolladores con experiencia en frontend y backend." name="description" />
        <meta content="Vuhp" name="author" />
        <meta content="UniXSystem" name="copyright" />
		<?php require ('./css/style.php'); ?>
		
		<title><?php echo $pagename ?> | <?php echo $pageload ?></title>
        <link rel="icon" type="image/x-icon" href="<?php echo $pagelink ?>/image/<?php echo SITE_LOGO ?>">
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.9/angular.min.js"></script>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://unixsystem.com.ar/js/console.js"></script>
		<script src="https://kit.fontawesome.com/37c2572d14.js" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"> </script>
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
		<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script src="https://kit.fontawesome.com/37c2572d14.js" crossorigin="anonymous"></script>
		<script src="https://unixsystem.com.ar/js/blocksite-template.js"></script>
		<link href="https://cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/css/alertify.min.css" rel="stylesheet"/>
		<script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/alertify.min.js"></script>
<script type='text/javascript'
  src='http://code.jquery.com/jquery-2.0.2.js'></script>
<script type='text/javascript'
  src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css"
  href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css">
<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

		
		<script>
			$(document).ready(function() {
				$.active = false;
				$('body').bind('click keypress', function() { $.active = true; });
				checkActivity(1440000, 60000, 0); // timeout = 30 minutes, interval = 1 minute.
			});

			function checkActivity(timeout, interval, elapsed) {
				if ($.active) {
					elapsed = 0;
					$.active = false;
					$.get('heartbeat');
				}
				if (elapsed < timeout) {
					elapsed += interval;
					setTimeout(function() {
						checkActivity(timeout, interval, elapsed);
					}, interval);
				} else {
					window.location = '<?php echo $pagelink ?>/'; // Redirect to "session expired" page.
				}
			}
			function handleSelect(elm){
				window.location = elm.value;
			}
		</script>
		<style>
		#chat-scrolled {
			display: block;
			overflow: auto;
			width: 100%;
			max-height: 380px;
		}
		</style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="<?php echo $pagelink ?>"><?php echo SITE_NAME ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
				<?php if ($_SESSION['uxs_user'] == '') { ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $pagelink ?>/login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $pagelink ?>/register">Register</a>
                </li>
				<?php } else { ?>
				
				<?php if ($rank == 'Staff' OR $rank == 'Admin' OR $rank == 'Developer') { ?>
					<li class="nav-item">
						<div class="btn-group">
							<a href="#" class="nav-link" data-toggle="dropdown">
								Private <span class="caret"></span>
							</a>
							<ul class="dropdown-menu" role="menu">
								<?php if ($rank == 'Admin' OR $rank == 'Developer') { ?>
								<li><a href="<?php echo $pagelink ?>/category">Category</a></li>
								<?php } ?>
							 </ul>
						 </div>
					</li>
				<?php } ?>
				
                <li class="nav-item">
                    <div class="btn-group">
						<a href="#" class="nav-link" data-toggle="dropdown">
							Ticket <span class="caret"></span>
						</a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="<?php echo $pagelink ?>/ticket">View Ticket's</a></li>
							<li><a href="<?php echo $pagelink ?>/ticket?q=add">Create Ticket</a></li>
							<li class="divider"></li>
							<li><a href="<?php echo $pagelink . "/ticket?cat=" . $lastTicketCat . "&chat=" . $lastTicket; ?>">View Last Ticket</a></li>
						 </ul>
					 </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $pagelink ?>/profile?id=<?php echo $_SESSION['uxs_user']['id'] ?>">My Account</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Logout</a>
                </li>
				<?php } ?>
            </ul>

        </div>
    </div>
</nav>