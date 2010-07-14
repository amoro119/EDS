<?php $this->load->view('header'); ?>
	<h1>Category - Edit</h1>
	<div id="work-update" class="form-page">
		<form action="<?php echo site_url("gallery/updatecat")?>" method="post" name="insert_work">
			<div>
				<span>Title:<br /></span>
				<input type="text" name="title" id="title" value="<?php echo $rows[0]->title; ?>" />
			</div>
			<div>
				<span>Order ID: <em>Lower numbers will appear first</em><br></span>
				<?php $currID = $rows[0]->order_id; ?>
				<select name="order_id" id="order_id">
				  	<?php for($i=0;$i<101;$i++) { ?>
					<option value="<?php echo $i;?>"<?php if($i==$currID) echo ' selected="selected"'; ?>><?php echo $i;?></option>
					<?php } ?>
				</select>
			</div>
			<div>
				<span>Description:<br /></span>
				<textarea name="description" id="description"><?php echo $rows[0]->description; ?></textarea>
			</div>
			<div>
				<input type="hidden" name="id" value="<?php echo $this->uri->segment(3)?>">
				<input type="submit" value="Submit" id="submit" />
			</div>
		</div>
		</form>
<?php $this->load->view('footer'); ?>