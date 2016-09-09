
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
    
					<?php include_once './application/views/menuAnchors.php';?>
        
        
            <div id="templatemo_header_banner">
    	<div id="templatemo_header">
        	<div id="templatemo_sitetitle">
            	Dream<br/><br/><span> Projects</span>&<span>Solutions</span></div>
      <div id="templatemo_tagline"><i>Building and Delivering project knowledge</i></div>
        </div>
        <div id="templatemo_banner">
        	
        	<div id="templatemo_bannertext">
        		<div id='back'>
            	Let's build<br /><span>SUCCESSFUL PROJECTS</span><br/>
            	together
            	</div>
            </div>
        </div>
    </div>
     <div id="templatemo_content">
 
   		<!-- left column -->
   	
    	<div id="templatemo_leftcolumn">
    		<?php if(!$this->session->userdata('mob'))
        		{?>
        			<div class="login_form">
             				<h1>Client Login</h1>
        						<?php if(isset($_REQUEST['sts'])){
        	
        	
        							echo "<font color='red'><label id='msg'>Invalid username or password !</label></font>";//massage for invalid  user
        	
        						}?>
          						<form method="get" action="<?php echo base_url('index.php/')?>welcome/userLogin" name='myform'>
                    				<div class="form_row"><label>User Name</label><input name="uid" type="text" class="noSpecialChars" id="uid" maxlength="60"/>
              						</div>
                    				<div class="form_row"><label>Password</label><input name="upass" type="password" class="inputfield" id="password" maxlength="60"/></div>
                    				<a href="<?php echo base_url('index.php/')?>welcome/register"><label id='register'>click here for register</label></a><input class="button" type="submit" name="Submit" value="Login" />
                				</form>
					</div>
			<?php }?>
			
            
		            <div class="spacetobottom"></div>
		            	<h1>Latest News</h1>
		            		<div class="newssection">    
			            		<h4>Mauris blandit vehicula neque</h4>        	
		                		<p>Quisque in diam a justo condimentum molestie. Vivamus a velit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. <a href="#">more...</a></p>
		            		</div>
		            
							<div class="newssection">    
			            		<h4>Curabitur velit tellus</h4>        	
		                		<p>Duis vitae velit sed dui males uada digni ssim. Donec mollis aliquet ligula. Maec enas adipiscing elementum ipsum. <a href="#">more...</a></p>
		            		</div>
		            <div class="more_button"><a href="#">Read All</a></div>
		            
		            		<a href="http://validator.w3.org/check?uri=referer"><img style="border:0;width:88px;height:31px" src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Transitional" width="88" height="31" vspace="8" border="0" /></a>
							<a href="http://jigsaw.w3.org/css-validator/check/referer"><img style="border:0;width:88px;height:31px"  src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="Valid CSS!" vspace="8" border="0" /></a>
            
        </div>
        <!-- End of left column -->

        <!-- Right column -->
        <div id="templatemo_rightcolumn">
        	
        	<?php include_once './application/views/welcomeNotePage.php';//welcome Note page is included here
        	
        		?>
					            
            <div class="spacetobottom"></div>
            
            <div class="twocolumn">
	            <div class="twocolumn_box">
                    <h1>Who We Are</h1>
                    <p>
                        <img src="<?php base_url()?>images/image(70x70).jpg" alt="image" />
                   Proin vel libero id erat venenatis accumsan. Nunc blandit orci sit amet risus.
                  </p>
                    <ul>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Praesent varius egestas velit</li>
                        <li>Donec iaculis felis id neque</li>                        
                </ul>
                    <div class="more_button"><a href="#">View  All</a></div>
                </div>
                
                <div class="spacetoright"></div>

                <div class="twocolumn_box">
                    <h1>What We Do</h1>
                    <p>
                        <img src="<?php base_url()?>images/image(70x70).jpg" alt="image" />
                    Aliquam tristique lacus in sapien. Suspendisse potenti. Ut sed pede. Nullam vitae tellus. 
                    </p>
                    <ul>
                    	<li>Praesent varius egestas velit</li>
                        <li>Donec iaculis felis id neque</li>
                        <li>Lorem ipsum dolor sit amet</li>
					</ul>
                    <div class="more_button"><a href="#">View  All</a></div>
                </div>
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