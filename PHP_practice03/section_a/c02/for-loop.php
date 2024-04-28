<?php
/* Create a simple for loop to find the prices of multiple candy packs. Let us assume one pack of candy costs $1.99. How much did ten packs cost? Display each pack's costs on the web page. */
?>
<!DOCTYPE html>
<html>

<head>
  <title>for Loop</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Prices for Multiple Packs</h2>
  <p>
    <?php
    /* Write your code here */

    $totlaPacks=10;
    $costPerPack=1.99;

    for($i=1;$i<=$totlaPacks;$i++)
    {
      $eachPackCost= $costPerPack*$i;
    ?>

    <p>Cost for <?= $i?> Pack<?php  echo ($i > 1)? "s":""?>  is: <?= $eachPackCost ?></p>
  </p>
<?php } ?>
</body>

</html>