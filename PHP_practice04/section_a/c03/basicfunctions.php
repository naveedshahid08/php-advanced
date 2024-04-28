<?php declare (strict_types = 1);

/**
 * Create three functions to generate the values as shown in this table. Price for Toffee is 3, Mints is 2 and Fudge is 8. -The first function should look at stock levels and create a message indicating whether or not more stock should be ordered. If the stock is less than 10 no Re-Order necessary. -The second function should find the total value of stock for each item that is sold. -And finally the third function should calculate how much tax will be due when all of the remaining stock has been sold.
 * 
 */
$tax=20;
$stockInHand=20;
$candy = [
  'Toffe' => ['price'=>3,'stock'=>5],
  'Mint' => ['price'=>2,'stock'=>7],
  'Fudge' => ['price'=>8,'stock'=>9]
]

?>
<!DOCTYPE html>
<html>

<head>
  <title>Basic Functions</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Stock Control</h2>
  <table>
    <tr>
      <th>Product</th>
      <th>Stock</th>
      <th>Re-order</th>
      <th>Total value</th>
      <th>Tax due</th>
    </tr>
    <?php foreach ($candy as $product => $data) { ?>
      <tr>
        <td><?= $product ?></td>
        <td><?= $data['price'] ?></td>
        <td><?= stockAlert($data['stock'])?></td>
        <td><?= getTotalStock($data['price'],$data['stock']) ?></td>
        <td>$<?= get_tax_due($data['price'],$data['stock'],$tax) ?></td>
      </tr>
    <?php } ?>
    <?php
    /**
     * Write your code here
     */
    
    function stockAlert(int $stock):string {
      return ($stock < 10) ? "YES" : "NO";
    }


    function getTotalStock (float $price, int $quantity) :float {
      return $price * $quantity;
    }


    function get_tax_due(float $price,int $quantity,int $tax=0):float {
      return ($price * $quantity) * ($tax/100);
    }
  

    /* {
      if($stockInHand < 0)
      {
        echo "<h1>Stock Required Immediately</h1>";
      }
      else 
      {
        echo "<h1 style='background:black; text-align:center;'>No Stock Required Immediately</h1>";
      }

    } */

    

    ?>
  </table>
  
</body>

</html>