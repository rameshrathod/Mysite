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
	 * 
	 */
	Public function __construct() {
		parent::__construct();
		$this->load->library('session');
		
	}
	public function index()
	{
		//$this->load->driver('session');
		$this->load->model('ServiceModel');
		$arrayOfAnchors['arrayOfAnchors']=$this->ServiceModel->loadAnchors();
		$this->load->view('welcome_message',$arrayOfAnchors);
		

	}
	
	public function registration()
	{
		$this->load->model('ServiceModel');
		$arrayOfAnchors['arrayOfAnchors']=$this->ServiceModel->loadAnchors();
		$this->load->view('Registration',$arrayOfAnchors);
	}
	public function logout(){
		$this->session->unset_userdata('mob');
		//$this->load->view('welcome_message',$arrayOfAnchors);
		header("location:".base_url('index.php')."");
	}
	
	public function userLogin()
	{
			$uname=$_REQUEST['uid'];
			$pass=MD5($_REQUEST['upass']);
		$this->load->model('MyModel');		
		$datas['datas']=$this->MyModel->Select("user_details",$uname,$pass);
			//var_dump($data);
		foreach ($datas as $data) {
			$mob= $data[0]->mobileNumber;
			
		}
		echo $mob;
		$this->session->set_userdata('mob',$mob);
		//echo $pjs[0]->player_name;
		//header("location:".base_url('index.php')."?user");
		$this->load->model('ServiceModel');
		$arrayOfAnchors['arrayOfAnchors']=$this->ServiceModel->loadAnchors();	
		$this->load->view('Login',$arrayOfAnchors);
			//$this->load->view('login',$data);
    		  	
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
 	 					'mobileNumber' =>$_GET['mobNo'],
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
	

	

