<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="../css/style.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
</head>
<body>
    <div class="container">
<div class="calculator">
    <h2>Simple Calculator in PHP</h2>
    <form action="" method="post">
        <input type="text" id="num1" name="num1" placeholder="Enter First Number"><!-- <?=$num1 ?> -->
        <input type="text" id="num2" name="num2" placeholder="Enter Second Number"><!-- <?=$num2?> -->
        <button type="submit" name="add">+</button>
        <button type="submit" name="subtract">-</button>
        <button type="submit" name="multiply">*</button>
        <button type="submit" name="division">/</button>
    </form>
<?php
require_once("Calculator.php");

$calculator = new Calculator();

if(isset($_POST['add'])){
    $num1 = $_POST['num1'];
    $num2=$_POST['num2'];
    $result=$calculator->add($num1,$num2);
    echo "<div id='result'>Result: $result</div>";
}
elseif(isset($_POST['subtract'])){
    $num1=$_POST['num1'];
    $num2=$_POST['num2'];
    $result=$calculator->subtract($num1,$num2);
    echo "<div id='result'>Result: $result</div>";
}
elseif(isset($_POST['multiply'])){
    $num1= $_POST['num1'];
    $num2= $_POST['num2'];
    $result=$calculator->multiply($num1,$num2);
    echo "<div id='result'>Result: $result</div>";
}
elseif(isset($_POST['division'])){
    
   
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    if($num2 !=0)
    {$result = $calculator->division($num1,$num2);
        echo "<div id='result'>Result:$result</div>";}
    

else{
    echo "<div id='result'>Zero Can't be a dividend</>";
}
}
?>
</div>
</div>
</body>
</html>