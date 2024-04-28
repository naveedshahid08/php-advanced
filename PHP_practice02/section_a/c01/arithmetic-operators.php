<?php

/* 
  Write you php code here

   */

  $item=3;
  $pricePack=5;
  $subTotal=$item*$pricePack;
  $tax=($subTotal/100)*24;
  $orderCost = $subTotal + $tax;


?>
<!DOCTYPE html>
<html>

<head>
  <title>Mathematical Operators</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Shopping Cart </h2>
  <h3>
  <p>The price per pack is :<?=$pricePack ?></p>
  <p>The tax per item is :<?=$tax ?></p>
  <p>The order cost is :<?=$orderCost ?></p>
  </h3>
  

</body>

</html>