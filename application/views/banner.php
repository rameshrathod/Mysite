<div id="templatemo_header_banner">

	<?php 
	foreach ( $welcomePageDisplayData [7] as $banner ) {
		$company_name = $banner [0]->name_of_company;
		$what_we_do_tagline = $banner [0]->what_we_do_tagline;
		$company_tagline = $banner [0]->company_tagline;
		$logo_img = $banner [0]->logo_img;
		$banner_img = $banner [0]->banner_img;
		

		
		$imageDataEncoded = base64_encode($banner_img);
		$imageData = base64_decode($imageDataEncoded);
		$source = imagecreatefromstring($imageData);
		$angle = 0;
		$rotate = imagerotate($source, $angle, 0); // if want to rotate the image
		$imageName = "banner1.jpg";
		$imageSave = imagejpeg($rotate,"images/".$imageName,100);
		imagedestroy($source);
		
		$imageDataEncoded1 = base64_encode($logo_img);
		$imageData1 = base64_decode($imageDataEncoded1);
		$source1 = imagecreatefromstring($imageData1);
		$angle1 = 0;
		$rotate1 = imagerotate($source1, $angle1, 0); // if want to rotate the image
		$imageName1 = "header.jpg";
		$imageSave1 = imagejpeg($rotate1,"images/".$imageName1,100);
		imagedestroy($source1);
	}
	?>

    	<div id="templatemo_header">
    	<div id='logo'></div>
        	<div id="templatemo_sitetitle">
        	
            	
            	<?php echo $company_name?>
            	</div>
      <div id="templatemo_tagline"><i><?php echo $what_we_do_tagline?></i></div>
        </div>
        <div id="templatemo_banner">
        	<div id="templatemo_bannertext">
        		<div id='back'>
            	<?php echo $company_tagline?>
            	</div>
            </div>
        </div>
    </div>