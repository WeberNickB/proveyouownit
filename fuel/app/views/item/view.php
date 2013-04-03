<h2>Viewing #<?php echo $item->id; ?></h2>

<p>
	<strong>Itemname:</strong>
	<?php echo $item->itemname; ?></p>
<p>
	<strong>Itemdescription:</strong>
	<?php echo $item->itemdescription; ?></p>
<p>
	<strong>Itemserial:</strong>
	<?php echo $item->itemserial; ?></p>

<?php echo Html::anchor('item/edit/'.$item->id, 'Edit'); ?> |
<?php echo Html::anchor('item', 'Back'); ?>