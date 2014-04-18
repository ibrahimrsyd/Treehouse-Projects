<?php
	$pageTitle = "Unique T-Shirts Designed By a Frog";
	$section = "";
	//Include config and header files
	require_once("includes/config.php");
	include(ROOT_PATH . "includes/products.php");
	//IMPORTANT: Even though it is in a view file
	//this line of code is CONTROLLER CODE because
	//it calls the recent shirt data from the model.
	$recent = get_products_recent();
	include(ROOT_PATH . "includes/header.php"); 
?>


		<div class="section banner">

			<div class="wrapper">

				<img class="hero" src="<?php echo BASE_URL ?>img/mike-the-frog.png" alt="Mike the Frog says:">
				<div class="button">
					<a href="<?php echo BASE_URL ?>shirts.php">
						<h2>Hey, I&rsquo;m Mike!</h2>
						<p>Check Out My Shirts</p>
					</a>
				</div>
			</div>

		</div>

		<div class="section shirts latest">

			<div class="wrapper">

				<h2>Mike&rsquo;s Latest Shirts</h2>

				<ul class="products">
					<?php
						$list_view_html = "";
						foreach($recent as $product) {
								$list_view_html = get_list_view_html($product) . $list_view_html;
						}
						echo $list_view_html;
					?>				
				</ul>

			</div>

		</div>

	<?php 
		//Adding the footer
		include(ROOT_PATH . "includes/footer.php"); 
	?>