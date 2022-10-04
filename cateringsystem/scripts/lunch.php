<?php

session_start();
include('db.php');
$status="";
if (isset($_POST['code']) && $_POST['code']!=""){
$code = $_POST['code'];
$result = mysqli_query($conn,"SELECT * FROM `lunch` WHERE `code`='$code'");
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$code = $row['code'];
$price = $row['price'];


$cartArray = array(
    $code=>array(
    'name'=>$name,
    'code'=>$code,
    'price'=>$price,
    'quantity'=>1,
    )
);

if(empty($_SESSION["shopping_cart"])) {
    $_SESSION["shopping_cart"] = $cartArray;
    $status = "<div class='box'>Product is added to your cart!</div>";
}else{
    $array_keys = array_keys($_SESSION["shopping_cart"]);
    if(in_array($code,$array_keys)) {
        $status = "<div class='box' style='color:red;'>
        Product is already added to your cart!</div>";  
    } else {
    $_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"],$cartArray);
    $status = "<div class='box'>Product is added to your cart!</div>";
    }

    }
}
?>
<html>
<head>
<title>Lunch cart</title>
<link rel='stylesheet' href='css/style.css' type='text/css' media='all' />
</head>
<body>
<div style="width:700px; margin:50 auto; background-image: url(../img/lunch.jpg");">

<h2>LUNCH</h2>   

<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<div class="cart_div">
<a href="lcart.php"><img src="../img/cart-icon.png" /> Cart<span><?php echo $cart_count; ?></span></a>
</div>
<?php
}

$result = mysqli_query($conn,"SELECT * FROM `lunch`");
while($row = mysqli_fetch_assoc($result)){
        echo "<div class='product_wrapper'>
              <form method='post' action=''>
              <input type='hidden' name='code' value=".$row['code']." />
              <div class='name'>".$row['name']."</div>
              <div class='price'>Ksh".$row['price']."</div>
              <button type='submit' class='buy'>Buy Now</button>
              </form>
              </div>";
        }
mysqli_close($conn);
?>

<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>

<br /><br />

</div>
</body>
</html>