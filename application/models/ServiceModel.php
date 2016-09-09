<?php
Class ServiceModel extends CI_Model {

	Public function __construct() {
		parent::__construct();
		$this->load->database();
		///$this->load->driver('session');
		$this->load->library('session');
	}
	
	public  function fetchServiceAnchor($tableName){
		
		$query = $this->db->get($tableName);
		$data = $query->result();
		return $data;
	
	}
	
	public function loadAnchors(){
	
		$s_anchors['s_anchors']=$this->ServiceModel->fetchServiceAnchor('serviceanchors');
		$prod_anchors['prod_anchors']=$this->ServiceModel->fetchServiceAnchor('productanchors');
		$myprof_anchors['myprof_anchors']=$this->ServiceModel->fetchServiceAnchor('myprofileanchors');
		$arrayOfAnchors1=Array($s_anchors,$prod_anchors,$myprof_anchors);
	
		return $arrayOfAnchors1;
	}
	
	
}