<?php

class Shape {

	public $radius;
	public $shapeType;

	public function __construct($radius, $shapeType) {

		$this->radius = $radius;
		$this->shapeType = $shapeType;

	}

	public function areaCalculation() {

		switch ($this->shapeType) {
		case 'circle':
			$area = "Area of Circle:" . "" . 3.1416 * $this->radius * $this->radius;
			break;

		case "square":
			$area = "Area of Square:" . "" . $this->radius * $this->radius;
			break;

		case "triangle":
			$area = "Area of Triangle:" . "" . 0.43301270189 * $this->radius * $this->radius;
			break;

		default:
			$aeae = "Error";
			break;
		}

		return $area;

	}

}
