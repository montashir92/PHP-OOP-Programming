
// Magic Methods clone.

<?php
class Language{
	private $category;
	private $framework;
	
	
	function setCat($a){
		$this->category = $a;
	}
	
	function getCat(){
		return $this->category;
	}
	
	function setFramework($b){
		$this->framework = $b;
	}
	
	function getFramework(){
		return $this->framework;
	}
	public function __clone(){
		$lang = new Language();
		$lang->setFramework("$this->framework");
		return $lang;
	}
}

?>