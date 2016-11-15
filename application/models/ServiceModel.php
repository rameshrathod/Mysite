<?php
Class ServiceModel extends CI_Model {

	Public function __construct() {
		parent::__construct();
		$this->load->database();
		///$this->load->driver('session');
		$this->load->library('session');
	}
	

	
	
}