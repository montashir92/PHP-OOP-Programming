//Standard PHP LiBrary.

<?php

spl_autoload_register(function($class_name){
    include "classes/".$class_name. ".php";
});

$arr = Array("HTML", "CSS", "PHP", "JavaScript", "JAVA");
$ai = new ArrayIterator($arr);
echo $ai->current();
	
?>

//Exmple of Standard PHP Library.

<?php

spl_autoload_register(function($class_name){
    include "classes/".$class_name. ".php";
});

$arr = Array("HTML", "CSS", "PHP", "JavaScript", "JAVA");
$ai = new ArrayIterator($arr);
echo $ai->current(). "<br/>";
$ai->next();
echo $ai->current();
?
    
//Example of Standard PHP Library.
    
    <?php

spl_autoload_register(function($class_name){
    include "classes/".$class_name. ".php";
});

$arr = Array("HTML", "CSS", "PHP", "JavaScript", "JAVA");
$ai = new ArrayIterator($arr);
foreach($ai as $value){
	echo $value. "<br/>";
}
?>

//Example of Stabdard PHP Library.

<?php

spl_autoload_register(function($class_name){
    include "classes/".$class_name. ".php";
});

$arr = Array("HTML", "CSS", "PHP", "JavaScript", "JAVA");
$ai = new ArrayIterator($arr);
$limit = new LimitIterator($ai,0,2);
foreach($limit as $value){
	echo $value. "<br/>";
}
?>

//Example of Stabdard PHP Library.

<?php

spl_autoload_register(function($class_name){
    include "classes/".$class_name. ".php";
});

$arr = Array("HTML", "CSS", "PHP", "JavaScript", "JAVA");
$ai = new ArrayIterator($arr);
$ci = new CachingIterator($ai);

foreach($ci as $value){
	echo $value;
	if($ci->hasNext()){
		echo ", ";
	}
}
?>