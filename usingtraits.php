
//Using Traits In PHP.

<?php

trait Java{
	public function javaCoder(){
		return "I love JAVA <br/>";
	}
}

trait Php{
	public function phpCoder(){
		return "I love PHP <br/>";
	}
}

class CoderOne{
	use Java;
}

class CoderTwo{
	use Java;
}

$c1 = new CoderOne;
echo $c1->javaCoder();
$c2 = new CoderTwo;
echo $c2->javaCoder();

?>

//Example of Traits in php.

<?php

trait Java{
	public function javaCoder(){
		return "I love JAVA <br/>";
	}
}

trait Php{
	public function phpCoder(){
		return "I love PHP <br/>";
	}
}

class CoderOne{
	use Java, php;
}


$c1 = new CoderOne;
echo $c1->javaCoder();
echo $c1->phpCoder();

?>

//Example of Traits in php.

<?php


trait Java{
	public function javaCoder(){
		return "I love JAVA <br/>";
	}
}

trait Php{
	public function phpCoder(){
		return "I love PHP <br/>";
	}
}
trait JavaPhp{
	use Java, php;
}
class CoderOne{
	use JavaPhp;
}


$c1 = new CoderOne;
echo $c1->javaCoder();
echo $c1->phpCoder();

?>

//Example of Traits in php.

<?php


trait Java{
	public function javaCoder(){
		return "I love JAVA <br/>";
	}
}


class CoderOne{
	use Java;
	public function javaCoder(){
		return "I love JAVA and PHP <br/>";
	}
}


$c1 = new CoderOne;
echo $c1->javaCoder();

?>