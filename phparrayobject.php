
// PHP Array Object.

<?php

for($i=0; $i<10; $i++){}

$arr = Array("HTML", "CSS", "PHP", "JavaScript");
$coding = new ArrayObject($arr);

$iterator = $coding->getIterator();
while($iterator->valid()){
	echo $iterator->current()."<br/>";
	$iterator->next();
}
	
?>

//Example of PHP Array object.

<?php

$arr = Array("HTML", "CSS", "PHP", "JavaScript");
$coding = new ArrayObject($arr);
$coding->append("JAVA");


$iterator = $coding->getIterator();
while($iterator->valid()){
	echo $iterator->current()."<br/>";
	$iterator->next();
}
	
?>