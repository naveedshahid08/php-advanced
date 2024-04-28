<?php
/* Write a PHP Code to include header.php and footer.php and check the candy stock. Let us assume you have 25 stock of candy, so check if you have “Good availability”, you have “low stock”, or you are running “Out of stock */

?>


<h2>Chocolate</h2>
<?php
/* Write your code here */
include 'includes/header.php';
include 'includes/footer.php';
$stockInHand=25;
if($stockInHand <0)
{
    echo "<h1>Out of Stock";
}
else if($stockInHand<25)
{
    echo "<h1>Low Stock</h1>";
}
else 
{
    echo "<h1 style='color:white; text-align:center;'>". "Good Avaialbitliy". "</h1>";
}

?>