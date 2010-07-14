<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>GalleryCMS | Administration</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/styles/styles.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/styles/jquery.fancybox.css" media="screen" />
<link rel="shortcut icon" href="<?php echo base_url();?>images/favicon.ico" type="image/x-icon" />
<script type="text/javascript" src="<?php echo base_url();?>/scripts/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/scripts/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/scripts/jquery.fancybox-1.2.1.pack.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$(".gallerypic a").fancybox();
	});
</script>
</head>
<body>
	<div id="container">
		<div id="header">
			<div id="logo"><img src="<?php echo base_url();?>/images/admin_logo.jpg" alt="" /></div>
			<div id="logout"><a href="<?php echo site_url("login/logout")?>">Logout</a></div>
		<div>
		<div id="navigation">
			<ul>
				<li><a href="<?php echo site_url("gallery")?>"<?php if ($this->uri->segment(1) == "gallery") echo ' class="active"'; ?>>Manage Gallery</a></li>
				<li><a href="<?php echo site_url("settings")?>"<?php if ($this->uri->segment(1) == "settings") echo ' class="active"'; ?>>Settings</a></li>
				<li><a href="<?php echo site_url("profile")?>"<?php if ($this->uri->segment(1) == "profile") echo ' class="active"'; ?>>Profile</a></li>
				<li><a href="<?php echo site_url("view/xml")?>">View XML</a></li>
				<li><a href="<?php echo site_url("view/json")?>">View JSON</a></li>
			</ul>
		</div>
		<div id="content">
			<div id="content-box">