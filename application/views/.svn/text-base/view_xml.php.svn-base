<?php 
header("Content-Type: application/xhtml+xml; charset=utf-8");
echo('<?xml version="1.0" encoding="UTF-8"?>'.PHP_EOL); ?>
<gallery thumbWidth="<?php echo $settings[0]->thumb_width; ?>" thumbHeight="<?php echo $settings[0]->thumb_height; ?>">
<?php if(isset($row)) {
	foreach($row as $r) { ?>
<category>
	<title><![CDATA[<?php echo $r->title;?>]]></title>
	<description><![CDATA[<?php echo $r->description;?>]]></description>
	<assets>
	<?php if(isset($r->images)) {
		foreach($r->images as $img) { ?>
<image>
		<large><?php echo base_url();?>uploads/<?php echo $img->filename;?></large>
	 	<thumbnail><?php echo base_url();?>uploads/<?php echo $img->thumbnail;?></thumbnail>
		<caption><![CDATA[<?php echo $img->caption;?>]]></caption>
	</image>
	<?php } } ?>
</assets>
</category>
<?php } } ?>
</gallery>