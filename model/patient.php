<?php
class Patient{	
	private $id;
	private $created_at;
   private $updated_at;
   private $deleted_at;
   private $dateInit;
   private $nomApe;
   private $age;
   private $sex;
   private $dateNac;
   private $address;
   private $ocupation;
   private $telCel;
   private $alergies;
   private $operations;
   private $diabettes;
   private $hipertension;
   private $others;
   private $treatMedics;
	private $state;

	public function getId(){
		return $this->id;
	}
	
	public function getCreated_at(){
		return $this->created_at;
	}

	public function getUpdated_at(){
		return $this->updated_at;
	}

	public function getDeleted_at(){
		return $this->deleted_at;
	}

	public function getDateInit(){
		return $this->dateInit;
	}

	public function getNomApe(){
		return $this->nomApe;
	}

	public function getAge(){
		return $this->age;
	}

	public function getSex(){
		return $this->sex;
	}

	public function getDateNac(){
		return $this->dateNac;
	}

	public function getAddress(){
		return $this->address;
	}

	public function getOcupation(){
		return $this->ocupation;
	}

	public function getTelCel(){
		return $this->telCel;
	}

	public function getAlergies(){
		return $this->alergies;
	}

	public function getOperations(){
		return $this->operations;
	}

	public function getDiabettes(){
		return $this->diabettes;
	}

	public function getHipertension(){
		return $this->hipertension;
	}

	public function getOthers(){
		return $this->others;
	}

	public function getTreatMedics(){
		return $this->treatMedics;
	}

	public function getState(){
		return $this->state;
	}

	public function setCreated_at($created_at){
		$this->created_at = $created_at;
	}

	public function setUpdated_at($updated_at){
		$this->updated_at = $updated_at;
	}

	public function setDeleted_at($deleted_at){
		$this->deleted_at = $deleted_at;
	}

	public function setDateInit($dateInit){
		$this->dateInit = $dateInit;
	}

	public function setNomApe($nomApe){
		$this->nomApe = $nomApe;
	}

	public function setAge($age){
		$this->age = $age;
	}

	public function setSex($sex){
		$this->sex = $sex;
	}

	public function setDateNac($dateNac){
		$this->dateNac = $dateNac;
	}

	public function setAddress($address){
		$this->address = $address;
	}

	public function setOcupation($ocupation){
		$this->ocupation = $ocupation;
	}

	public function setTelCel($telCel){
		$this->telCel = $telCel;
	}

	public function setAlergies($alergies){
		$this->alergies = $alergies;
	}

	public function setOperations($operations){
		$this->operations = $operations;
	}

	public function setDiabettes($diabettes){
		$this->diabettes = $diabettes;
	}

	public function setHipertension($hipertension){
		$this->hipertension = $hipertension;
	}

	public function setOthers($others){
		$this->others = $others;
	}

	public function setTreatMedics($treatMedics){
		$this->treatMedics = $treatMedics;
	}

	public function setState($state){
		$this->state = $state;
	}

}

?>