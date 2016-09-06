<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/main.css">
<?php
echo "<h1>welcome ".$_REQUEST['uid']."</h1><br>";

echo "<a href='".base_url('index.php/')."welcome/logout' style='text-decoration:none'><label id='logout'>Logout</label></a><br/>";