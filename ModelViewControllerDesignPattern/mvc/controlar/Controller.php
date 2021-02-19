<?php
include 'model/Model.php';

	class Controller{
		
		public $model;
		
		public function __construct(){
			$this->model = new Model();
	}
	
	public function Home(){
		$user = $this->model->getStudentData();
		include 'view/home.php';
	}
	
	}

?>