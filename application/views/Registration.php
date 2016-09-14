

  

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
<script src="<?php echo base_url()?>js/form-validation1.js"></script>
</head>

<body>
<div id="templatemo_wrapper1">
<div id="templatemo_wrapper2">
	<div id="templatemo_container">
    
					<?php include_once './application/views/menuAnchors.php';// All anchors holding page
						 include_once './application/views/banner.php';//banner holding page
					?>
        
        
            
      <div id="templatemo_content">
			<div class='regfrom'>
		
			<form style='text-align: left;' method = "get" action ="<?php echo base_url('index.php/')?>welcome/insertModel" name="register">
		
			<div class='regMsg'>
			<?php
			echo "<h1>Welcome to Registration page</h1>";
			?>
			</div>
							<div class='reg_from_row'><input type ="text" id = "uname" placeholder = "user name" name = "uname" class="required noSpecialChars"></div>
							
							<?php if(isset($_REQUEST['userExist']))
		{
		  echo "<font color='red'>User Name is Already exist !!! </font>"; //massage for user exists
		}?>
		                	<div class='reg_from_row'><input type ="text" id = "FirstName" placeholder = "First Name" name = "fname" class="required noSpecialChars1"></div>
		                	<div class='reg_from_row'><input type ="text" id = "LastName" placeholder = "Last Name" name = "lname" class="required noSpecialChars2"></div>
		                	<div class='reg_from_row'><label>+91</label><input type ="text" id = "mobNo" placeholder = "Mobile No." name = "mobNo" class="required noSpecialChars4" maxlength="10"></div>
		
		              		<div class='reg_from_row'><input type = "password" id = "password" name = "pass" placeholder = "Create password" ></div>
		
		              		<div class='reg_from_row'><input type = "password" id = "cpassword" name = "cpass" placeholder = "confirm password" class="required passwordMatch"></div>
							
		              		<?php
		
											if(isset($_REQUEST['sts']))
											{
											  echo "<font color='red'>Please enter valid Captcha !!!</font>";//massage for invalid  user
											}
											if(!isset($_POST['nm']) || !isset($_POST['cap']) )
											{
												
											// Create a blank image and add some text
											$im = imagecreatetruecolor(120, 40);
											
											$text_color = imagecolorallocate($im, 233, 14, 91);
											//$val= rand(9,true).rand(9,true).rand(9,true).rand(9,true).rand(9,true).rand(9,true);
											function random($length = 6)
											{      
											    $chars ='qwertypasdfghjkzxcbnmMNBCXZLKJHGFDSAPYTREWQ23456789';
											    $result="";
											    for ($p = 0; $p < $length; $p++)
											    {
											        $result .= ($p%10) ? $chars[mt_rand(0, 50)] : $chars[mt_rand(0, 50)];
											    }
											    
											    return $result;
											}
											 $val=random();
											
											imagestring($im, 10, 5, 5,$val , $text_color);
											
											// Save the image as 'simpletext.jpg'
											imagejpeg($im, 'captcha.jpg',100);
											
											// Free up memory
											imagedestroy($im);
											
											$_SESSION['val_cap']=$val;//catccha seted into session
											echo "<input type ='hidden' id = 'val_cap'  name = 'val_cap' value='$val'>";
											echo "<div class='captch'>
															<div class='captchaImg'>
																<img src=".base_url()."captcha.jpg id='cImg'>
																<input type='button' value='Refresh' id='refbutton' onclick='location.reload();'/>
															
												
													</div>
														
													</div>
															<div class='reg_from_row1'><input type='text' name='cap' placeholder='Type above Text'class='required noSpecialChars3'/>
													</div>";
											}
											
											//captrcha code ends here
						?>
		               		 
		   						 <input type = "submit" id='regButton' value = "Register">
		   						        
 		 </div>
  								<?php 
  
  								 if(isset($_REQUEST['userExist']))
  								{
  									echo "<font color='red'><center>Registration failed !!! </center></font>"; //massage for user exists
  										}
  										if(isset($_REQUEST['sts']))
  										{
  											echo "<font color='red'><center>Registration failed !!!</center> </font>"; //massage for user exists
  										}
		   						 if(isset($_REQUEST['registerSuccess']))
		   						 {
		   						 	echo "<center><font color='green'>Registration is successfully done !!!</font><br>";//massage for valid  user
		   						 	echo "&nbsp;&nbsp;&nbsp;<a href='".base_url('index.php/')."welcome/login'>click here for Login</a></center>";
		   						 }
		   						 

		   						 ?>
		   						
		</form>
		</div>
<div id="templatemo_footer">
        <a href="#">Home</a> | <a href="#">Services</a> | <a href="#">Projects</a> | <a href="#">About Us</a> | <a href="#">Contact Us</a> | <a href="#">Register</a><br />
        Copyright © 2016 <a href="#"><strong>Dream Projects And Solutions</strong></a> | 
        <a href="http://www.iwebsitetemplate.com" target="_parent">Website</a> by <a href="http://www.templatemo.com" target="_parent">Dream Projects And Solutions</a>	</div>
    </div>
    <!-- Container close -->
    
</div> <!-- Wrapper 2 close -->
</div> <!-- Wrapper 1 close -->
</body>
</html>