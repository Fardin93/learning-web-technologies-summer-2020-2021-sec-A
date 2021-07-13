<?php
    session_start();
    require_once('../model/product_model.php');
    $id=$_GET['id'];
	$data=getProductbyId($id);

	$_SESSION['edit_id']=$id;

?>





<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="../controller/updateProductCk.php">
		<fieldset>
			<legend>EDIT PRODUCT</legend>
			<table>
				<tr>
					<td>Name</td>
					<td><input type="text" name="name" value="<?php echo$data['name'] ?>"></td>
				</tr>
				<tr>
					<td>Buying price</td>
					<td><input type="text" name="buying" value="<?php echo$data['BuyingPrice'] ?>"></td>
				</tr>
				<tr>
					<td>Selling Price</td>
					<td><input type="text" name="selling" value="<?php echo$data['SellingPrice'] ?>"></td>
				</tr>
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
				<tr>
					<td><input type="checkbox" name="display" id=""></td>
                    <td>display</td>
				</tr>
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
				<tr>
					<td>
						<input type="submit" name="submit" value="Save"> 
						
					</td>
                    <td></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>