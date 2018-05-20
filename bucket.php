//bucket button

<form id="form1" name="form1" method="post" action="<?php echo $_SERVER['REQUEST_URI'];?>">
<label>
<input type="hidden" name="product_price" value="<?php echo $p['price']?>" />
<input type="hidden" name="product_id" value="<?php echo $p['pid']?>" />
<input type="hidden" name="tocart" value="tocart" />
<input type="submit" name="Submit" value=”В корзину” />
</label>
</form>

//add to cart fuction //
<?php
function addtocart($product_id, $product_price) {
$_SESSION['prod_count']++;
$incart=$_SESSION['prod_count'] - 1;
$_SESSION['product_id'][$incart] = $product_id;
$_SESSION['product_price'][$incart] = $product_price;
$_SESSION['product_count'][$incart] = 1;
}
?>