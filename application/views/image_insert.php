<?php $this->load->view('header'); ?>
	<h1><?php echo $info[0]->title;?> - Add Image</h1>
	<div id="gallery-insert" class="form-page">
		<form action="<?php echo site_url("gallery/do_upload")?>" method="post" name="insert_image" enctype="multipart/form-data">
			<div>
				<span>Order ID:<br /><em>Lower numbers will appear first</em><br></span>
				<select name="order_num" id="order_num">
				  	<?php for($i=0;$i<101;$i++) { ?>
					<?php echo("<option value='$i'>$i</option>"); ?>
					<?php } ?>
				</select>
			</div>
			<div>
				<span>Caption:<br /><em>You may enter HTML. Flash accepts basic HTML tags such as &lt;B&gt;, &lt;I&gt;, &lt;U&gt;, font color and font size tags and unordered lists. <a href="http://livedocs.adobe.com/flash/9.0/main/wwhelp/wwhimpl/common/html/wwhelp.htm?context=LiveDocs_Parts&file=00000922.html" target="_blank">View all supported HTML Tags for Flash</a></em><br /></span>
				<textarea name="caption" id="caption"></textarea>
			</div>
			<div>
				<span>Image:<br /><em>Only jpg, png and gif file formats are supported. Max upload size: 2MB.</em><br /></span>
				<input type="file" name="filename" id="filename" style="margin-bottom:10px;" />
			</div>
			<div>
				<input type="hidden" name="id" id="id" value="<?php echo $info[0]->id;?>" />
				<input type="submit" value="Submit" id="submit" />
				<p><a href="javascript:history.go(-1)">Cancel</a></p>
			</div>
		</div>
		</form>
<?php $this->load->view('footer'); ?>