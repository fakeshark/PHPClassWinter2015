<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>
<body>
    <div id="content">
        <h1>Product Discount Calculator</h1>
        <?php 
		$prodDesc = $_POST['product_description'];
		$listPrice = $_POST['list_price'];
		$discPercent = $_POST['discount_percent'];
		$discount_price_formatted = ($listPrice - (( $discPercent / 100 ) * $listPrice ));
		$discount_formatted = $listPrice - $discount_price_formatted;
		
		if (empty($prodDesc)) {
			$error_message  =    "Product Description is a required field.";
		} else if (!is_string($prodDesc)) {
			$error_message  =    "Product Description must contain valid data.";
		} else if (empty($listPrice)) {
			$error_message  =    "List price is a required field.";
		} else if (!is_numeric($listPrice)) {
			$error_message  =    "List price must be a valid number.";
		} else if (empty($discPercent)) {
			$error_message  =    "Discount percent is a required field.";
		} else if (!is_numeric($discPercent)) {
			$error_message  =    "Discount Percent must be a valid number.";
                } else { 
                        $error_message  =    ""; 
                }
	?>
        
        <?php echo $error_message."<br />"; ?>
		
        <label>Product Description:</label>
        <span><?php echo $prodDesc; ?></span><br />

        <label>List Price:</label>
        <span><?php echo '$'.number_format((float)$listPrice, 2, '.', ''); ?></span><br />

        <label>Standard Discount:</label>
        <span><?php echo $discPercent.'%'; ?></span><br />

        <label>Discount Amount:</label>
        <span><?php echo '$'.number_format((float)$discount_formatted, 2, '.', ''); ?></span><br />

        <label>Discount Price:</label>
        <span><?php	echo '$'.number_format((float)$discount_price_formatted, 2, '.', ''); ?></span><br />

        <p>&nbsp;</p>
    </div>
</body>
</html>