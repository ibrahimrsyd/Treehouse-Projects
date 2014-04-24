<?php
	/*********************BEGINNING OF CONTROLLER CODE**********************/
	require_once("../inc/config.php");
	require_once(ROOT_PATH . 'inc/model/products.php'); 

	//If there is no page number variable in the query string,
	//proceed as if on the first page. Otherwise, assign the pg
	//query value to the $current_page variable.	
	if (empty($_GET["pg"])) {
		$current_page = 1;
	} else {
		$current_page = $_GET["pg"];
	}

	//Convert the $current_page variable to integrer
	$current_page=intval($current_page);

	//Initialize $total products, $products per page and 
	//calculate $total number of pages
	$total_products = get_products_count();
	$products_per_page = 8;	
	$total_pages = ceil($total_products/$products_per_page);

	//Controller code that decides what to do if the pg
	//query value is too large or too small/not an INT type
	if ($current_page > $total_pages) {
		header("Location: ./?pg=" . $total_pages);
	} else if ($current_page < 1) {
		header("Location: ./");
	}

	$start = (($current_page - 1) * $products_per_page) + 1;
	$end = $current_page * $products_per_page;
	
	if ($end > $total_products) {
		$end = $total_products;
	}

	$products = get_products_subset($start,$end);

	/************************END OF CONTROLLER CODE*************************/
?>




<?php
	$pageTitle = "Mike's Full Catalog of Shirts";
	$section = "shirts";
	//Include header
	require_once("../inc/config.php");
	include(ROOT_PATH . 'inc/view/header.php'); 
?>



	<div class="section shirts page">

		<div class="wrapper">
			
			<h1>Mike&rsquo;s Full Catalog of Shirts</h1>
			
			<?php include(ROOT_PATH . "inc/view/partial-list-navigation.html.php"); ?>
			<?php include(ROOT_PATH . "inc/view/single-tshirt-list-view.html.php"); ?>

			<ul class="products">
				<?php 
					foreach($products as $product) { 
						echo get_list_view_html($product);
					}

				?>
			</ul>

			<?php include(ROOT_PATH . "inc/view/partial-list-navigation.html.php"); ?>

		</div>


	</div>



<?php 
	//Adding the footer
	include(ROOT_PATH . "inc/view/footer.php"); 
?>