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
            <p>Clean and light-weight</p>
          </div>
          <div class="three columns">
            <i class="icon-qrcode"></i><h3>MOBILE READY</h3>
            <p>Looks great on any device</p>
          </div>
          <div class="three columns">
            <i class="icon-heart"></i><h3>EXPERT SUPPORT</h3>
            <p>We're here to help you</p>
          </div>
          <div class="three columns">
            <i class="icon-cogs"></i><h3>THEME OPTIONS</h3>
            <p>Total control of your site</p>
          </div>
        </div>
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

  </div>
  <!-- end main wrapper -->    
  
    <!-- Begin front page modal markup -->    
       
    <!-- Google Map Modal -->  
  	<div id="map_modal" class="reveal-modal large">
      <div id="google_map">
        <iframe width="1170" height="370" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=900+Bagby+St+Houston,+TX+77002&amp;sll=33.687,-117.774252&amp;sspn=0.324522,0.682526&amp;t=m&amp;ie=UTF8&amp;hq=&amp;hnear=900+Bagby+St,+Houston,+Harris,+Texas+77002&amp;ll=29.761779,-95.370008&amp;spn=0.003725,0.012864&amp;z=17&amp;iwloc=A&amp;output=embed"></iframe><br />      
      </div>
     <a class="close-reveal-modal">&#215;</a>
    </div>
    
    <!-- Team Modal 1 -->
    <div id="team1_modal" class="reveal-modal medium">
      <div class="team_bio_modal">
	      <h1>Steve McQueen - CEO</h1>
	      <img src="<?php echo $root;?>/images/team3.jpg" alt="team"> 
	      <h2>Bio</h2>
	      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
	      <h2>Connect</h2>
	      <a href="http://facebook.com" target="_blank"><i class="social foundicon-facebook"></i></a> <a href="http://twitter.com" target="_blank"><i class="social foundicon-twitter"></i></a> <a href="http://linkedin.com" target="_blank"><i class="social foundicon-linkedin"></i></a>
	      <a class="close-reveal-modal">&#215;</a>
      </div>
    </div>
    
    <!-- Team Modal 2 -->
    <div id="team2_modal" class="reveal-modal medium">
      <div class="team_bio_modal">
	      <h1>Robyn Sullivan - Vice President</h1>
	      <img src="<?php echo $root;?>/images/team2.jpg" alt="team"> 
	      <h2>Bio</h2>
	      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
	      <h2>Connect</h2>
	      <a href="http://facebook.com" target="_blank"><i class="social foundicon-facebook"></i></a> <a href="http://twitter.com" target="_blank"><i class="social foundicon-twitter"></i></a> <a href="http://linkedin.com" target="_blank"><i class="social foundicon-linkedin"></i></a>
	      <a class="close-reveal-modal">&#215;</a>
      </div>
    </div>
    
    <!-- Team Modal 3 -->
    <div id="team3_modal" class="reveal-modal medium">
      <div class="team_bio_modal">
	      <h1>Aiko Takahashi - Design</h1>
	      <img src="<?php echo $root;?>/images/team1.jpg" alt="team"> 
	      <h2>Bio</h2>
	      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
	      <h2>Connect</h2>
	      <a href="http://facebook.com" target="_blank"><i class="social foundicon-facebook"></i></a> <a href="http://twitter.com" target="_blank"><i class="social foundicon-twitter"></i></a> <a href="http://linkedin.com" target="_blank"><i class="social foundicon-linkedin"></i></a>
	      <a class="close-reveal-modal">&#215;</a>
      </div>
    </div>
    
    <!-- Team Modal 3 -->
    <div id="team4_modal" class="reveal-modal medium">
      <div class="team_bio_modal">
	      <h1>Frank Douglas - Marketing</h1>
	      <img src="<?php echo $root;?>/images/team4.jpg" alt="team"> 
	      <h2>Bio</h2>
	      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
	      <h2>Connect</h2>
	      <a href="http://facebook.com" target="_blank"><i class="social foundicon-facebook"></i></a> <a href="http://twitter.com" target="_blank"><i class="social foundicon-twitter"></i></a> <a href="http://linkedin.com" target="_blank"><i class="social foundicon-linkedin"></i></a>
	      <a class="close-reveal-modal">&#215;</a>
      </div>
    </div>
    
    <!-- End front page modal markup -->  
<?php }
?>