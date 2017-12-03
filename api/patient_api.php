<?php
	header('Access-Control-Allow-Origin: *');

	require "../dao/PatientDao.php";

	class PatientAPI{
		public function findAllPatient(){
			$dao = new PatientDao();
			$dao->getAllPatients();
		}
	}

	$opc = isset($_GET["opt"])? $_GET["opt"] : "";

	$api = new PatientAPI();

	switch ($opc) {
		case 'all':
			$api->findAllPatient();
			break;
		
		default:
			# code...
			break;
	}
?>