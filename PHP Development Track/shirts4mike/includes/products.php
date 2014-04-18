<?php
	//*********This File is a Model Because if is Related to Data.*****************//
	//         It generates the array that holds data about the                    //
    //         shirts (color, price, sku, etc). Also the function 				   //
    //		   get_list_view_html and the code that runs get_list_view_html		   //
    //		   for the 4 most recently added shirts are here in the model 		   //
    //		   becasue they determine how shirt data is render on the page.        //

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

	//This is a funtion that returns an array of recent products. It is
	//purely about data.  There is not HTML output
	function get_products_recent () {
		$recent = array();
		$all = get_products_all();
		
		$total_products = count($all);
		$position = 0;
		
		foreach($all as $product) {
			$position += 1;
			if ($total_products - $position < 4) {
				$recent[] = $product;
			}
		}
		return $recent;
	}


	//This function loops through the entire products array, 
	//identifies which elements contain the search term,
	//inserts those elements into a working results array
	//and then return the array
	function get_products_search ($s) {
		$results = array();
		$all = get_products_all();

		foreach($all as $product) {
			//This loop goes through each element in the 
			//master products array and checks if the 
			//search term exists in the shirt title. If
			//the search term does exist in the shirt title
			//stripos returns TRUE and that element from the
			//master array is added to the $results array.
			if (stripos($product["name"], $s) !== FALSE) {
				$results[] = $product;
			}
		}
		return $results;
	}

	//This function returns the total number of T-shirts
	//in the $products array

	function get_product_count () {
		$product_count = count(get_products_all());
		return $product_count;
	}



	//This function generates all shirt product data
	function get_products_all () {
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
		    "name" => "Logo Shirt, Teal",
		    "img" => "img/shirts/shirt-107.jpg",    
		    "price" => 20,
		    "paypal" => "25KA2KJZGJDJE",
	    	"sizes" => array ("Small", "Medium", "Large", "X-Large")
		);
		$products[108] = array(
		    "name" => "Mike the Frog Shirt, Orange",
		    "img" => "img/shirts/shirt-108.jpg",    
		    "price" => 25,
		    "paypal" => "52BEZ2DV74R7A",
	    	"sizes" => array ("Large", "X-Large")
		);
		$products[109] = array(
            "name" => "Get Coding Shirt, Gray",
            "img" => "img/shirts/shirt-109.jpg",    
            "price" => 20,
            "paypal" => "J6CGARRT598UN",
            "sizes" => array("Small","Medium","Large","X-Large")
    	);
    	$products[110] = array(
            "name" => "HTML5 Shirt, Orange",
            "img" => "img/shirts/shirt-110.jpg",    
            "price" => 22,
            "paypal" => "REB4BEVEBPFK2",
            "sizes" => array("Small","Medium","Large","X-Large")
    	);
    	$products[111] = array(
            "name" => "CSS3 Shirt, Gray",
            "img" => "img/shirts/shirt-111.jpg",    
            "price" => 22,
            "paypal" => "S23YW2ZC7JY2W",
            "sizes" => array("Small","Medium","Large","X-Large")
    	);
    	$products[112] = array(
            "name" => "HTML5 Shirt, Blue",
            "img" => "img/shirts/shirt-112.jpg",    
            "price" => 22,
            "paypal" => "B4AHLFQNB7KDU",
            "sizes" => array("Small","Medium","Large","X-Large")
    	);
    	$products[113] = array(
            "name" => "CSS3 Shirt, Black",
            "img" => "img/shirts/shirt-113.jpg",    
            "price" => 22,
            "paypal" => "87FQJ4QWCDMR2",
            "sizes" => array("Small","Medium","Large","X-Large")
	    );
	    $products[114] = array(
	            "name" => "PHP Shirt, Yellow",
	            "img" => "img/shirts/shirt-114.jpg",    
	            "price" => 24,
	            "paypal" => "2DTM75LVNYFHW",
	            "sizes" => array("Small","Medium","Large","X-Large")
	    );
	    $products[115] = array(
	            "name" => "PHP Shirt, Purple",
	            "img" => "img/shirts/shirt-115.jpg",    
	            "price" => 24,
	            "paypal" => "AK998ANDTKU3G",
	            "sizes" => array("Small","Medium","Large","X-Large")
	    );
	    $products[116] = array(
	            "name" => "PHP Shirt, Green",
	            "img" => "img/shirts/shirt-116.jpg",    
	            "price" => 24,
	            "paypal" => "8GXGDNMFPLCGQ",
	            "sizes" => array("Small","Medium","Large","X-Large")
	    );
	    $products[117] = array(
            "name" => "Get Coding Shirt, Red",
            "img" => "img/shirts/shirt-117.jpg",    
            "price" => 20,
            "paypal" => "WM99NNTPQFMYE",
            "sizes" => array("Small","Medium","Large","X-Large")
	    );
	    $products[118] = array(
	            "name" => "Mike the Frog Shirt, Purple",
	            "img" => "img/shirts/shirt-118.jpg",    
	            "price" => 25,
	            "paypal" => "MBYHXYHNYKPTC",
	            "sizes" => array("Small","Medium","Large","X-Large")
	    );
	    $products[119] = array(
	            "name" => "CSS3 Shirt, Purple",
	            "img" => "img/shirts/shirt-119.jpg",    
	            "price" => 22,
	            "paypal" => "JTS43K7M9R5YW",
	            "sizes" => array("Small","Medium","Large","X-Large")
	    );
	    $products[120] = array(
	            "name" => "HTML5 Shirt, Red",
	            "img" => "img/shirts/shirt-120.jpg",    
	            "price" => 22,
	            "paypal" => "FLRFNH37GMKGA",
	            "sizes" => array("Small","Medium","Large","X-Large")
	    );
	    $products[121] = array(
	            "name" => "Get Coding Shirt, Blue",
	            "img" => "img/shirts/shirt-121.jpg",    
	            "price" => 20,
	            "paypal" => "TAUJ7JSLWMJSE",
	            "sizes" => array("Small","Medium","Large","X-Large")
	    );
	    $products[122] = array(
	            "name" => "PHP Shirt, Gray",
	            "img" => "img/shirts/shirt-122.jpg",    
	            "price" => 24,
	            "paypal" => "5WZHGHYHVBUFL",
	            "sizes" => array("Small","Medium","Large","X-Large")
	    );
	    $products[123] = array(
	            "name" => "Mike the Frog Shirt, Green",
	            "img" => "img/shirts/shirt-123.jpg",    
	            "price" => 25,
	            "paypal" => "STDAUJJTSPT54",
	            "sizes" => array("Small","Medium","Large","X-Large")
	    );
	    $products[124] = array(
	            "name" => "Logo Shirt, Yellow",
	            "img" => "img/shirts/shirt-124.jpg",    
	            "price" => 20,
	            "paypal" => "4FBNBFHK23E3W",
	            "sizes" => array("Small","Medium","Large","X-Large")
	    );
	    $products[125] = array(
            "name" => "CSS3 Shirt, Blue",
            "img" => "img/shirts/shirt-125.jpg",    
            "price" => 22,
            "paypal" => "9DAFQXJ99TT8E",
            "sizes" => array("Small","Medium","Large","X-Large")
	    );
	    $products[126] = array(
	            "name" => "Doctype Shirt, Green",
	            "img" => "img/shirts/shirt-126.jpg",    
	            "price" => 25,
	            "paypal" => " 5FAP64QFQMH7Q",
	            "sizes" => array("Small","Medium","Large","X-Large")
	    );
	    $products[127] = array(
	            "name" => "Logo Shirt, Purple",
	            "img" => "img/shirts/shirt-127.jpg",    
	            "price" => 20,
	            "paypal" => "DYAND3MBJMXFG",
	            "sizes" => array("Small","Medium","Large","X-Large")
	    );
	    $products[128] = array(
	            "name" => "Doctype Shirt, Purple",
	            "img" => "img/shirts/shirt-128.jpg",    
	            "price" => 25,
	            "paypal" => "WECTZ66T8EKGW",
	            "sizes" => array("Small","Medium","Large","X-Large")
	    );
	    $products[129] = array(
	            "name" => "Get Coding Shirt, Green",
	            "img" => "img/shirts/shirt-129.jpg",    
	            "price" => 20,
	            "paypal" => "TVAXN4FX4AY7A",
	            "sizes" => array("Small","Medium","Large","X-Large")
	    );
	    $products[130] = array(
	            "name" => "HTML5 Shirt, Teal",
	            "img" => "img/shirts/shirt-130.jpg",    
	            "price" => 22,
	            "paypal" => "69WGSY3XLB27J",
	            "sizes" => array("Small","Medium","Large","X-Large")
	    );
	    $products[131] = array(
	            "name" => "Logo Shirt, Orange",
	            "img" => "img/shirts/shirt-131.jpg",    
	            "price" => 20,
	            "paypal" => "79FB8CDT9A95J",
	            "sizes" => array("Small","Medium","Large","X-Large")
	    );
	    $products[132] = array(
	            "name" => "Mike the Frog Shirt, Red",
	            "img" => "img/shirts/shirt-132.jpg",    
	            "price" => 25,
	            "paypal" => "JAAFF7GW6Z4E8",
	            "sizes" => array("Small","Medium","Large","X-Large")
	    );


		
		//This loop duplicates the $products index as a second dimension
		//element calld "sku"
		foreach ($products as $product_id => $product) {
			$products[$product_id]["sku"] = $product_id;
		}

		return $products;
	}	




?>
