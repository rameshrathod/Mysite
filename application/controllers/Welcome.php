<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Welcome extends CI_Controller {
	Public function __construct() {
		parent::__construct ();
		$this->load->library ( 'session' );
	}
	public function index() {
		// $this->load->driver('session');
		$this->load->model ( 'MyModel' );
		$welcomePageDisplayData ['welcomePageDisplayData'] = $this->MyModel->LoginAllContent ();
		
		$this->load->view ( 'welcome_message', $welcomePageDisplayData );
	}
	public function registration() 	// for registration
	{
		$this->load->model ( 'MyModel' );
		$welcomePageDisplayData ['welcomePageDisplayData'] = $this->MyModel->LoginAllContent ();
		
		$this->load->view ( 'Registration', $welcomePageDisplayData );
	}
	public function logout() { // for logout
		$this->session->unset_userdata ( 'user' );
		$this->session->sess_destroy ();
		header ( "location:" . base_url ( 'index.php' ) . "" );
	}
	public function userLogin() 	// for login
	{
		$uname = $_REQUEST ['uid'];
		$pass = MD5 ( $_REQUEST ['upass'] );
		$this->load->model ( 'MyModel' );
		$datas ['datas'] = $this->MyModel->Select ( "user_details", $uname, $pass );
		
		foreach ( $datas as $data ) {
			$user = $data [0]->username;
		}
		
		$this->session->set_userdata ( 'user', $user );
		$this->load->model ( 'MyModel' );
		$welcomePageDisplayData ['welcomePageDisplayData'] = $this->MyModel->LoginAllContent ();
		
		if ($this->session->userdata ( "sessionStartTime" ) != null) 		// checking for session
		{
			
			if ($this->session->userdata ( "sessionStartTime" ) + 10 < time ()) { // session time
				
				header ( "location:" . base_url ( 'index.php/welcome/logout' ) . "" ); // if session time out then redirect to logout
			} 

			else {
				$this->load->view ( 'welcome_message', $welcomePageDisplayData );
			}
		} else {
			$this->load->view ( 'welcome_message', $welcomePageDisplayData );
		}
	}
	public function insertModel() {
		if (strtoupper ( $_GET ['cap'] ) == strtoupper ( $_REQUEST ['val_cap'] )) {
			$flag = 0;
			// Write your code, that will be executed once successful captcha entry...
			$this->load->model ( 'MyModel' );
			
			$dataForUserCheck = $this->MyModel->userCheck ( 'user_details' );
			
			foreach ( $dataForUserCheck as $r ) {
				
				if ($r->username == $_GET ['uname']) {
					$flag = $flag + 1;
				}
			}
			if ($flag != 1) {
				$data = array (
						'username' => $_GET ['uname'],
						'password' => MD5 ( $_GET ['pass'] ),
						'mobileNumber' => $_GET ['mobNo'],
						'firstname' => $_GET ['fname'],
						'lastname' => $_GET ['lname'] 
				);
				
				$this->MyModel->Insert ( $data );
				header ( "location:" . base_url ( 'index.php/' ) . "welcome/register?registerSuccess" );
			} else {
				header ( "location:" . base_url ( 'index.php/' ) . "welcome/register?userExist=Username Already Exist !" );
			}
		} else {
			header ( "location:" . base_url ( 'index.php/' ) . "welcome/register?sts=Invalid Capcha" );
		}
	}
	public function aboutus() {
		$this->load->model ( 'MyModel' );
		$welcomePageDisplayData ['welcomePageDisplayData'] = $this->MyModel->LoginAllContent ();
		
		$this->load->view ( 'AboutUs', $welcomePageDisplayData );
	}
	public function contactus() {
		$this->load->model ( 'MyModel' );
		$welcomePageDisplayData ['welcomePageDisplayData'] = $this->MyModel->LoginAllContent ();
		$this->load->view ( 'ContactUs', $welcomePageDisplayData );
	}
}
	

	

