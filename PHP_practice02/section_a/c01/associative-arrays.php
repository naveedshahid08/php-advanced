<?php

/* 
  Write you php code here

   */
$nutrition = array("fat"=>"24%","sugar"=>"40%","salt"=>"20%");


?>
<!DOCTYPE html>
<html>

<head>
  <title>Associative Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Nutrition (per 100g).
  <br>Fat contents:<?php echo $nutrition["fat"];?>
  <br>Sugar contents:<?php echo $nutrition["sugar"];?>
  <br>Salt contents:<?php echo $nutrition["salt"];?></p>
</h2>

</body>

</html>