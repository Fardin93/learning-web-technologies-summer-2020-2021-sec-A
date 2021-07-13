<?php
	$title = "Product List Page";
	require_once('../model/product_model.php');
?>
<table border="1">
		<tr>
			<td>ID</td>
			<td>NAME</td>
			<td>PROFIT</td>
		</tr>
		<?php
		$products=getAllProducts();
		foreach($products as $product){
	echo "
			<tr>
				<td>{$product['product_id']}</td>
				<td>{$product['name']}</td>
				<td>{$product['SellingPrice']}-{$product['BuyingPrice']}</td>
				<td><a href='../view/updateproduct.php?id={$product['product_id']}'>edit</a> |
				    <a href='../view/delete_product.php?id={$product['product_id']}'>delete</a>
				</td>
				
			</tr>";
}
?>