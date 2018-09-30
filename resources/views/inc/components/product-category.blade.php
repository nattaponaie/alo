<?php 
function display_product_category($productID,$productImageURL,$productName){ ?>
		<a href="index.php?page=single-product&product_id=<?php echo $productID ?>">
			<img src="<?php echo $productImageURL;?>" class="img-responsive" alt="">
			<h3>
			<?php echo $productName;?>
			<mark class="count">(2)</mark>
			</h3>
		</a>
			
<?php } ?>