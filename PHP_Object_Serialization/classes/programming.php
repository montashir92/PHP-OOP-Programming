
//PHP Object Serializations.
<?php
class Programming{
	public $html;
	public $css;
	private $php;
	protected $java;
	
	function __construct(){
		$this->html = "I Know HTML.";
		$this->css = "I love CSS.";
		$this->php = "I am PHP Coder.";
		$this->java = "I am JAVA Programmer.";
	}
}
?>
//Example of PHP Object Unserialize.

<?php
class Programming{
	public $html;
	public $css;
	private $php;
	protected $java;
	
	function __construct(){
		$this->html = "I Know HTML.";
		$this->css = "I love CSS.";
		$this->php = "I am PHP Coder.";
		$this->java = "I am JAVA Programmer.";
	}
}

?>