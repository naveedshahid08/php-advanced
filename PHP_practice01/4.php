<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
		
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php  

/*  Step1: Define a function and make it return a calculation of 2 numbers

	Step 2: Make a function that passes parameters and call it using parameter values


 */
function sum($a,$b)
{
	return $c=$a+$b;
}
$addition =sum(3,4);

echo $addition;

function Hello($name)
{
	echo "Hello, $name";
}
	$name="Naveed";

	echo Hello($name);
?>





</article><!--MAIN CONTENT-->


<?php include "includes/footer.php"; ?>