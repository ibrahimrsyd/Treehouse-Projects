<?php
//get_list_view_html() generates the HTML necessary to create a list view
	//of T-Shirts
	function get_list_view_html ($product) {
		//Build HTML output for a single T-Shirt thumbnail
		$output = "";
		$output .= "<li>";
		$output .= '<a href="' . BASE_URL . "shirts/" . $product["sku"] .'/">';
		$output .= '<img src="' . BASE_URL . $product["img"] . '" alt="' . $product["name"]. '">';
		$output .= "<p>View Details</p>";
		$output .= "</a>";
		$output .= "</li>";
		return $output;
	}

?>