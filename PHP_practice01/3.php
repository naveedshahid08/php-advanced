<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */
	$number=10;
	if($number<=3)
	{
		echo "I don't love PHP";
	}
	elseif($number<=6){

		echo "I don't love PHP";
	}
	else{
		echo "<h3>I love PHP<h3/>";
	}

	for($i=0;$i<=10;$i++)
	{
		echo '<pre>'; print_r($i); echo '</pre>';
	}
	$marks =70;
	switch($marks){
		case ($marks >50):
			echo "E";
			break;
		case ($marks >=60):
			echo "D";
			break;
		case ($marks >=70):
			echo "C";
			break;
		case ($marks >=80):
			echo "B";
			break;
		case ($marks >=90):
			echo "A";
			break;
		
	}
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>