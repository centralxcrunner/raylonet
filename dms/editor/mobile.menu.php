<?php 



class PageLinesMobileMenu {
	
	
	
	function __construct(){
		
		add_action( 'pagelines_before_site', array( $this, 'menu_template' ) );
		register_nav_menus( array( 'mobile_nav' => __( 'Mobile Navigation', 'pagelines' ) ) );
	}
	
	function register_location() {
		
		
	}
	
	function menu_template(){
		
		$menu = ( pl_setting( 'primary_navigation_menu' ) ) ? pl_setting( 'primary_navigation_menu' ) : false;
		$menu2 = ( pl_setting( 'secondary_navigation_menu' ) ) ? pl_setting( 'secondary_navigation_menu' ) : false;
		?>
		<div class="pl-mobile-menu">
			
			<?php pagelines_search_form( true, 'mm-search'); ?>
			<div class="mm-holder">
				
				
				<?php
				
				if ( is_array( wp_get_nav_menu_items( $menu ) ) || has_nav_menu( 'mobile_nav' ) ) {
					
					wp_nav_menu(
						array(
							'menu_class'		=> 'mobile-menu primary-menu',
							'menu'				=> $menu,
							'container'			=> null,
							'container_class'	=> '',
							'depth'				=> 2,
							'fallback_cb'		=> '',
							'theme_location'	=> 'mobile_nav'
						)
					);
					
				} else
					pl_nav_fallback( 'mobile-menu primary-menu' );
					
				if ( is_array( wp_get_nav_menu_items( $menu2 ) ) ) {
					
					wp_nav_menu(
						array(
							'menu_class'		=> 'mobile-menu secondary-menu',
							'menu'				=> $menu2,
							'container'			=> null,
							'container_class'	=> '',
							'depth'				=> 1,
							'fallback_cb'		=> ''
						)
					);
					
				} 
				
				
				$twitter = pl_setting('twittername'); 
				$facebook = pl_setting('facebook_name');
				
				?>
				<div class="social-menu">
					
					<?php 
					
						if($facebook)
							printf('<a href="http://www.facebook.com/%s"><i class="mm-icon icon icon-large icon-facebook"></i></a>', $facebook);
						
						if($twitter)
							printf('<a href="http://www.twitter.com/%s"><i class="mm-icon icon icon-large icon-twitter"></i></a>', $twitter); 
							
						?>
				</div>
			</div>
		</div>
		<?php 
		
	}
	
	
	
}
