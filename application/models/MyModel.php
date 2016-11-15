
<?php
class MyModel extends CI_Model {
	Public function __construct() {
		parent::__construct ();
		$this->load->database ();
		// /$this->load->driver('session');
		$this->load->library ( 'session' );
	}
	public function Insert($data) {
		if ($this->db->insert ( "user_details", $data )) {
			return true;
		}
	}
	public function Select($tableName, $uname, $pass) {
		$this->db->where ( 'username', $uname );
		$this->db->where ( 'password', $pass );
		$query = $this->db->get ( $tableName );
		$data = $query->result ();
		if (empty ( $data )) {
			header ( "location:" . base_url ( 'index.php/' ) . "welcome?sts=Invalid username or password !" );
		} 

		else {
			
			if ($this->session->userdata ( "sessionStartTime" ) == null) {
				$this->session->set_userdata ( 'sessionStartTime', time () );
			}
			
			return $data;
		}
	}
	public function userCheck($tableName) {
		$query = $this->db->get ( $tableName );
		$data = $query->result ();
		return $data;
	}
	public function fetchServiceAnchor($tableName) {
		$query = $this->db->get ( $tableName );
		$Anchors = $query->result ();
		return $Anchors;
	}
	public function welcomeContent($tableName) {
		$query = $this->db->get ( $tableName );
		$welcomeNoteData = $query->result ();
		return $welcomeNoteData;
	}
	public function aboutUsDetailsfetch($tableName) {
		$query = $this->db->get ( $tableName );
		$aboutUsData = $query->result ();
		return $aboutUsData;
	}
	public function latestNewsDetailsfetch($tableName) {
		$query = $this->db->get ( $tableName );
		$latestNewsData = $query->result ();
		return $latestNewsData;
	}
	public function whatWeDoDetailsfetch($tableName) {
		$query = $this->db->get ( $tableName );
		$whatWeDoData = $query->result ();
		return $whatWeDoData;
	}
	
	
	public function bannerDataFetch($tableName) {
		$query = $this->db->get ( $tableName );
		$bannerData = $query->result ();
		return $bannerData;
	}
	public function LoginAllContent() {
		$s_anchors ['s_anchors'] = $this->MyModel->fetchServiceAnchor ( 'serviceanchors' );
		$prod_anchors ['prod_anchors'] = $this->MyModel->fetchServiceAnchor ( 'productanchors' );
		$myprof_anchors ['myprof_anchors'] = $this->MyModel->fetchServiceAnchor ( 'myprofileanchors' );
		
		$welcomeNote ['welcomeNote'] = $this->MyModel->welcomeContent ( 'welcomehomenote' );		
		$aboutUscontent ['aboutUscontent'] = $this->MyModel->aboutUsDetailsfetch ( "whoweare" );
		$latestNewsContent ['latestNewsContent'] = $this->MyModel->latestNewsDetailsfetch ( "latestnews" );
		$whatWeDoContent ['whatWeDoContent'] = $this->MyModel->whatWeDoDetailsfetch ( "whatwedo" );
		$bannerContent ['bannerContent'] = $this->MyModel->bannerDataFetch ( "mainbanner" );
		
		$arrayOfAllWelcomePageData = Array (
				$s_anchors,
				$prod_anchors,
				$myprof_anchors,
				$welcomeNote,
				$aboutUscontent,
				$latestNewsContent,
				$whatWeDoContent,
				$bannerContent
		);
		
		return $arrayOfAllWelcomePageData;
	}
}
?>