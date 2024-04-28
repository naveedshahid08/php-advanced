<?php

/* 
  Write you php code here

   */
  $customerName="Mr.Naveed";
  $greetings="Thank You";

?>
<!DOCTYPE html>
<html>

<head>
  <title>String Operator</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2><?= $customerName."'s Order"?></h2>
  <h2><?= $greetings." " .$customerName ?></h2>
</body>

</html>