<?php session_start(); ?>
<div class="container mt-5">
    <div class="alert alert-danger">
        Estimate user<?php if ($_SESSION['uxs_user']['id'] != '') { echo ": " . $_SESSION['uxs_user']['username']; } else { echo ""; } ?> </b><br>
        you do not have permissions to access this module<?php if ($_SESSION['uxs_user']['id'] == '') { echo " and not have logged on this page"; } ?>
    </div>
</div>
