<?php 

$pageload = 'Home';
require_once('db.php');
require_once('config.php');
require_once('header.php');

if ($rank == 'Staff' OR $rank == 'Admin' OR $rank == 'Developer') {
$resStat = $connection->query("SELECT COUNT(id) AS calc FROM `chat` WHERE MONTH(datetime) = '" . date('m') . "'");
$thisMonth = mysqli_result($resStat, 0, 'calc');
$resStats = $connection->query("SELECT COUNT(id) AS totalT FROM `chat`");
$totalTicket = mysqli_result($resStats, 0, 'totalT');
$resAcc = $connection->query("SELECT COUNT(id) AS accT FROM `uxs_user`");
$totalAcc = mysqli_result($resAcc, 0, 'accT');
$totalInCategory = mysqli_result($resAcc, 0, 'accT');

?>

<div class="contentPanel col-12">
	<div class="container mb-3">
		<?php if ($rank == 'Admin' OR $rank == 'Developer') { ?>
		<div align="center">
			<a href="<?php echo $pagelink ?>/category?q=add" class="btn btn-outline-success" type="submit"> <i class="fa fa-plus"></i> CATEGORY </a>
			<a href="<?php echo $pagelink ?>/ticket?q=all" class="btn btn-outline-warning" type="submit"> <i class="fa fa-eye"></i> TICKET </a>
		</div>
		<?php } ?>
		<div class="row d-flex flex-row justify-content-around  analytiquePanel">
			<div class="col-lg-3 col-md-6 col-12">
				<div id="analytiqueBox1" class=" row analytiqueBox">
					<div class="titleNumber col-8">
						<h1><?php echo $totalTicket ?></h1>
						<h6 class="text-uppercase">TICKET TOTAL</h6>
					</div>
					<div class=" col-4 analytiqueIcon">
						<i class='bx bx-list-ul'></i>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-12">
				<div id="analytiqueBox2" class=" row analytiqueBox">
					<div class="titleNumber col-8">
						<h1><?php echo $totalAcc ?></h1>
						<h6 class="text-uppercase">Account's</h6>
					</div>
					<div  class=" col-4 analytiqueIcon">
						<i class='bx bx-user'></i>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-12">
				<div id="analytiqueBox3" class=" row analytiqueBox">
					<div class="titleNumber col-8">
						<h1><?php echo $thisMonth ?></h1>
						<h6 class="text-uppercase">THIS MONTH</h6>
					</div>
					<div class=" col-4 analytiqueIcon">
						<i class='bx bx-calendar' ></i>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php } ?>

<div class="container" id="team">
    <h5 class="section-title h1 mt-2 text-warning" align="center">Create one ticket!</h5>
    <div class="row justify-content-start">
	<?php 
	
	$result_Category = $connection->query("SELECT * FROM `category`");
	if($result_Category->num_rows > 0) {
	while($category = mysqli_fetch_array($result_Category)) {
		
	?>
		<div class="col-xl-4 col-lg-6">
			<div class="card card-stats bg-stylenew mb-2 mb-xl-5 shadow" style="background-color: #2b2d31;">
				<div class="d-flex justify-content-center align-items-center text-dark cardbadge">
					<a href="<?php echo $pagelink ?>/ticket?q=add&cat=<?php echo $category['id'] ?>" class="btn btn-success btn-circle" type="submit"> <i class="fa fa-plus"></i> </a>
				</div>
				<div class="card-header bg-warning rounded">
					<h6 class="bg-warning  card-title text-uppercase text-white mb-0"><?php echo $category['name'] ?></h6>
				</div>
				<div class="card-body p-2">
					<p class="mt-1 mb-0 text-white text-sm">
						<span class=""><?php echo $category['description'] ?></span>
						
					</p>
					<div class="d-flex justify-content-center btnbottom">
						<p>
						<?php if ($rank == 'Admin' OR $rank == 'Developer') { ?>
						<a href="#" onclick="catRemove('<?php echo $category['id'] ?>')" class="btn btn-outline-danger" type="submit"> <i class="fa fa-xmark"></i> </a>
						<?php } ?>
						</p>
					</div>
				</div>
			</div>
		</div>
	<?php }
	} else echo "<p class='text-center text-white'>Currently no categories have been found in the database...</p>";	?>
    </div>
</div>


<script>
function catRemove(id) {
	alertify.confirm("Are you sure to delete this category?",
	function(){
		alertify.success('The category was removed.');
		$.post( './connection/delete_category_index.php', { categoryId : id }, 
		   function( response ) {
			
			setTimeout("location.href='<?php echo $pagelink ?>/'", 0000);

		   }
		);
	},
	function(){
		alertify.error('You canceled, therefore the category will not be deleted!');
	});
}
</script>

<style>
.btn-circle {
    width: 30px;
    height: 30px;
    padding: 6px 0px;
    border-radius: 15px;
    text-align: center;
    font-size: 12px;
    line-height: 1.42857;
}

.bg-stylenew {
	background-color: #fff;
}
#team .bg-danger {
	background: #FF416C;
	background: -webkit-linear-gradient(to left, #FF4B2B, #FF416C);
	background: linear-gradient(to left, #FF4B2B, #FF416C);

    
}
#team .card {
	border: none;
	background: #313338;
	min-height: 195px;
}
.btnbottom p
{

    position: absolute;
    bottom: 15px;
}
#team .cardbadge {
	top: -15px;
	right: -15px;
	position: absolute;
	height: 30px;
	width: 30px;
	border-radius: 50%;
	font-weight: bold;
	font-size: 17px;
}
.contentPanel
{
  padding:30px 0;
  background:#313338;
}
.analytiquePanel
{
  padding:20px 0;
  overflow:hidden!important;

}

.analytiqueBox
{
  background:#fff;
  position:relative;
  border-radius:10px;
  border:1px solid #707070;


}
.analytiqueBox:before
{
  content:"";
  position:absolute;
  top:0;
  left:-5px;
  width:100%;
  height:100%;
  border-radius:10px;

}
.titleNumber , .analytiqueIcon
{
  background:#fff;
}
.titleNumber
{
	border-radius: 10px 0 0 10px;
}
.analytiqueIcon
{
	border-radius: 0 10px 10px 0 ;
}
.titleNumber h6
{
  font-weight:bold;
}
.analytiqueIcon i
{
  position:relative;
  top:50%;
  left:50%;
  transform:translate(-50%,-50%);
  font-size: 70px;
  opacity:0.3;
}
#analytiqueBox1 .titleNumber h6
{
  color:#4E73DF;
}
#analytiqueBox1:before
{
    background:#4E73DF;
    box-shadow: 10px 10px 15px #4e73df42;
}

#analytiqueBox2 .titleNumber h6
{
  color:#1CC88A;
}
#analytiqueBox2:before
{
    background:#1CC88A;
    box-shadow: 10px 10px 15px #1cc88a2b;
}

#analytiqueBox3 .titleNumber h6
{
  color:#36B9CC;
}
#analytiqueBox3:before
{
    background:#36B9CC;
    box-shadow: 10px 10px 15px #36b9cc24;
}
</style>
<?php require_once('footer.php'); ?>