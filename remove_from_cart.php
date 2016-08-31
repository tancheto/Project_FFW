<?php
// get the product id
$id = isset($_GET['id']) ? $_GET['id'] : "";
$name = isset($_GET['name']) ? $_GET['name'] : "";
 
// read
$cookie = $_COOKIE['cart_items_cookie'];
$cookie = stripslashes($cookie);
$saved_cart_items = json_decode($cookie, true);
 
// remove the item from the array
$saved_cart_items = array_diff($saved_cart_items, array($id=>$name));
 
// delete cookie value
setcookie("cart_items_cookie", "", time()-3600);
 
// enter new value
$json = json_encode($saved_cart_items, true);
setcookie('cart_items_cookie', $json);
 
// redirect to product list and tell the user it was added to cart
header('Location: cart.php?action=removed&id=' . $id . '&name=' . $name);
 
?>