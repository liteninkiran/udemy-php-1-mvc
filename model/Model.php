<?php

	include 'Database.php';

    class Model
    {
        public function getStudentData()
        {
        	$sql = "SELECT * FROM tbl_student";
        	$stmt = Database::prepare($sql);
        	$stmt->execute();
        	return $stmt->fetchAll();
        }
    }

?>