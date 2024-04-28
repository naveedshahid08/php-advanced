<?php
/* 
   Create a simple foreach loop for candy products, e.g. Toffee costs 2.99, Mints costs 1.99, and Fudge costs 3.49 and show it in the web page table.
     */
    $candyProducts = array("Toffe"=>2.99,"Mints"=>1.99,"Fudge"=>3.49) 
?>
<!DOCTYPE html>
<html>

<head>
  <title>foreach Loop</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Price List</h2>
  <table>
    <tr>
      <th>Item</th>
      <th>Price</th>
    </tr>
    
    <?php
    foreach($candyProducts as $candy => $candyPrice){
    /* var_dump($candy);
    var_dump($candyPrice); */
      ?>

      <tr>
        <td><?= $candy ?></td>
        <td><?= $candyPrice ?></td>
      </tr>

      <?php } ?>
    

     
     
  </table>
</body>

</html>