<?php
	/*********************BEGINNING OF CONTROLLER CODE**********************/
	require_once("../includes/config.php");
	require_once(ROOT_PATH . 'includes/products.php'); 

	//If there is no page number variable in the query string,
	//proceed as if on the first page. Otherwise, display the
	//shirts appropriate for the page number in teh query
	//string.
	/*
	if (empty($_GET["pg"])) {
		$current_page = 1;
	} else {
		$current_page = $_GET["pg"];
	}

	$total_products = get_product_count();
	$products_per_page = 8;	
	$total_pages = ceil($total_products/$products_per_pages);


	//TROUBLESHOOTING CODE
	echo "<pre>";
	echo "Total Products";
	exit;

	$products = get_products_all();
	*/
	/************************END OF CONTROLLER CODE*************************/
?>




<?php
	$pageTitle = "Mike's Full Catalog of Shirts";
	$section = "shirts";
	//Include header
	require_once("../includes/config.php");
	include(ROOT_PATH . 'includes/header.php'); 
?>



	<div class="section shirts page">

		<div class="wrapper">
			
			<h1>Mike's Full Catalog of Shirts</h1>
	
			<ul class="products">
				<?php 
					$products = get_products_all();;
					foreach($products as $product) { 
						echo get_list_view_html($product);
					}

				?>
			</ul>

		</div>


	</div>



<?php 
	//Adding the footer
	include(ROOT_PATH . "includes/footer.php"); 
?>