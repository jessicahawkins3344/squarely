
    <nav class="navbar navbar-default navbar-fixed-top" style="padding: 0em 4em;">
      <div class="container-fluid">
        <div class="navbar-header">
  				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
  			    	<span class="sr-only">Toggle navigation</span>
  			    	<span class="icon-bar"></span>
  			    	<span class="icon-bar"></span>
  			    	<span class="icon-bar"></span>
  			  	</button>
            <a class="navbar-brand brand" href="<?= esc_url(home_url('/')); ?>"><img src="<?php bloginfo('template_url'); ?>/dist/images/logo.png" id="logo" alt="Banctek_logo"></a>
  			</div><!--/.nav-header -->
        <div id="navbar" class="navbar-collapse collapse">
          <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav pull-right']);
          endif;
          ?>
        </div>
      </div>
    </nav>
