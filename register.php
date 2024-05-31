<?php 

require_once('db.php');
require_once('config.php');
require_once('header.php');

?>



<div class="container" id="team" align="center">
    <h5 class="section-title h1 mt-2 text-warning" align="center">Register</h5>
	<br>
	<br>
	<h6 class="card-title text-uppercase text-white mb-0" align="center">How do I register on the page?</h6>
	<br>
	<br>
	<p class="mt-1 mb-0 text-white text-sm">
		Connect on the server "<?php echo SERVER_IP ?>" and execute command: /ticket register <br> Set you username and password and back to site and click on Login, Put username and password and click on Login button
	</p>
	<br>
	<br>
	<iframe style="width:728px;height:90px;max-width:100%;border:none;display:block;margin:auto" src="https://namemc.com/server/<?php echo SERVER_IP ?>/embed" width="728" height="90"></iframe>
</div>



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