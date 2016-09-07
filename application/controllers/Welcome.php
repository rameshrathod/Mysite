<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
		

	}
	
	public function registration()
	{
		
		$this->load->driver('session');
		$this->load->view('Registration');
	}
	public function login(){
		$this->load->view('Login');
	}
	public function logout(){
		$this->load->view('welcome_message');
	}
	
	public function userLogin()
	{
			$uname=$_REQUEST['uid'];
			$pass=MD5($_REQUEST['upass']);
		$this->load->model('MyModel');
		$r=$this->MyModel->Select("user_details",$uname,$pass);
			$this->load->view('welcome_message');
    		
    	
 	 }
 	 
 	 public function insertModel(){
 	 
 	 	if(strtoupper($_GET['cap'])==strtoupper($_REQUEST['val_cap']))
 	 	{
 	 		$flag=0;
 	 		// Write your code, that will be executed once successful captcha entry...
 	 		$this->load->model('MyModel');
 	 			
 	 		$dataForUserCheck=$this->MyModel->userCheck('user_details');
 	 
 	 		foreach($dataForUserCheck as $r) {
 	 
 	 			if($r->username==$_GET['uname']){
 	 				$flag=$flag+1;
 	 			}
 	 		}
 	 		if($flag!=1)
 	 		{
 	 			$data = array(
 	 					'username' => $_GET['uname'],
 	 					'password' =>MD5($_GET['pass']),
 	 					'firstname'=>$_GET['fname'],
 	 					'lastname'=>$_GET['lname']
 	 			);
 	 			$this->MyModel->Insert($data);
 	 			header("location:".base_url('index.php/')."welcome/register?registerSuccess");
 	 
 	 				
 	 		}
 	 		else{
 	 			header("location:".base_url('index.php/')."welcome/register?userExist=Username Already Exist !");
 	 		}
 	 	}
 	 	else{
 	 		header("location:".base_url('index.php/')."welcome/register?sts=Invalid Capcha");
 	 	}
 	 
 	 
 	 }
 	 	

}
	

	

