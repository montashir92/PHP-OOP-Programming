<?php

class Posts implements Iterator{
	
	public $var;
	private $posts = Array();
	function __construct($posts){
		if(is_array($posts)){
			$this->posts = $posts;
		}
		
	}
	
	public function rewind(){
		reset($this->posts);
	}
	
	public function current(){
		return current($this->posts);
	}
	
	public function key(){
		return key($this->var);
	}
	
	public function next(){
		return next($this->var);
	}
	
	public function valid(){
		return ($this->current()!== false)
	}
}

?>