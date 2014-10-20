<?php
/*
	Section: FireFly
	Author: Raymond
	Author URI: http://www.pagelines.com
	Description: A simple FireFly style canvas area
	Class Name: RayFireFly
	Filter: full-width
*/


class RayFireFly extends PageLinesSection {

	function section_styles(){
        
        wp_enqueue_script( 'firefly', $this->base_url . '/js/script.firefly.js', array( 'jquery' ), pl_get_cache_key(), true );
        wp_enqueue_script( 'firefly-custom', $this->base_url . '/js/rl.custom.js', true);
        wp_enqueue_script( 'typed', $this->base_url . '/js/script.typed.js', array( 'jquery' ), pl_get_cache_key(), true );
    }
    
    function section_opts(){
        
        $options = array();

        $options[] = array(

            'title' => __( 'Firefly Configuration', 'pagelines' ),
            'type'  => 'multi',
            'opts'  => array(
                array(
                    'key'           => 'revslider_delay',
                    'type'          => 'text_small',
                    'default'       => 12000,
                    'label'         => __( 'Time Per Slide in Milliseconds (e.g. 12000)', 'pagelines' ),
                ),
                array(
                    'key'           => 'revslider_height',
                    'type'          => 'text_small',
                    'default'       => 500,
                    'label'         => __( 'Slider Height in Pixels (e.g. 500)', 'pagelines' ),
                ),
                array(
                    'key'           => 'revslider_fullscreen',
                    'type'          => 'check',
                    'label'         => __( 'Set to full window height? (Overrides height setting)', 'pagelines' ),
                    'help'          => __( 'This option will set the slider to the height of the users browser window on load, it will also resize as needed.', 'pagelines' ),
                )
            )

        );

        $options[] = array(
            'key'       => 'islider_array',
            'type'      => 'accordion', 
            'col'       => 2,
            'title'     => __('iSlider Setup', 'pagelines'), 
            'post_type' => __('iSlide', 'pagelines'), 
            'opts'  => array(
                array(
                    'key'       => 'image',
                    'label'     => __( 'Slide  Image <span class="badge badge-mini badge-warning">REQUIRED</span>', 'pagelines' ),
                    'type'      => 'image_upload',
                    'sizelimit' => 2097152, // 2M
                    'help'      => __( 'For high resolution, 2000px wide x 800px tall images. (2MB Limit)', 'pagelines' )
                    
                ),
                array(
                    'key'       => 'title',
                    'label'     => __( 'Title', 'pagelines' ),
                    'type'      => 'text'
                ),
                array(
                    'key'       => 'text',
                    'label'     => __( 'Text', 'pagelines' ),
                    'type'      => 'text'
                ),
                array(
                    'key'       => 'loop',
                    'label'     => __( 'Style', 'pagelines' ),
                    'type'      => 'select',
                    'default'   => 'element-light',
                    'opts'      => array(
                        'element-light'  => array('name'=> 'Light Text and Elements'),
                        'element-dark'   => array('name'=> 'Dark Text and Elements'),
                    )
                ),
                array(
                    'key'       => 'link',
                    'label'     => __( 'Link (Optional)', 'pagelines' ),
                    'type'      => 'text'
                ),
                array(
                    'key'       => 'link_text',
                    'label'     => __( 'Link Text', 'pagelines' ),
                    'type'      => 'text'
                ),
            )
        );
        
        
        return $options;
    }

    function section_template() {


		?>
        <div class="firefly-container" data-typedtext="Raymond Lopez">
    		<div class="firefly pl-window-height">

    			<h1 class="rl-typed center"></h1>
                <p class="center">Raymond Lopez - a UI designer working at PageLines and living in Austin</p>


    		</div>
        </div>


		<?php 
	
	}

}