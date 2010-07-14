<?php $this->load->view('header'); ?>
		<form action="<?php echo site_url("profile/changepw")?>" method="post" name="login">
			<h1>Change Password</h1>
			<div>
				<span>Password:<br /></span>
				<input type="password" name="password" id="password" value="" style="width:200px;" /><p></p>
			</div>
			<div>
				<span>Repeat Password:<br /></span>
				<input type="password" name="passconf" id="passconf" value="" style="width:200px;" /><p></p>
			</div>
			<div>
				<input type="hidden" value="<?php echo $this->session->userdata('userid')?>" name="id">
				<input type="submit" value="Login" id="submit" />
			</div>
			<div><?php echo validation_errors(); ?></div>
		</form>
<?php $this->load->view('footer'); ?>