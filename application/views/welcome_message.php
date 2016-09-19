
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>dream Projects</title>
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
    
					<?php include_once './application/views/menuAnchors.php';
					
						  include_once './application/views/banner.php';
					
					?>
     <div id="templatemo_content">
 
   		<!-- left column -->
   	
    	<div id="templatemo_leftcolumn">
    		<?php if(!$this->session->userdata('user'))
        		{
        			include_once './application/views/LoginForm.php';
        		}
        		include_once './application/views/LatestNews.php';
        		?>            
        </div>
        <!-- End of left column -->

        <!-- Right column -->
        <div id="templatemo_rightcolumn">
        	
        	<?php include_once './application/views/welcomeNotePage.php';//welcome Note page is included here
        	
        		?>
					            
            <div class="spacetobottom"></div>
            
            <div class="twocolumn">
	            <?php include_once './application/views/WhoIAm.php';//Who i am Note page is included here
        		include_once './application/views/WhatWeDo.php';
        		?>
                
			</div>
            
           	<div class="spacetobottom"></div> 
            
            <div id="gallery">
	            <h1>Quality Services</h1>
                <div class="gallery_column">
                	<img src="<?php base_url()?>images/image(160x60).jpg" alt="image 1" />
                	<p>Mauris blandit vehicula neque. Proin consectetuer. Donec venenatis.  <a href="#">more...</a></p>
                </div>
                
                <div class="spacetoright"></div>
                
                <div class="gallery_column">
	                <img src="<?php base_url()?>images/image(160x60).jpg" alt="image 2" />
                	<p>Duis vitae velit sed dui males uada digni ssim. Donec mollis aliquet ligula. <a href="#">more...</a></p>
                </div>
                
                 <div class="spacetoright"></div>
               
                <div class="gallery_column">
	                <img src="<?php base_url()?>images/image(160x60).jpg" alt="image 3" />
                	<p>Cras urna metus, feugiat non, consectetuer quis, pretium quis, nunc. <a href="#">more...</a></p>
                </div>
                
                <div class="more_button"><a href="#">Read All</a></div>
            </div>
            
            <div class="spacetobottom"></div>

        </div>
        <!-- End of right column -->
     
	
    <!-- End of content -->
      
      </div>
    
		<div id="templatemo_footer">
	        <a href="#">Home</a> | <a href="#">Services</a> | <a href="#">Projects</a> | <a href="#">About Us</a> | <a href="#">Contact Us</a> | <a href="#">Register</a><br />
	        Copyright © 2016 <a href="#"><strong>Dream Projects And Solutions</strong></a> | 
	        <a href="http://www.iwebsitetemplate.com" target="_parent">Website</a> by <a href="http://www.templatemo.com" target="_parent">Dream Projects And Solutions</a>
        </div>
   
    </div><!-- Container close -->
    
</div> <!-- Wrapper 2 close -->
</div> <!-- Wrapper 1 close -->
</body>
</html>