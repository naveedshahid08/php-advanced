<?php

/* 
  Write you php code here

   */
$nutrition=array("fiber"=>"3%","fat"=>"20%");
?>
<!DOCTYPE html>
<html>

<head>
  <title>Updating Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Nutrition (per 100g):
  Fiber Contents: <?php echo $nutrition["fiber"]; ?>
  Fat Contents: <?php echo $nutrition["fat"]; ?>
  </h2>

</body>

</html>