<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

<section class="content">

	<aside class="col-xs-4">

		<?php Navigation(); ?>


	</aside>
	<!--SIDEBAR-->


	<article class="main-content col-xs-8">


		<?php



		/* Step 1: Make 2 variables called number1 and number2 and set 1 to value 10 and the other 20:

		  Step 2: Add the two variables and display the sum with echo:


		  Step3: Make 2 Arrays with the same values, one regular and the other associative

		 
			 */

			$number_1 = 10;
			$number_2 = 20;
			$sum=$number_1 + $number_2;
			echo "The sum of two numbers" .$number_1." and ". $number_2. " is = "."  $sum";
			$numbers = array(10,20);
			echo '<pre>'; print_r($numbers); echo '</pre>';
			$number = array("number1"=>10,"number2"=>20);
			echo '<pre>'; print_r($number); echo '</pre>';


		?>



	</article>
	<!--MAIN CONTENT-->

	<?php include "includes/footer.php"; ?>