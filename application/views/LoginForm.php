
<div class="login_form">
	<h1>Client Login</h1>
        						<?php
														
if (isset ( $_REQUEST ['sts'] )) {
															
															echo "<font color='red'><label id='msg'>Invalid username or password !</label></font>"; // massage for invalid user
														}
														?>
          						<form method="get"
		action="<?php echo base_url('index.php/welcome/userLogin')?>"
		name='myform'>
		<div class="form_row">
			<label>User Name</label><input name="uid" type="text" class="noSpecialChars" id="uid" maxlength="60" />
		</div>
		<div class="form_row">
			<label>Password</label><input name="upass" type="password" class="inputfield" id="password" maxlength="60" />
		</div>
		<a href="<?php echo base_url('index.php/welcome/register')?>">click here for register</a>
		<input class="button" type="submit" name="Submit" value="Login" />
	</form>
</div>