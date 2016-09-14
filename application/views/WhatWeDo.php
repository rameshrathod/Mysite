<div class="spacetoright"></div>
<?php 

foreach ( $welcomePageDisplayData [6] as $we_do ) {
	$title = $we_do[0]->title;
	$image = $we_do[0]->img;
	$desc = $we_do[0]->desc;

}

?>
<div class="twocolumn_box">
	<h1><?php echo $title?></h1>
	<p>
		<img src="<?php base_url()?>images/image(70x70).jpg" alt="image" />
		<?php echo $desc ?>
	</p>
	<div class="more_button">
		<a href="#">View All</a>
	</div>
</div>