<?php $this->load->view('header'); ?>
		<h1>Category Details</h1>
		<p><a href="<?php echo site_url("gallery")?>">Back to Gallery</a></p>
		<p><span class="data-label">Title: <br /></span><?php echo $rows[0]->title; ?></p>
		<p><span class="data-label">Description: <br /></span><?php echo $rows[0]->description; ?></p>
<?php $this->load->view('footer'); ?>