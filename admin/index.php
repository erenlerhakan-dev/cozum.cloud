<?php
include_once('include/site_id.php');
include_once('include/initialize.inc.php');
if (empty($_SESSION['admin']['admin_id'])) { redirect(SITE_URL.'admin/log_in.php'); exit; }

?>

<!DOCTYPE html>
<html>

<?php include_once('head_meta.php'); ?>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<?php include_once('header.php'); ?>

<?php include_once('left_menu.php'); ?>

<div class="content-wrapper">


<!-- BREADCRUMB -->
<section class="content-header">
<h1>Yönetim Paneli<small>Version 1.2</small></h1>
<ol class="breadcrumb">
<li><a href="<?php echo SITE_URL; ?>admin/index.php"><i class="fa fa-dashboard"></i> Ana Sayfa</a></li>
<li class="active">Yönetim Paneli</li>
</ol>
</section>
<!-- BREADCRUMB -->


<section class="content">

<?php if (!empty($_GET['status']) AND $_GET['status'] == "sent") { ?>
<div class="row">
<div class="col-md-12">
<div class="pad" id="sentMessage">
<div class="callout callout-danger" style="margin-bottom: 0!important;">
<h4><i class="fa fa-info"></i> Email Gönderildi</h4>
</div>
</div>
</div>
</div>
<?php } ?>

<?php include_once('home_top_counters.php'); ?>

<div class="row">

<?php include_once("home_email_send.php"); ?>

</div>

<?php include_once("home_sms_send.php"); ?>

</section>

</div>

<?php include_once('footer.php'); ?>

</div>

<?php include_once('footer_scripts.php'); ?>

<script>
$(function() {
setTimeout(function() {
$("#sentMessage").hide('blind', {}, 500);
}, 5000);
});
</script>

</body>
</html>