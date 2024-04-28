<?php
$text = 'Home sweet home';
?>
<?php include 'includes/header.php'; ?>

<p>

  <?php 
  echo "<h3>".strtoupper($text)."</h3>";
  echo "<h3>".strtolower($text)."</h3>";
  echo "<h3>".strlen($text)."</h3>";
  ?>
</p>

<?php include 'includes/footer.php'; ?>