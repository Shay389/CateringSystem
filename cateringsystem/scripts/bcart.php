<?php

session_start();
$status="";
if (isset($_POST['action']) && $_POST['action']=="remove"){
if(!empty($_SESSION["shopping_cart"])) {
    foreach($_SESSION["shopping_cart"] as $key => $value) {
        if($_POST["code"] == $key){
        unset($_SESSION["shopping_cart"][$key]);
        $status = "<div class='box' style='color:red;'>
        Product is removed from your cart!</div>";
        }
        if(empty($_SESSION["shopping_cart"]))
        unset($_SESSION["shopping_cart"]);
            }       
        }
}

if (isset($_POST['action']) && $_POST['action']=="change"){
  foreach($_SESSION["shopping_cart"] as &$value){
    if($value['code'] === $_POST["code"]){
        $value['quantity'] = $_POST["quantity"];
        break; // Stop the loop after we've found the product
    }
}
    
}
?>
<html>
<head>
<title></title>
<link rel='stylesheet' href='../css/cart.css' type='text/css' media='all' />
</head>
<body>
<div style="width:700px; margin:50 auto;">

<h2>Food Cart</h2>   

<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<div class="cart_div">
<a href="cart.php">
<img src="cart-icon.png" /> Cart
<span><?php echo $cart_count; ?></span></a>
</div>
<?php
}
?>

<div class="cart">
<?php
if(isset($_SESSION["shopping_cart"])){
    $total_price = 0;
?>  
<table class="table">
<tbody>
<tr>
<td></td>
<td>ITEM NAME</td>
<td>QUANTITY</td>
<td>UNIT PRICE</td>
<td>ITEMS TOTAL</td>
</tr>   
<?php       
foreach ($_SESSION["shopping_cart"] as $breakfast){
?>
<tr>
<td><?php echo $breakfast["name"]; ?><br />
<form method='post' action=''>
<input type='hidden' name='code' value="<?php echo $breakfast["code"]; ?>" />
<input type='hidden' name='action' value="remove" />
<button type='submit' class='remove'>Remove Item</button>
</form>
</td>
<td>s
<form method='post' action=''>
<input type='hidden' name='code' value="<?php echo $breakfast["code"]; ?>" />
<input type='hidden' name='action' value="change" />
<select name='quantity' class='quantity' onchange="this.form.submit()">
<option <?php if($breakfast["quantity"]==1) echo "selected";?> value="1">1</option>
<option <?php if($breakfast["quantity"]==2) echo "selected";?> value="2">2</option>
<option <?php if($breakfast["quantity"]==3) echo "selected";?> value="3">3</option>
<option <?php if($breakfast["quantity"]==4) echo "selected";?> value="4">4</option>
<option <?php if($breakfast["quantity"]==5) echo "selected";?> value="5">5</option>
</select>
</form>
</td>
<td><?php echo "Ksh".$breakfast["price"]; ?></td>
<td><?php echo "Ksh".$breakfast["price"]*$breakfast["quantity"]; ?></td>
</tr>
<?php
$total_price += ($breakfast["price"]*$breakfast["quantity"]);
}
?>
<tr>
<td colspan="5" align="right">
<strong>TOTAL: <?php echo "Ksh".$total_price; ?></strong>
</td>
<td><a href="../receipt.html">Place Order</a></td>
</tr>
</tbody>
</table>        
  <?php
}else{
    echo "<h3>Your cart is empty!</h3>";
    }
?>
</div>

<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>


<br /><br />

</div>
</body>
</html>