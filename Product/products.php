<?php 

class Product{
	public $title;
	public $price;

 public function setTitle($title=""){
    
     
		
		 $this->title=$title;
			
		 


    
}
	public function getTitle(){

        GLOBAL $title;

		if($title){
		
				return $this->title;

			
		} else {
			

			return "Title is required";
		}

	
}
  

public function setPrice($price){
	
	$this->price=$price;
}

public function getPrice(){
	
	return $this->price;
}

}

$title=new Product();
$price=new Product();
$title->setTitle("Product Title");
echo $title->getTitle();
echo ":";
$price->setPrice('$30');
echo $price->getPrice();
?>