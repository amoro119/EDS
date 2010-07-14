<?php $this->load->view('header'); ?>
	<h1>Update Image</h1>
	<div id="gallery-insert" class="form-page">
		<form action="<?php echo site_url("gallery/do_updateimage")?>" method="post" name="update_image">
			<div>
				<img src="<?php echo base_url().'uploads/'.$rows[0]->thumbnail; ?>" alt="" />
			</div>
			<div>
				<span>Order ID: <em>Lower numbers will appear first</em><br></span>
				<?php $currID = $rows[0]->order_num; ?>
				<select name="order_num" id="order_num">
				  	<?php for($i=0;$i<101;$i++) { ?>
					<option value="<?php echo $i;?>"<?php if($i==$currID) echo ' selected="selected"'; ?>><?php echo $i;?></option>
					<?php } ?>
				</select>
			</div>
			<div>
				<span>Caption:<br /></span>
				<textarea name="caption" id="caption"><?php echo $rows[0]->caption; ?></textarea>
			</div>
			<div>
				<input type="hidden" name="img_id" id="img_id" value="<?php echo $rows[0]->img_id;?>" />
				<input type="hidden" name="cat_id" id="cat_id" value="<?php echo $rows[0]->cat_id;?>" />
				<input type="submit" value="Submit" id="submit" />
				<p><a href="javascript:history.go(-1)">Cancel</a></p>
			</div>
		</div>
		</form>
<?php $this->load->view('footer'); ?>