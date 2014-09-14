<?php
/*
	Section: PinFooter
	Author: PageLines
	Author URI: http://www.pagelines.com
	Description: PinsPro stylized footer area. Columnized with navigation.
	Class Name: PinFooter
	Filter: format, dual-width
	
*/


class PinFooter extends PageLinesSection {

	
	function section_opts(){

		$menu_options = array(); 
		
		for( $i = 1; $i <= 3; $i++ ){
			
			$menu_options[] = array(
									'key'			=> 'pf_nav_title_'.$i,
									'type'			=> 'text',
									'label'		 	=> sprintf( __( 'Nav %s | Title', 'pagelines' ), $i ),
								);
			
			$menu_options[] = array(
									'key'			=> 'pf_nav_menu_'.$i,
									'type'			=> 'select_menu',
									'label'		 	=> sprintf( __( 'Nav %s | Select Menu', 'pagelines' ), $i ),
								);
			
			$menu_options[] = array(
									'type'			=> 'divider',
								);
			
			
			
			
		}

		$options = array(
		 	array(
				'type' 			=> 'multi',
				'title' 		=> __( 'Logo', 'pagelines' ),
				'opts'			=> array(
					array(
						'key'		=> 'pf_logo',
						'type' 		=> 'image_upload',
						'label' 	=> __( 'Logo', 'pagelines' ),
					),
					
					array(
						'key'		=> 'pf_text',
						'type' 		=> 'textarea',
						'label' 	=> __( 'About Text', 'pagelines' ),
					),
					
					array(
						'key'		=> 'pf_copy',
						'type' 		=> 'text',
						'label' 	=> __( 'Copywrite text or similar.', 'pagelines' ),
					),

				)
			),
			
			array(
				'type' 			=> 'multi',
				'col'			=> 2,
				'title' 		=> __( 'Navigation Columns', 'pagelines' ),
				'opts'			=> $menu_options
			),
			
			
		);
		return $options;

	}
	
	
   function section_template() { 
	
		$background = ( $this->opt('ef_logo') ) ? $this->opt('ef_logo') : PL_THEME_URL.'/background.png';
		
		$callout = ( $this->opt('ef_callout') ) ? $this->opt('ef_callout') : 'CONNECT WITH EVENLIFE ';
		$copy = ( $this->opt('ef_copy') ) ? $this->opt('ef_copy') : '&copy; Copyright 2014 Evenlife Christian Fellowship. All rights reserved.';
		
		
	
	?>
	
	<div class="pinfooter-container row">
		<div class="span12">
			<div class="callout-text">
				<h3><?php echo $callout; ?><h3> 
			<div>
		</div>
		<div class="span12">
			<div class="copyright-text">
				<p><?php echo $copy; ?></p>
			</div>
		</div>
	</div>
	
	
	<?php
	}
	
	
	
}