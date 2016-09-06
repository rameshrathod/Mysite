
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/style1.css">

<center>
	<?php
		echo "<h1>welcome to Registration page</h1>";
	?>
<script src="<?php echo base_url()?>js/jquery.js"></script>
<script src="<?php echo base_url()?>js/jquery.validate.min.js"></script>
<script src="<?php echo base_url()?>js/form-validation.js"></script>


<div class="outer">
	<div class="content">
		<form method = "get" action ="<?php echo base_url('index.php/')?>welcome/insertModel" name="register">
							<input type ="text" id = "uname" placeholder = "user name" name = "uname" class="required noSpecialChars"><br>
							
							<?php if(isset($_REQUEST['user']))
		{
		  echo "<br><font color='red'><br>User Name is Already exist !!! <font>"; //massage for user exists
		}?>
		                	<br><input type ="text" id = "FirstName" placeholder = "First Name" name = "fname" class="required noSpecialChars1"><br><br>
		                	<input type ="text" id = "LastName" placeholder = "Last Name" name = "lname" class="required noSpecialChars2"><br><br>
		
		              		<input type = "password" id = "password" name = "pass" placeholder = "Create password" ><br><br>
		
		              		<input type = "password" id = "cpassword" name = "cpass" placeholder = "confirm password" class="required passwordMatch"><br><br>
							<br>
		              		<?php
		
											if(isset($_REQUEST['sts']))
											{
											  echo "<font color='red'>Please enter valid Captcha !!!<font><br>";//massage for invalid  user
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
											echo "<img src=".base_url()."captcha.jpg><input type='button' value='Refresh' class='button' onclick='location.reload();'/>
													<br><input type='text' name='cap' placeholder='Type above Text'class='required noSpecialChars3'/>";
											}
											
											//captrcha code ends here
						?>
		               		 
		   						 <input type = "submit" id = "dologin" class='button1' value = "Register">
		   						
	</div>
			
			 
		   						
 </div>          
 		
  								<?php 
  
  								 if(isset($_REQUEST['user']))
  								{
  									echo "<br><font color='red'><br> Registration failed !!! <font>"; //massage for user exists
  										}
  										if(isset($_REQUEST['sts']))
  										{
  											echo "<br><font color='red'><br> Registration failed !!! <font>"; //massage for user exists
  										}
		   						 if(isset($_REQUEST['registerSuccess']))
		   						 {
		   						 	echo "<font color='green'>Registration is successfully done !!!</font><br>";//massage for valid  user
		   						 	echo "&nbsp;&nbsp;&nbsp;<a href='".base_url('index.php/')."welcome/login'>click here for Login</a><br/>";
		   						 }
		   						 
		   						 ?>
</form>
	   
	   
</center>
