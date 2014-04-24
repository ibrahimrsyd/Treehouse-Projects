<?php
	require_once("../inc/config.php");

	//***************START OF CONTROLLER CODE****************//
	$search_term = "";
	
	//This nested if block is controller code becasue it
	//confirms that a search is being performed.
	if (isset($_GET["s"])) {
		$search_term = trim($_GET["s"]);
		if ($search_term != "") {
			//Now we have confirmed that a search operation
			//is being performed, this controller code will
			//send the search term to the model by 
			//1) including the model file and 2) calling a 
			//function which contains the search logic.
			
			// 1) including the model file
			require_once(ROOT_PATH . "inc/model/products.php" );

			// 2) calling a function which contains the 
			// search logic.
			$products = get_products_search($search_term);
		}
	} 


	//****************END OF CONTROLLER CODE*****************//


	$pageTitle = "Search";
	$section = "search";
	include(ROOT_PATH . "inc/view/header.php"); ?>

		<div class="section shirts search page">

			<div class="wrapper">

				<h1>Search</h1>

				<form method="get" action="./index.php">
					<input type="text" name="s" value="<?php echo htmlspecialchars($search_term); ?>">
					<input type="submit" value="Go">
				</form>

				<?php
					include(ROOT_PATH . "inc/view/single-tshirt-list-view.html.php");
					if ($search_term != "") {
						if (!empty($products)) {
							echo '<ul class="products">';
							foreach($products as $product) {
								echo get_list_view_html($product);
							}
							echo '</ul>';
						} else {
							echo '<p>No products were found matching that search term.</p>';
						}
					}
				?>

			</div>

		</div>

	<?php include(ROOT_PATH . "inc/view/footer.php"); ?>