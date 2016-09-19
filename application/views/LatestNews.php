<div class="spacetobottom"></div>
<?php
foreach ( $welcomePageDisplayData [5] as $news ) {
	$title = $news [0]->title;
	
	$i = 0;
	echo "<h1>$title</h1>";
	for($i; $i < count ( $news ); $i ++) {
		$hedline [$i] = $news [$i]->hedline;
		$desc [$i] = $news [$i]->desc;
		
		echo "<div class='newssection'>
		<h3 style='color:peru'>$hedline[$i]</h3>
		<p>
			  $desc[$i]
			<a href='#'>more...</a></p>
		</div>";
	}
}

?>
<div class="more_button">
	<a href="#">Read All</a>
</div>

<a href="http://validator.w3.org/check?uri=referer">
<img
	style="border: 0; width: 88px; height: 31px"
	src="http://www.w3.org/Icons/valid-xhtml10"
	alt="Valid XHTML 1.0 Transitional" width="88" height="31" vspace="8"
	border="0" /></a>
	
<a href="http://jigsaw.w3.org/css-validator/check/referer">
<img
	style="border: 0; width: 88px; height: 31px"
	src="http://jigsaw.w3.org/css-validator/images/vcss-blue"
	alt="Valid CSS!" vspace="8" border="0" /></a>
