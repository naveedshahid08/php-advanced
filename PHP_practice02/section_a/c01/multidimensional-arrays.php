<?php

/* 
  Write you php code here

   */

   $offers = array(
    array(
      "name" => "Soy Jelly",

    ),
   array(

      "price"=>"5% Discount",

    ),
    array(
      "stock_level"=>"5%",

    ),




  );


?>
<!DOCTYPE html>
<html>

<head>
  <title>Multidimensional Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <!-- <h2>Offers :<?php echo $offers[0]['name']; echo " "; echo $offers[1]['price']; echo " "; echo $offers[2]['stock_level'];?> </h2> -->
  <h2>Offers: <?= $offers[0]['name'] ?> <?= $offers[1]['price']?><?= $offers[2]['stock_level'];?></h2> <!-- This is the modern and short way to echo variables in PHP -->

</body>

</html>