<?php
if ( !empty($prodDesc) ) {
    echo $prodDesc;
} else {
    echo rand(1,99);
}

echo '<form action="display_discount.php" method="post">';

echo '<div id="data">';
echo '<label>Product Description:</label>';
echo '<input type="text" name="product_description" value="';
if ( !empty($prodDesc) ) { echo $prodDesc; } else { echo rand(1,99);}
echo '" /><br />';
echo '<label>List Price:</label>';
echo '<input type="text" name="list_price" value="" /><br />';

echo '<label>Discount Percent:</label>';
echo '<input type="text" name="discount_percent" value="" />%<br />';
echo '</div>';

echo '<div id="buttons">';
echo '<label>&nbsp;</label>';
echo '<input type="submit" value="Calculate Discount" /><br />';
echo '</div>';

echo '</form>';


