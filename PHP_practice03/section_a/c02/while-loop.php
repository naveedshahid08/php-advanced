<?php
/* Create a simple while loop to find prices for multiple packs of candy. For example, if one pack costs $1.99 how much would 5 pack costs? Display the prices for all 5 packs of candy. */
$candyPack=1.99;
$totalPacks=10;

?>
<!DOCTYPE html>
<html>

<head>
  <title>while Loop</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Prices for Multiple Packs</h2>
  <p>
    <?php
    /* Write your code here */
    $counter=1;
    while($counter <=$totalPacks)
    {
      $totalPrice = $candyPack*$counter;
      
      echo "<p>Price for" .$counter."Pack is ".$totalPrice." $</p>";
      $counter++;
    }
    ?>
  </p>
</body>

</html>