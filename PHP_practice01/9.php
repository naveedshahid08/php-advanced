<?php
$exp = time()+(60*60*24*7);
setcookie('TheCookieName','This is the cookie value',$exp);

/* $cookie_test = "test";
if(isset($_GET['param1'])){
 global $cookie_value1;
 global $cookie_value1 = $_GET['param1'];
  
 }; */

/* setcookie($cookie_test, $cookie_value1, time() + (86400 * 7), "/"); */

?>
<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>






<section class="content">

  <aside class="col-xs-4">

    <?php Navigation(); ?>


  </aside>
  <!--SIDEBAR-->
  

  <article class="main-content col-xs-8">
  <a href="9.php?param1=naveed">Click Here</a>

<?php

		/*  Create a link saying Click Here, and set 
	the link href to pass some parameters and use the GET super global to see it

		Step 2 - Set a cookie that expires in one week

		Step 3 - Start a session and set it to value, any value you want.
	*/
 
  if(isset($_GET['param1'])){
    echo $cookie_value =($_GET['param1']);
  }
  
	?>
 
  <?php
// Set session variables

?>





  </article>
  <!--MAIN CONTENT-->
  <?php include "includes/footer.php"; ?>