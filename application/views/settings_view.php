<?php $this->load->view('header'); ?>
	<h1>Settings</h1>
	<div id="settings-update" class="form-page">
		<form action="<?php echo site_url("settings/update")?>" method="post" name="update_settings">
			<div>
				<span>Wide Thumbnail Width:<br /></span>
				<input type="text" name="thumb_width" id="thumb_width" value="<?php echo $rows[0]->thumb_width; ?>" maxlength="3" />
			</div>
			<div>
				<span>Wide Thumbnail Height:<br /></span>
				<input type="text" name="thumb_height" id="thumb_height" value="<?php echo $rows[0]->thumb_height; ?>" maxlength="3" />
			</div>
			<div id="preview1" style="width:<?php echo $rows[0]->thumb_width;?>px; height:<?php echo $rows[0]->thumb_height; ?>px; border:1px solid #666; background:#ccc; font-size:10px; text-align:center; margin-left:40px;">Preview<br />Size</div>
			<div>
				<input type="submit" value="Submit" id="submit" />
			</div>
		</div>
<?php $this->load->view('footer'); ?>