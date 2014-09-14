<?php
/*
	Section: isermons
	Author: Raymond Lopez
	Author URI: http://www.raylo.net
	Description: A section for sermon media
	Class Name: isermons
	Filter: format
*/


class isermons extends PageLinesSection {

	function section_template() {
	
		?>
		    
                  					
                  				<?php if (is_single()) { } else{ query_posts( 'post_type=sermon'); } ?>
                  				
                  				<?php while ( have_posts() ) : the_post(); ?>
                                          
                                          <div class="sermon">
                  					<div class="sermons-title">
                        					<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                        					<?php the_field("preacher"); ?>     
                                                      <?php the_field("date"); ?>             					
                                                </div>
                  					
                  					<div class="sermons-media">

                  					<?php if (get_field("message_audio")) { ?>
                  					<a href="<?php the_field("message_audio"); ?>"><i class="icon icon-headphones"></i></a><?php } ?>
                  					
                  					<?php if (get_field("message_audio1")) { 
                                                           
                                                      $audiosource = get_field("message_audio");
                                                           
                                                      $sermonplayer = array(
                                                            'src'      =>  $audiosource,
                                                            'preload' => 'none'
                                                            );

                                                      echo wp_audio_shortcode( $sermonplayer );

                                                } ?>
                  					
                  					<?php if (get_field("message_vimeo_link")) { ?><a href="http://player.vimeo.com/video/<?php the_field("message_vimeo_link"); ?>?title=0&amp;byline=0&amp;portrait=0&amp;autoplay=1" target="_blank"><i class="icon icon-youtube-play"></i></a><?php } ?>
                  					
                  					<?php
                  					$cc = get_the_content();
                  					if($cc != '') { ?>
                  						<a href="<?php the_permalink(); ?>"><i class="icon icon-link"></i></a>
                  					<?php } else { ?>
                  					
                  					<?php } ?>
                  					
                                                
                  					
                  					       <?php if (get_field("message_discussion_guide")) { ?>
                  			                   <a href="<?php the_field("message_discussion_guide"); ?>" target="_blank"><i class="icon icon-comments"></i></a><?php } ?>

                                                </div>
                                                
                                                <div class="clear">&nbsp;</div>

                  					<?php if (get_field("message_audio")) { ?>

                        		    			<?php 

                                                      $sermonaudio = get_field("message_audio");
                        		    			echo do_shortcode('[audio src="' . $sermonaudio . '"]'); 

                                                      ?>
                        		    		<?php } ?>
                  						   

                                          </div>
                  				<?php endwhile; ?>
                  					
                              
		<?php 
	
	}

}