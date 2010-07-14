<?php $this->load->view('header_anon'); ?>
	<div id="login-box">
		<form action="<?php echo site_url("install/gentables")?>" method="post" name="install">
			<h1>Create Account</h1>
			<div>
				<span>Username:<br /></span>
				<input type="text" name="username" id="username" value="" style="width:200px;" />
			</div>
			<div>
				<span>Password:<br /></span>
				<input type="password" name="password" id="password" value="" style="width:200px;" />
			</div>
			<div>
				<span>Repeat Password:<br /></span>
				<input type="password" name="passconf" id="passconf" value="" style="width:200px;" />
			</div>
			<div>
				<input type="submit" value="Register" id="submit" />
			</div>
			<div><?php echo validation_errors(); ?></div>
		</div>
		</form>
<?php $this->load->view('footer'); ?>