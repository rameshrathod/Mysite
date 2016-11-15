	<div class="twocolumn_box">
	
	
	 		<?php 
				  
				  foreach ($welcomePageDisplayData[4] as $aboutme){
					$title=$aboutme[0]->title;
					$name=$aboutme[0]->name;
					$email=$aboutme[0]->email_id;
					$qualif=$aboutme[0]->qualification;
					$image=$aboutme[0]->myimg;
				  }
				  
				  ?>
                    <h1><?php echo $title?></h1>
                    <p>
                        <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($image).'" alt="image"/>';?>
                   Proin vel libero id erat venenatis accumsan. Nunc blandit orci sit amet risus.
                  </p>
                    <ul>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Praesent varius egestas velit</li>
                        <li>Donec iaculis felis id neque</li>                        
                </ul>
                    <div class="more_button"><a href="#">View  All</a></div>
  	 </div>