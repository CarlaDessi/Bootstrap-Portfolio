<!-- Static navbar -->
      <div class="navbar navbar-default">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo get_option('siteurl'); ?>"><?php echo bloginfo('name'); ?></a>
        </div>
        <?php wp_nav_menu( array(
			'container'       => 'div',
			'container_class' => 'navbar-collapse',
			'menu_class'      => 'nav navbar-nav',
			'fallback_cb'     => 'wp_page_menu'
		) ); ?> 
      </div>
      
