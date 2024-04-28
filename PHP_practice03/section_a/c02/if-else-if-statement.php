<?php
/* Write your code here */
$candyStock=20;
?>
<!DOCTYPE html>
<html>

<head>
  <title>if else if Statement</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Chocolate</h2>
  <?php
  /* Write your code here */

  if($candyStock >0)
  {
    echo  "<p>Sold Out</p>";
  }
  else if($candyStock < 0)
  {
    echo "<p>In Stock</p>";
  }
  else{
    echo "<p>Coming Soon!</p>";
  }

  ?>
</body>

</html>