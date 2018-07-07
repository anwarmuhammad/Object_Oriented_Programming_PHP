<?php
include 'includes/shape.php';
$radius = $_POST['radius'];
$shapeType = $_POST['shapeType'];

$shape = new Shape($radius, $shapeType);
print $shape->areaCalculation();
