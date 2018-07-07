<?php
include 'includes/simpleCalculation.php';
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$cal = $_POST['cal'];

$simplecalculation = new SimpleCalculation($num1, $num2, $cal);
echo $simplecalculation->simpleCalculation();
