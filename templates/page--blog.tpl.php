<?php haiku_header($page);?>
    
<div id="heading_wrapper">
  <div id="heading_wrapper_after">
 	  <div class="row">
      <div class="six columns">
        <h2 class="page_heading_text"><?php print $title; ?></h2>
      </div>
      <div class="six columns">  
        <div id="breadcrumbs"><h3><?php if (theme_get_setting('breadcrumbs') == '1') {print $breadcrumb . $title; } ?></h3></div>
      </div>  
    </div>
  </div>
</div> 
 
<div class="row">
  <div id="main_content_wrap" class="<?php if (($page['sidebar_first']) OR ($page['sidebar_second'])) { echo "eight columns";} else { echo "twelve columns"; } ?>">
    <div id="main_content">
      <?php print $messages; ?>
      <?php print render($title_prefix); ?>
      <?php print render($title_suffix); ?>
      <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
      <?php print render($page['content']); ?>
    </div>
  </div>

  <?php if (($page['sidebar_first']) OR ($page['sidebar_second'])): ?>
  
    <div class="four columns">
      <div id="sidebar_wrap">
	    	<?php if ($page['sidebar_first']): ?>
	    	<aside id="sidebar-first" role="complementary" class="sidebar clearfix">
	      <?php print render($page['sidebar_first']); ?>
	      </aside>  <!-- /#sidebar-first -->
	      <?php endif; ?>
	      <?php if ($page['sidebar_second']): ?>
	      <aside id="sidebar-second" role="complementary" class="sidebar clearfix">
	      <?php print render($page['sidebar_second']); ?>
	      </aside>  <!-- /#sidebar-first -->
	      <?php endif; ?>
      </div>        
    </div>
  
  <?php endif; ?>
</div>

<?php haiku_footer($page);?>