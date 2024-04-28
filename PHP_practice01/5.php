<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
<section class="content">

  <aside class="col-xs-4">
    <?php Navigation();?>


  </aside>
  <!--SIDEBAR-->


  <article class="main-content col-xs-8">


    <?php 


/* Step1: Use a pre-built math function here and echo it


	Step 2:  Use a pre-built string function here and echo it


	Step 3:  Use a pre-built Array function here and echo it

 */

      echo "<p>".(rand(10,100))."</p>";
      $str = "Hello World!";
      echo count_chars($str,3);
      $number = array("number1"=>10,"number2"=>20);
      
      echo '<pre>'; print_r(array_keys($number)); echo '</pre>';
?>





  </article>
  <!--MAIN CONTENT-->
  <?php include "includes/footer.php"; ?>