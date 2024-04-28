<?php

/* 
  Write you php code here

   */
  $quantityWanted=300;
  $quantityStock=400;
  $comparison = $quantityWanted  <= $quantityStock ;

?>
<!DOCTYPE html>
<html>

<head>
  <title>Comparison Operators</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Shopping Cart</h2>
  <p><?= $comparison; ?></p>
  <p></p>

</body>

</html>