<?php 
$pageload = 'Login';
require_once('db.php');
require_once('config.php');
session_start();

if (isset($_POST['login'])) {
	$result = $connection->query("SELECT * FROM `uxs_user` WHERE `username` = '" . mysqli_real_escape_string($connection, $_POST['user']) . "' AND `password` = '" . mysqli_real_escape_string($connection, $_POST['pass']) . "'");
	if($useraccounts = mysqli_fetch_array($result)) {
		$_SESSION['uxs_user'] = $useraccounts;
		$result = $connection->query("UPDATE `uxs_user` SET `last_update` = '" . date("Y-m-d H:i:s") . "' WHERE `uxs_user`.`username` = '" . mysqli_real_escape_string($connection, $_POST['user']) . "'");
	}
}
require_once('header.php');
?>
<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Log In</div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group row">
                                <label for="email_address" class="col-md-4 col-form-label text-md-right">Username</label>
                                <div class="col-md-6">
                                    <input type="text" id="email_address" class="form-control" name="user" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                <div class="col-md-6">
                                    <input type="password" id="password" class="form-control" name="pass" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" name="login">
                                    Login
                                </button>
                                <a href="#" class="btn btn-link">
                                    Forgot Your Password?
                                </a>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

</main>
</body>
</html>