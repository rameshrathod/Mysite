<?php
class Services extends CI_Controller {

	Public function __construct() {
		parent::__construct();
		$this->load->library('session');

	}
	public function index()
	{
		//$this->load->driver('session');
		//$this->load->view('welcome_message');
		$this->load->model('MyModel');
		$welcomePageDisplayData['welcomePageDisplayData']=$this->MyModel->LoginAllContent();

			$this->load->view('ServicePage',$welcomePageDisplayData);
		
		
		
	}
}