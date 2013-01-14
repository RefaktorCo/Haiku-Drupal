<?php 
  haiku_header($page); // Call Header 
  global $root; 
  $slide_number = theme_get_setting('slides_number');
?>

  <?php if (theme_get_setting('enable_slider') == '1') : ?>
		<div class="slider_wrap"> 
	    <div class="row">
	    	<div class="twelve columns">
	    	  <div id="front_slide">
	    	    <?php $i = '1'; while ($i <= $slide_number) { ?>
		    	    <div <?php if (theme_get_setting('slide_caption_'.$i.'') != '') : ?> data-caption="#caption<?php echo $i;?>"<?php endif;?>>
			    	    <img src="<?php print file_create_url(theme_get_setting('slide_path_'.$i.'')); ?>">
		    	    </div>
		    	    
		    	    <?php if (theme_get_setting('slide_caption_'.$i.'') != '') : ?>
		    	      <span class="orbit-caption" id="caption<?php echo $i;?>"><?php echo theme_get_setting('slide_caption_'.$i.''); ?></span>
		    	    <?php endif;?>
	    	    <?php $i++; } ?>
	    	  </div>
	    	</div>
			</div>  
		</div>
		<?php endif; ?>
		
		<?php if (theme_get_setting('enable_highlight') == '1') : ?>       
    <div id="highlight">
      <div class="row">
        <div class="twelve columns">
          <h2 class="highlight_text"><?php echo theme_get_setting('highlight_text');?></h1>
        </div>
      </div>
    </div>
    <?php endif; ?>
    
    <?php if (theme_get_setting('enable_services') == '1') : ?>  
    <div id="services" class="row">
      <div class="twelve columns">
         <?php if(!$page['services']) {?>
         <div class="row">
         
          <div class="three columns services_wrap">
            <a href="#"><i class="icon-picture"></i><h3>MINIMAL DESIGN</h3></a>
            <div class="services_text">Clean and light-weight</div>
          </div>
          <div class="three columns services_wrap">
             <a href="#"><i class="icon-qrcode"></i><h3>MOBILE READY</h3></a>
             <div class="services_text">Looks great on any device</div>
          </div>
          <div class="three columns services_wrap">
            <a href="#"><i class="icon-heart"></i><h3>EXPERT SUPPORT</h3></a>
            <div class="services_text">We're here to help you</div>
          </div>
          <div class="three columns services_wrap">
            <a href="#"><i class="icon-cogs"></i><h3>THEME OPTIONS</h3></a>
            <div class="services_text">Total control of your site</div>
          </div>
        
        </div>
        <?php } else { print render($page['services']); }?>  
      </div>
    </div>
    
    <div class="row seperator">
      <div class="twelve columns">
        <hr>
      </div>
    </div>    
    
    <?php endif; ?>
    
    <?php if (theme_get_setting('enable_information') == '1') : ?>  
    
    <div class="row">
      <div class="twelve columns">
        
        <?php if(!$page['information']) {?>
		    <div class="row">
		      <div id="think" class="eight columns">
		        
		        <div class="heading_title">What we believe</div>       
		        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</p>
		        <p><i class="icon-ok"></i>Sed ut perspiciatis unde omnis iste natus error sit voluptatem <a href="#">accusantium doloremque.</a></p>
		        <p><i class="icon-ok"></i>At vero eos et accusamus et iusto odio dignissimos ducimus qui <a href="#">blanditiis praesentium </a></p>
		        <p><i class="icon-ok"></i>Sed ut perspiciatis unde omnis iste natus error sit voluptatem <a href="#">accusantium doloremque.</a></p>
		      </div>
		      
		      <div class="four columns">
		        
		          <div class="heading_title">What our clients think</div>
		       
		        <ul id="quotes">
		          <li>
				        <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.”</p>
				        <div class="client_img"><img src="<?php echo $root;?>/images/client-1.jpg"></div>
				        <h4>Frank Castillo</h4>-<a href="#">Lorem, Inc</a>
		          </li>
		           <li>
				        <p>"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.”</p>
				        <div class="client_img"><img src="<?php echo $root;?>/images/client-2.jpg"></div>
				        <h4>Edward Jones</h4>-<a href="#">Ipsum LLC</a>
		          </li>
		           <li>
				        <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.”</p>
				        <div class="client_img"><img src="<?php echo $root;?>/images/client-3.jpg"></div>
				        <h4>Jill Hardy</h4>-<a href="#">Vivantus Corp</a>
		          </li>
		        </ul>  
		      </div>
		    </div>  
		  <?php } else { print render($page['information']); }?>   
      </div>
    </div>    
        
    <div class="row seperator">
      <div class="twelve columns">
        <hr>
      </div>
    </div> 
    
    <?php endif; ?>
          
    <?php if (theme_get_setting('enable_recent_posts') == '1') : ?>         
    <div class="row">
      <div class="twelve columns">
        <div class="heading_title"><?php echo theme_get_setting('recent_posts_title');?></div>
      </div>
    </div> 
     
    <div class="row">
      <?php print render($page['front_blog']); ?>     
    </div>
   
    
     <div class="row seperator">
      <div class="twelve columns">
        <hr>
      </div>
    </div> 
    <?php endif; ?> 
     
    <?php if (theme_get_setting('enable_recent_projects') == '1') : ?>             
    <div class="row">
      <div class="twelve columns">
       
          <div class="heading_title"><?php echo theme_get_setting('recent_projects_title');?></div>
          <div class="carousel_navigation">
		        <a id="prev" class="prev" href="#"><i class="icon-chevron-left"></i></a>
					  <a id="next" class="next" href="#"><i class="icon-chevron-right"></i></a>
          </div>
      
      </div>
    </div> 
     
    <div class="row">
      <div class="twelve columns">
        <div class="projects_carousel">  
          <ul id="recent_projects">
            <?php print render($page['recent_projects']); ?>       
          </ul>
       </div>      
      </div>
    </div>
    <?php endif ?>  
    
    <?php if (theme_get_setting('enable_clients') == '1') : ?>   
     <div class="row seperator">
      <div class="twelve columns">
        <hr>
      </div>
    </div> 
    
    
    <div class="row">
      <div class="twelve columns">
        <?php if(!$page['clients']) {?>

          <div class="heading_title"><?php echo theme_get_setting('clients_title');?></div> 
          <div class="clients_carousel_navigation">
		        <a id="clients_prev" class="clients_prev" href="#"><i class="icon-chevron-left"></i></a>
					  <a id="clients_next" class="clients_next" href="#"><i class="icon-chevron-right"></i></a>
          </div>
    
      </div>
    </div> 
    
    <div id="our_clients" class="row">
      <div class="twelve columns">
        <div class="clients_carousel_wrap">
        
	        <ul id="clients_carousel">  
	      
		        <li>
			        <div class="clients_wrap">
			          <img src="<?php echo $root; ?>/images/forest.png">
			        </div>
		        </li>  
		      
		        <li>
			        <div class="clients_wrap">
			          <img src="<?php echo $root; ?>/images/den.png">
			        </div>
		        </li>
		        
		        <li>     
			        <div class="clients_wrap">
			          <img src="<?php echo $root; ?>/images/canyon.png">
			        </div>
		        </li>
		        
		        <li>
			        <div class="clients_wrap">
			          <img src="<?php echo $root; ?>/images/jungle.png">
			        </div>
		        </li>
		        
		        <li>
			        <div class="clients_wrap">
			          <img src="<?php echo $root; ?>/images/forest.png">
			        </div>
		        </li> 
	        
	        </ul>  
	        
        </div>
        <?php } else { print render($page['clients']); }?>  
      </div>
    </div>
    <?php endif ?>  
    <div class="bottom_spacer"></div>   
  </div>
  <!-- end main wrapper -->    

<?php haiku_footer($page); // Call Footer ?>