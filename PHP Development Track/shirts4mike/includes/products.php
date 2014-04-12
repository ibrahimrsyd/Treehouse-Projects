<?php
	//get_list_view_html() generates the HTML necessary to create a list view
	//of T-Shirts
	function get_list_view_html ($product_id, $product) {
		//Build HTML output for a single T-Shirt
		$output = "";
		$output .= "<li>";
		$output .= '<a href="shirt.php?id=' . $product_id .'">';
		$output .= '<img src="' . $product["img"] . '" alt="' . $product["name"]. '">';
		$output .= "<p>View Details</p>";
		$output .= "</a>";
		$output .= "</li>";
		return $output;
	}


	//Shirt Product Data
	$products = array();
	$products[101] = array(
	    "name" => "Logo Shirt, Red",
	    "img" => "img/shirts/shirt-101.jpg",
	    "price" => 18,
	    "paypal" => "QAQXFLHA2KMXU",
	    "sizes" => array ("Small", "Medium", "Large", "X-Large")
	);
	$products[102] = array(
	    "name" => "Mike the Frog Shirt, Black",
	    "img" => "img/shirts/shirt-102.jpg",
	    "price" => 20,
	    "paypal" => "DTAXQWA6RN9AW",
    	"sizes" => array ("Small", "Medium", "Large", "X-Large")
	);
	$products[103] = array(
	    "name" => "Mike the Frog Shirt, Blue",
	    "img" => "img/shirts/shirt-103.jpg",    
	    "price" => 20,
	    "paypal" => "M9XTWUYA6Q546",
    	"sizes" => array ("Small", "Medium", "Large", "X-Large")
	);
	$products[104] = array(
	    "name" => "Logo Shirt, Green",
	    "img" => "img/shirts/shirt-104.jpg",    
	    "price" => 18,
	    "paypal"=> "6KJ4WB6PGF282",
    	"sizes" => array ("Small", "Medium", "Large", "X-Large")
	);
	$products[105] = array(
	    "name" => "Mike the Frog Shirt, Yellow",
	    "img" => "img/shirts/shirt-105.jpg",    
	    "price" => 25,
	    "paypal" => "52BEZ2DV74R7A",
    	"sizes" => array ("Small", "Medium", "Large", "X-Large")
 	);
	$products[106] = array(
	    "name" => "Logo Shirt, Gray",
	    "img" => "img/shirts/shirt-106.jpg",    
	    "price" => 20,
	    "paypal" => "H4ABHJFNQC8V2",
    	"sizes" => array ("Small", "Medium", "Large", "X-Large")
	);
	$products[107] = array(
	    "name" => "Logo Shirt, Turquoise",
	    "img" => "img/shirts/shirt-107.jpg",    
	    "price" => 20,
	    "paypal" => "25KA2KJZGJDJE",
    	"sizes" => array ("Small", "Medium", "Large", "X-Large")
	);
	$products[108] = array(
	    "name" => "Logo Shirt, Orange",
	    "img" => "img/shirts/shirt-108.jpg",    
	    "price" => 25,
	    "paypal" => "52BEZ2DV74R7A",
    	"sizes" => array ("Large", "X-Large")
	);
?>
