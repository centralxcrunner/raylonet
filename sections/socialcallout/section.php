<?php
/*
	Section: socialCallout
	Author: PageLines
	Author URI: http://www.pagelines.com
	Description: A quick call to action with social for your users
	Class Name: socialCallout
	Edition: pro
	Filter: component
	Loading: active
*/

class socialCallout extends PageLinesSection {

	var $tabID = 'highlight_meta';


	function section_opts(){
		$opts = array(
			array(
				'type' 			=> 'select',
				'title' 		=> 'Select Format',
				'key'			=> 'socialcallout_format',
				'label' 		=> __( 'Social Callout Format', 'pagelines' ),
				'opts'=> array(
					'top'			=> array( 'name' => __( 'Text on top of button', 'pagelines' ) ),
					'inline'	 	=> array( 'name' => __( 'Text/Button Inline', 'pagelines' ) )
				),
			),
			array(
				'type' 			=> 'multi',
				'col'			=> 2,
				'title' 		=> __( 'Callout Text', 'pagelines' ),
				'opts'	=> array(
					array(
						'key'			=> 'socialcallout_text',
						'version' 		=> 'pro',
						'type' 			=> 'text',
						'label' 		=> __( 'Social Callout Text', 'pagelines' ),
					),
					array(
						'type' 			=> 'select',
						'key'			=> 'socialcallout_text_wrap',
						'label' 		=> __( 'Social Callout Text Wrapper', 'pagelines' ),
						'default'		=> 'h2',
						'opts'			=> array(
							'h1'			=> array('name' => '&lt;h1&gt;'),
							'h2'			=> array('name' => '&lt;h2&gt;  (default)'),
							'h3'			=> array('name' => '&lt;h3&gt;'),
							'h4'			=> array('name' => '&lt;h4&gt;'),
							'h5'			=> array('name' => '&lt;h5&gt;'),
						)
					),

				)
			),
			array(
				'type' 			=> 'multi',
				'title' 		=> 'Social Links',
				'col'			=> 3,
				'opts'	=> array(

					 array(
						'key'			=> 'facebook_link',
						'type' 			=> 'text',
						'label'			=> __( 'Facebook Link', 'pagelines' )
					),
					array(
						'key'			=> 'instagram_link',
						'type' 			=> 'text',
						'label'			=> __( 'Instagram Link', 'pagelines' )
					),

				)
			)

		);

		return $opts;

	}

	function section_template() {

		$text = $this->opt('socialcallout_text');
		$format = ( $this->opt('socialcallout_format') ) ? 'format-'.$this->opt('socialcallout_format') : 'format-inline';
		$facebook = $this->opt('facebook_link');
		$instagram = $this->opt('instagram_link');
		$text_wrap = ( '' != $this->opt( 'socialcallout_text_wrap' ) ) ? $this->opt( 'socialcallout_text_wrap' ) : 'h2';


		$socialcallout_head = sprintf( '<%s class="socialcallout-head" data-sync="socialcallout_text">%s</%s>', $text_wrap, $text, $text_wrap );

		?>
		<div class="socialcallout-container <?php echo $format;?>">
			<?php echo $socialcallout_head; ?>

			<?php if($facebook){ ?>
				<a class="socialcallout-action" href="<?php echo $facebook; ?>" target="_blank"><i class="icon icon-facebook fa-3x"></i></a>
			<?php } ?>

			<?php if($instagram){ ?>
				<a class="socialcallout-action" href="<?php echo $instagram; ?>" target="_blank"><i class="icon icon-instagram fa-3x"></i></a>
			<?php } ?>
		</div>
	<?php

	}
}
