
<?php

Class MyModel extends CI_Model {

	Public function __construct() {
		parent::__construct();
		$this->load->database();
		///$this->load->driver('session');
		$this->load->library('session');
	}
	
	public function Insert($data){
		
		if($this->db->insert("user_details", $data)){
			return  true;
		}
		
	}
	public function Select($tableName,$uname,$pass){
	
		
		$this->db->where('username',$uname);
		 $this->db->where('password',$pass);
		$query = $this->db->get($tableName);
		$data= $query->result();
		if(empty($data))
		{
			header("location:".base_url('index.php/')."welcome?sts=Invalid username or password !");
		}	
		
		else{
			return $data;
		}
		
	
	}
	
	public function userCheck($tableName){
		$query = $this->db->get($tableName);
		$data= $query->result();
		return $data;
	}
	


	

	
}
?>