<?php $this->load->view('header'); ?>
	<h1>Category - Create</h1>
	<div id="work-insert" class="form-page">
		<form action="<?php echo site_url("gallery/insert")?>" method="post" name="insert_work">
			<div>
				<span>Title:<br /></span>
				<input type="text" name="title" id="title" value="" />
			</div>
			<div>
				<span>Order ID: <em>Lower numbers will appear first</em><br></span>
				<select name="order_id" id="order_id">
				  	<?php for($i=0;$i<101;$i++) { ?>
					<?php echo("<option value='$i'>$i</option>"); ?>
					<?php } ?>
				</select>
			</div>
			<div>
				<span>Description:<br /></span>
				<textarea name="description" id="description"></textarea>
			</div>
			<div>
				<input type="submit" value="Submit" id="submit" />
			</div>
		</div>
		</form>
<?php $this->load->view('footer'); ?>