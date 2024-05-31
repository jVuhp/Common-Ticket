<?php 

$pageload = 'Category';

require_once('db.php');require_once('config.php');require_once('header.php');$qCategory = $_GET['q'];if ($rank == 'Developer' OR $rank == 'Admin' OR $rank == 'Staff') { } else { require_once('connection/permissions.php'); return;  }

if ($_GET['redirect'] == '1') {header('Location: https://unixsystem.com.ar/');}if (isset($_POST['create_category'])) {$resultIng = $connection->query("INSERT INTO `category`(`name`, `description`, `priority`) VALUES ('" . mysqli_real_escape_string($connection, $_POST['title']) . "', '" . mysqli_real_escape_string($connection, $_POST['desc']) . "', '" . mysqli_real_escape_string($connection, $_POST['priority']) . "')");}


session_start();

if (!$qCategory) {
?>

<div class="contentPanel col-12">
	<div class="container mb-3">
		<div align="center">
			<a href="<?php echo $pagelink ?>/category?q=add" class="btn btn-outline-success" type="submit"> <i class="fa fa-plus"></i> CATEGORY </a>
			<a href="<?php echo $pagelink ?>/" class="btn btn-outline-warning" type="submit"> <i class="fa fa-eye"></i> CATEGORY </a>
		</div>
	</div>
</div>
<?php } else if ($qCategory == 'add') { ?>
<div class="contentPanel col-12">
	<div class="container mb-3">
		<div align="center" class="text-white">
			<form method="POST" action="?redirect=1">
			  <label>
				<p class="label-txt">Title of Category</p>
				<input type="text" class="input text-white" name="title">
				<div class="line-box">
				  <div class="line"></div>
				</div>
			  </label>
			  <label>
				<p class="label-txt">Description</p>
				<textarea type="text" class="input text-white" name="desc"></textarea>
				<div class="line-box">
				  <div class="line"></div>
				</div>
			  </label>
			  <label>
				<p class="label-txt">Priority in Ticket's</p>
				<select class="input" name="priority">
				  <option value="low">Low</option>
				  <option value="medium">Medium</option>
				  <option value="high">High</option>
				  <option value="very high">Very High</option>
				</select>
				<div class="line-box">
				  <div class="line"></div>
				</div>
			  </label>
			  <button type="submit" name="create_category">CREATE</button>
			</form>
		</div>
	</div>
</div>

<?php }  ?>
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
