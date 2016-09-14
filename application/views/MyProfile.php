
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>City Night Layout - free website template</title>
<meta name="keywords" content="city night layout, free template, CSS, HTML" />
<meta name="description" content="City Night layout is a free website template provided by templatemo.com" />
<link href="<?php echo base_url()?>css/common.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url()?>css/loginstyle.css" rel="stylesheet" type="text/css" />
<script src="<?php echo base_url()?>js/jquery.js"></script>
<script src="<?php echo base_url()?>js/jquery.validate.min.js"></script>
<script src="<?php echo base_url()?>js/loginform-validation.js"></script>
<script src="<?php echo base_url()?>js/form-validation1.js"></script>
</head>
<body>
<div id="templatemo_wrapper1">
<div id="templatemo_wrapper2">
	<div id="templatemo_container">

		<?php
		
			
		$msg="";
		if ($this->session->userdata('sessionStartTime')+60< time())
		{
			// remove all session variables
			$this->session->unset_userdata('user');
			// destroy the session
			$this->session->sess_destroy();
			$msg="session ends";
			header("location:".base_url('index.php')."");
			//echo $msg;
			
		}
		else{
		
	if($this->session->userdata('user'))//$this->session->userdata('user')
	{
		echo $this->session->userdata['sessionStartTime']+60 ."final";
		
		echo time()."in";
		
		include_once './application/views/menuAnchors.php';
		include_once './application/views/banner.php';
		?>
     <div id="templatemo_content">    
     	
     	<?php

     	// var_dump($this->session->userdata('user'));
     	//var_dump($this->session->userdata('sessionStartTime'));
    
     	 echo $msg;

     	?>
     	
     
      </div>
    
<div id="templatemo_footer">
        <a href="#">Home</a> | <a href="#">Services</a> | <a href="#">Projects</a> | <a href="#">About Us</a> | <a href="#">Contact Us</a> | <a href="#">Register</a><br />
        Copyright © 2016 <a href="#"><strong>Dream Projects And Solutions</strong></a> | 
        <a href="http://www.iwebsitetemplate.com" target="_parent">Website</a> by <a href="http://www.templatemo.com" target="_parent">Dream Projects And Solutions</a>	</div>
    </div>
    <!-- Container close -->
    
</div> <!-- Wrapper 2 close -->
</div> <!-- Wrapper 1 close -->
<?php }

	}?>

</body>
