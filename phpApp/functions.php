<?php
require('database/DBController.php');

require('database/product.php');

require('database/cart.php'); 

require('database/users.php');

require('database/usercart.php');

require ('database/items.php');

 
$db = new DBController();
 
$product = new Product($db); 

$product_suffle = $product->getData();

$cart = new Cart($db);

$user = new User($db);

$usercart = new Usercart($db);

$items = new Items($db);

if (isset($_POST['itemid'])){
  $result = $product->getProduct($_POST['itemid']);
  
}

  ?>
