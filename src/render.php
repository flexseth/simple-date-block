<p <?php echo get_block_wrapper_attributes(); ?>>

	<?php $dateFormat = get_option('date_format'); ?>

	<h2>Date format: </h2>
	<?php echo $date; ?>

	<h3>Date</h3>
	<?php echo date($dateFormat); ?>

	<?php esc_html_e( 'Simple Date Block – hello from a dynamic block!', 'fp-simple-date-block' ); ?>
</p>
