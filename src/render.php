<p <?php echo get_block_wrapper_attributes(); ?>>

	<?php $dateFormat = get_option('date_format'); ?>
	<?php echo "Today is " . date($dateFormat); ?>
</p>
