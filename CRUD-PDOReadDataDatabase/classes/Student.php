<?php

include "DB.php";

	class Student{
		private $table = 'tbl_student';
		public function readAll(){
			$sql = "SELECT * FROM $this->table";
			$stmt = DB::prepare($sql);
			$stmt->execute();
			return $stmt->fetchAll();
		}
	}

?>