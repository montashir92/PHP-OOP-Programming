<?php

	class Post{
		
		private $title;
		private $content;
		
		public function filter(){
			$this->title = $filtered_title;
			$this->content = $filtered_content;
		}
		
		public function getContent(){
			return $this->content;
		}
		
	}

?>