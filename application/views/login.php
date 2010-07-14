<?php $this->load->view('header_anon'); ?>
	<div id="login-box">
		<form action="<?php echo site_url("login/go")?>" method="post" name="login">
			<h1>Login</h1>
			<div>
				<span>Username:<br /></span>
				<input type="text" name="username" id="username" value="" style="width:200px;" />
			</div>
			<div>
				<span>Password:<br /></span>
				<input type="password" name="password" id="password" value="" style="width:200px;" />
			</div>
			<div>
				<input type="submit" value="Login" id="submit" />
			</div>
			<div><?php echo validation_errors(); ?></div>
		</div>
		</form>
<?php $this->load->view('footer'); ?>