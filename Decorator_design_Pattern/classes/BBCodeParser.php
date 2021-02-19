<?php

	class BBCodeParser{
		
		private $post;
		
		function __construct($object){
			$this->post = $object;
		}
		
		public function getContent(){
			
			$post->filter();
			$content = $this->parseBBCode($post->getContent());
			return $content;
		}
		
		private function parseBBCode($content){
			//Your coding process will be go here...
		}
	}

?>