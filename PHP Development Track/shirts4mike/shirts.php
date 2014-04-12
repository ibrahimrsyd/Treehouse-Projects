<?php include('includes/products.php'); ?>

<?php
	$pageTitle = "Mike's Full Catalog of Shirts";
	$section = "shirts";
	//Include header
	include('includes/header.php'); 
?>



	<div class="section shirts page">

		<div class="wrapper">
			
			<h1>Mike's Full Catalog of Shirts</h1>
	
			<ul class="products">
				<?php foreach($products as $product_id => $product) { 
					echo get_list_view_html($product_id, $product);
				} ?>
			</ul>

		</div>


	</div>



<?php 
	//Adding the footer
	include("includes/footer.php"); 
?>