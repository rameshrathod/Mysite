        <div id="templatemo_menu">
        	<ul>
			<li><a href="<?php echo base_url('index.php')?>?user" class="current">Home</a></li>
			<li>
			
				<div class="dropdown" style="float:left;">
					<a href="http://www.templatemo.com/page/1" class="dropbtn" >Services</a>
				  	<div class="dropdown-content" style="left:0;">
				  <?php 
				  foreach ($welcomePageDisplayData[0] as $s_anchor){
						$i=0;
						for ($i;$i<count($s_anchor);$i++)
						{
						echo '<a href="'.base_url('index.php').'">'.$s_anchor[$i]->anchor_name.'</a>';
						
						}
				  }
				  ?>
				  	</div>
            
            	</div>
			
			</li>
			<li>
			
				<div class="dropdown" style="float:left;">
					<a href="http://www.templatemo.com/page/1" class="dropbtn" >Products</a>
				  	<div class="dropdown-content" style="left:0;">
				  <?php 
				  
				  foreach ($welcomePageDisplayData[1] as $prodanchor){
					$i=0;
					for ($i;$i<count($prodanchor);$i++)
					{
					echo '<a href="'.base_url('index.php').'">'.$prodanchor[$i]->anchor_name.'</a>';

					}
				  }
				  
				  ?>
				  	</div>
            
            	</div>
			
			</li>
            <li><a href="#">About Us</a></li>                      
            <li><a href="#" class="lastmenu">Contact Us</a></li> 
            
            
             <?php if($this->session->userdata('mob'))
        {?>
            <li>
            <div class="dropdown" style="float:left;">
            <a href="#" class="dropbtn" >My Profile</a>
            		
				  <div class="dropdown-content" style="left:0;">
				  
				     <?php 
				  foreach ($welcomePageDisplayData[2] as $myprofanchor){
					$i=0;
					for ($i;$i<count($myprofanchor);$i++)
					{
					echo '<a href="'.base_url('index.php/').$myprofanchor[$i]->controllerName."/".$myprofanchor[$i]->methodName.'">'.$myprofanchor[$i]->anchor_name.'</a>';
					
					}
				  }
				  ?>
				  </div>
            
            </div>
            </li> 
            <?php }else{?>
            		
            		<li><a href="<?php echo base_url('index.php/')?>welcome/register">Register</a></li> 
            		
            <?php }?>
          </ul> 
</div>