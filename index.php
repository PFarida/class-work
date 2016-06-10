<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
 // this a class. $name and getHeight() are class members
 class Person{
 	
 	private $name = "Code Academy"; 
 	public function codeAcademy(){
 		return $this->name;
 	}
 	
 }
 $telebe=new Person();
 echo $telebe->codeAcademy;
 // echo $telebe->codeAcademy();

 ?>

</body>
</html>