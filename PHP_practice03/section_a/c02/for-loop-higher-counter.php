<?php
/* Create a simple for loop to find prices of multiple higher packs of candy. Let us assume the customer wants 10 packs to 100 packs of candies. How much do 10 to 100 packs cost? Display from 10 packs to 100 packs cost on the web page. */

?>
<!DOCTYPE html>
<html>

<head>
  <title>for Loop - Higher Counter</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Prices for Large Orders</h2>
  <p>
    <?php
    /* Write your code here */
    $costPerPack=2.99;
    $totalPacks=90;

    for($i=10;$i<=100;$i++)
    {

      $totalPrice=$costPerPack*$i;

    ?>
    <table style="width:50%">
  <tr>
    <th><?php echo "Packer Number:" ?></th>
    <th><?php echo "Price Per Pack:" ?></th>
    <th><?php echo "Each Pack Price:" ?></th> 
   
  </tr>
  <tr>
    <td><?= $i ?> </td>
    <td><?= $costPerPack ?></td>
    <td><?= $totalPrice ?></td>
   
  </tr>
</table>
    <?php } ?>
  </p>
</body>

</html>