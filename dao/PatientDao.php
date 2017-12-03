<?php
	require "../model/patient.php";
	require "../config/database.php";

	class PatientDao{
		public function getAllPatients(){
			$query = "SELECT * FROM patients";

			try{
				$db = new DataAccess();
				$db = $db->conectar();
				$exe = $db->query($query);
				$patients = $exe->fetchAll(PDO::FETCH_OBJ);
				$db = null;
				echo json_encode($patients);
			}catch(PDOException $e){
				echo json_encode(array(
					"error"=>$e->getMessage()
				));
			}
		}
	}
?>