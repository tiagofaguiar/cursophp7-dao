<?php 

class Usuario{
	private $id_user;
	private $deslogin;
	private $dessenha;
	

	public function getId_user(){
		return $this->id_user;

	}

	public function setId_user($value){
		$this->id_user = $values;
	}

	public function getDeslogin(){
		return $this->deslogin;

	}

	public function setDeslogin($value){
		$this->deslogin = $values;
	}

	public function getDessenha(){
		return $this->dessenha;

	}

	public function setDessenha($value){
		$this->dessenha = $values;
	}

	

    public function loadById($id){
    	$sql = new Sql();

    	$results= $sql->select("SELECT * FROM db_usuarios WHERE id_user = :ID", array(
           ":ID"=>$id
    		));
    
 
   if(count($results) > 0){

   $row = $results[0];

   $this->setId_user($row['id_user']);
   $this->setDeslogin($row['id_user']);
   $this->setDessenha($row['id_user']);
 

   }

}


public function __ToString(){

	return json_encode(array(
       "id_user"=>$this->getId_user(),
       "deslogin"=>$this->getDeslogin(),
       "dessenha"=>$this->getDessenha()

		));
}}