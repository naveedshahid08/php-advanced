<?php

/* 
  Write you php code here

   */
$best_sellers = array("Chocolate","Mints","Fudge","Bubble gum","Toffee","elly Beans ");
?>
<!DOCTYPE html>
<html>

<head>
  <title>Indexed Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Best Sellers :
  <!-- <?php foreach ($best_sellers as $value) {
  echo "<br> $value";}?> -->
  <?php echo $best_sellers[0];?>,
  <?php echo $best_sellers[1];?>,
  <?php echo $best_sellers[2];?>,
  <?php echo $best_sellers[3];?>,
  <?php echo $best_sellers[4];?>,
  <?php echo $best_sellers[5];?>
  </h2>

</body>

</html>