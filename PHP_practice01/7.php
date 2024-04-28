<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
    

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">
	
	
	
	<?php  

	/*  Step 1 - Create a database in PHPmyadmin

		Step 2 - Create a table like the one from the lecture

		Step 3 - Insert some Data

		Step 4 - Connect to Database and read data

*/
$host ="db";
$username="root";
$password="lionPass";
$databasename="testing";


$conn= new mysqli($host,$username,$password,$databasename);
if($conn->connect_error)
{
	die("Connection Failed:".$conn->connect_error);
}

/* $mysqli=mysqli_connect($host,$username,$password,$databasename);

$mysqli = new mysqli("db","root","lionPass","testing");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
} */

?>


<?php $query = "SELECT * FROM reports";
$result = mysqli_query($conn, $query);
if (!$result) {
  die('Reading db records failed');
}
?>
<?php

while ($row = mysqli_fetch_assoc($result)) {
?>
<pre>
    <?php
    print_r($row);
    ?>
    </pre>
<?php
}
?>
	





</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>
