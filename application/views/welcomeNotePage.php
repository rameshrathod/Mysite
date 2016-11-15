	<div class="onecolumn">
        	
        		  <?php 
				  
				  foreach ($welcomePageDisplayData[3] as $welcome){
					$title=$welcome[0]->title;
					$para1=$welcome[0]->DescPara1;
					$para2=$welcome[0]->DescPara2;
					$para3=$welcome[0]->DescPara3;
					$image=$welcome[0]->img;
				  }
				  
				  ?>
        	
                <h1><?php echo $title?></h1>
                <p> <!--  <img src="<?php base_url()?>images/image(130x130).jpg" alt="image" />-->
                	<?php echo '<img src="data:image/jpeg;base64,'.base64_encode($image).'" alt="image"/>';
                	
                	?>
                <?php echo $para1?>
                </p>
                
              <p>
              	<?php echo $para2?>
              </p>
              
              <p>
                <?php echo $para3?>
                </p>
		</div>