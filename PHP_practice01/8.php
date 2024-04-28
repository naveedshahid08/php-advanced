<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


		
	<article class="main-content col-xs-8">
	
	
	<?php  

	/*  Step 1 -Make a variable with some text as value

		Step 2 - Use crypt() function to encrypt it

		Step 3 - Assign the crypt result to a variable

		Step 4 - echo the variable

	*/
	$myName="Naveed";
	$encrypted_passowrd =crypt($myName,'$2a$09$anexamplestringforsalt$');
	echo $encrypted_passowrd;
	
	?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>