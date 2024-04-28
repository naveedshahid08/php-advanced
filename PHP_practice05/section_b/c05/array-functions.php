<?php
// Write PHP code here
/* Write PHP Code to create -array of greetings (i.e. “Hi”, “Howdy”, “Hello”, “Hola”, “Cia”, “Moi”, “Namaste”, “Welcome”) -then display random greeting-find array of best sellers of items (i.e. “notebook”, “pencil”, “ink”) -count items and display top items-create an array holding customer details (e.g firstname, lastname, email). -and if you have customer first name add it to greeting
 */
?>
<?php include 'includes/header.php'; ?>

<h1>Best Sellers</h1>
<?php
$greeting=array("Hi", "Howdy", "Hello", "Hola", "Cia", "Moi", "Namaste", "Welcome","Salam"); 
$randomGreetings = array_rand($greeting);
echo "<h3 style='text-align:center;background:green;'>".$greeting[$randomGreetings]." ".($customerDetails["firstname"])."</h3>";


$bestSeller=array("Notebook","Pencil","Ink");
echo "<h3 style='text-align:center;background:green;'>".count($bestSeller)."</h3>";


$customerDetails = array("firstname"=>"Smith","lastname"=>"Jhon","email"=>"smith@live.com");
$randomCustomer = array_rand($customerDetails);



?>


<?php include 'includes/footer.php'; ?>