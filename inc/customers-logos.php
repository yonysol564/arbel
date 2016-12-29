<?php  
	$customers_title  = get_field('customers_title','option');
	$customers_rep    = get_field('customers_rep','option');
	$customers_page_link   = get_field('customers_page_link','option');
?>
<div class="wrap_logos">
	<div class="row">
		<div class="large-12 column'">	
			<?php if ($customers_title) { ?>
				<a href="<?php echo $customers_page_link; ?>" title="">
					<h2 class="logos_title"><?php echo $customers_title; ?></h2>
				</a>
			<?php } ?>
		</div>
	</div>
	<div class="row logos_row">
		<div class="large-12 column'">	
			<?php if ($customers_rep) { ?>
				<?php foreach ($customers_rep as $val) { ?>
					<div class="wrap_img">	
						<img src="<?php echo $val['customer_img']['url']; ?>" alt="customer">
					</div>
				<?php } ?>
			<?php } ?>
		</div>
	</div>
</div>