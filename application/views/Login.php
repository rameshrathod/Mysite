
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/loginstyle.css">
<script src="<?php echo base_url()?>js/jquery.js"></script>
<script src="<?php echo base_url()?>js/jquery.validate.min.js"></script>
<script src="<?php echo base_url()?>js/loginform-validation.js"></script>
<center>
<?php echo "<h1>welcome to login page</h1>";?>

<div class="outer">
	

<?php
if(isset($_REQUEST['sts']))
{
  echo "<font color='red'><label id='msg'>Invalid username or password !</label></font>";//massage for invalid  user
}
?>
<div class="content">
<form method = "get" action = "<?php echo base_url('index.php/')?>welcome/userLogin" name="myform" onsubmit=" return validateForm()">
<label id="txt">User Name</label><input type ="text" id = "uid" placeholder = "User Id" name = "uid" class="required noSpecialChars"><br><br>
<label id="txt">Password</label><input type = "password" id = "password" name = "upass" placeholder = "******"><br><br>
<input type = "submit" id = "login" value = "Login" class='button'>
</form>
</div>
</div>
</center>