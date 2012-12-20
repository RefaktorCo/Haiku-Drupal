<?php
  function haiku_front_page($page){
  global $root; 
?>

    <?php if (theme_get_setting('enable_slider') == '1') : ?>
		<div id="heading_wrapper" class="slider_wrap"> 
    	<div id="heading_wrapper_after">
	    	<div class="row">
		    	<div class="twelve columns">
			    	<img src="<?php echo $root; ?>/images/vase.jpg">
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
    
    <div id="services" class="row">
      <div class="twelve columns">
        <div class="row">
          <div class="three columns">
            <i class="icon-picture"></i><h3>MINIMAL DESIGN</h3>
            <div class="services_text">Clean and light-weight</div>
          </div>
          <div class="three columns">
            <i class="icon-qrcode"></i><h3>MOBILE READY</h3>
             <div class="services_text">Looks great on any device</div>
          </div>
          <div class="three columns">
            <i class="icon-heart"></i><h3>EXPERT SUPPORT</h3>
            <div class="services_text">We're here to help you</div>
          </div>
          <div class="three columns">
            <i class="icon-cogs"></i><h3>THEME OPTIONS</h3>
            <div class="services_text">Total control of your site</div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="row">
    
      <div id="think" class="eight columns">
        <div class="hr_beside">
          <div class="heading_title">What we believe</div>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</p>
        <p><i class="icon-ok"></i>Sed ut perspiciatis unde omnis iste natus error sit voluptatem <a href="#">accusantium doloremque.</a></p>
        <p><i class="icon-ok"></i>Sed ut perspiciatis unde omnis iste natus error sit voluptatem <a href="#">accusantium doloremque.</a></p>
        <p><i class="icon-ok"></i>Sed ut perspiciatis unde omnis iste natus error sit voluptatem <a href="#">accusantium doloremque.</a></p>
      </div>
      
      <div class="four columns">
        <div class="hr_beside">
          <div class="heading_title">What our clients think</div>
        </div>
        <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.”</p>
        <div class="client_img"><img src="<?php echo $root;?>/images/client-1.jpeg"></div>
        <h4>Frank Castillo</h4>-<a href="#">Lorem, Inc</a>
      </div>
    </div>  
          
    <?php if (theme_get_setting('enable_recent_posts') == '1') : ?>         
    <div class="row">
      <div class="twelve columns">
        <div class="hr_beside">
          <div class="heading_title"><?php echo theme_get_setting('recent_posts_title');?></div>
        </div>
      </div>
    </div> 
     
    <div class="row">
      <?php print render($page['front_blog']); ?>     
    </div>
    <?php endif; ?> 
     
    <?php if (theme_get_setting('enable_recent_projects') == '1') : ?>             
    <div class="row">
      <div class="twelve columns">
        <div class="hr_beside">
          <div class="heading_title"><?php echo theme_get_setting('recent_projects_title');?></div>
          <div class="carousel_navigation">
		        <a id="prev" class="prev" href="#"><i class="general foundicon-left-arrow"></i></a>
					  <a id="next" class="next" href="#"><i class="general foundicon-right-arrow"></i></a>
          </div>
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
    
    <div class="row">
      <div class="twelve columns">
        <div class="hr_beside">
          <div class="heading_title">Our clients</div>
        </div>
      </div>
    </div> 
    
    <div id="our_clients" class="row">
      <div class="two columns">
        <img src="<?php echo $root; ?>/images/forest.png">
      </div>
      <div class="two columns">
        <img src="<?php echo $root; ?>/images/den.png">
      </div>
      <div class="two columns">
        <img src="<?php echo $root; ?>/images/forest.png">
      </div>
      <div class="two columns">
        <img src="<?php echo $root; ?>/images/canyon.png">
      </div>
      <div class="two columns">
        <img src="<?php echo $root; ?>/images/forest.png">
      </div>
      <div class="two columns">
        <img src="<?php echo $root; ?>/images/jungle.png">
      </div>
    </div>

  </div>
  <!-- end main wrapper -->    
  
   <?php }
?>