<?php
/*
Write your code here

*/

$candyStock=100;

?>
<!DOCTYPE html>
<html>

<head>
  <title>if else Statement</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Chocolate</h2>
  <?php
  /* Write your code here */
/* if($candyStock > 0)
{
  echo "<p>In Stock<p/>";
}
else{
  echo "<p>Sold Out<p/>";
} */
echo ($candyStock > 0) ?  "<p>In Stock</p>" :  "<p>Sold Out</p>";
  ?>
</body>

</html>