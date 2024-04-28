<?php
/* Create a simple switch statement to get 20% off chocolates on Monday and 20% off mints on Tuesday, and in all other cases, it should show “Buy three packs, get one free. */

$dayofWeek="Friday";
$discount="";
?>
<!DOCTYPE html>
<html>

<head>
  <title>switch Statement</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <?php
  /* Write your code here */
  switch($dayofWeek){
    case "Tuesday":
      echo "<p>20% Off on Tuesday</p>";
      break;
    case "Monday":
      echo "<p>20% Off on Monday</p>";
      break;
    default:
    echo "<p>Buy 3 Packs & Get 1 Free</p>";
    break;
  }
  
  ?>
</body>

</html>