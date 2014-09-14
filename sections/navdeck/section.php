<?php
/*
	Section: NavDeck
	Author: PageLines
	Author URI: http://www.pagelines.com
	Description: This is a feature packed content navigator.
	Class Name: NavDeck
	Filter: format, dual-width
*/

class NavDeck extends PageLinesSection {


	function section_styles(){


	}

	function section_persistent(){

	}

	function section_opts(){
		
	}
	

	
	function section_template(  ) {
		

		?>
		<div class="main_nav_container">
				<ul class="main_nav">
					<li>
						<div class="nav_dropdown_wrap">
							<a class="main_nav_link" href="#">About us<br />
								<span>our heart, our story</span>
							</a>
					      <div class="nav_dropdown">
							   <div class="nav_triangle_1"></div>
						     <div class="nav_content">
						      <div class="nav_sub_links_1 home_nav_1">
						        <ul>
						        	<li><a href="#">Our Heart, Our Story
						        	<li><a href="#">Meet the Team</a></li>
						        	<li><a href="#">What to Expect</a></li>
						        	<li><a href="#">Who we Are</a></li>
						        </ul>
					        </div>
					        <div class="image_large">
					        	<a href="#"><img src="http://gatewayscottsdale.tv/views/site/images/welcome_dropdown.jpg" alt="Image large" /></a>
					        </div>
					        <div class="clear"></div>
						     </div>
							</div>
						</div>
					</li>
					<li>
						<div class="nav_dropdown_wrap">
							<a class="main_nav_link" href="#">Teams<br />
								<span>ministry involvement</span>
							</a>
					      <div class="nav_dropdown">
						    <div class="nav_triangle_2"></div>
						     <div class="nav_content">
					        <div class="nav_sub_links_2 home_nav_2">
										<ul>
											<li><a href="#">Worship</a></li>
											<li><a href="#">Evenlife Kids</a></li>
											<li><a href="#">Frontline</a></li>
											<li><a href="#">Prime Timers</a></li>
											<li><a href="#">Masters Commission</a></li>
										</ul>
									</div>
									<div class="image_semi_large">
					        	<a href="http://gatewayscottsdale.tv/about-us/"><img src="http://gatewayscottsdale.tv/views/site/images/glad_dropdown.jpg" alt="Image large" /></a>
									</div>
									<div class="image_small">
					        	<img src="http://gatewayscottsdale.tv/views/site/images/kids_dropdown.jpg" alt="Image large" />
									</div>
					        <div class="clear"></div>
						     </div>
							</div>
						</div>
				  </li>
					<li>
						<div class="nav_dropdown_wrap">
							<a class="main_nav_link" href="http://www.sandiegofca.org/clubteams">FCA Revolution <br />
								<span>girls basketball club</span>
							</a>
				      <div class="nav_dropdown">
						    <div class="nav_triangle_3"></div>
					      <div class="nav_content">
								<div class="nav_sub_links_3 home_nav_3">
					        <!-- <ul>
					        	<li><a href="#">What is FCA Revolution</a></li>
					        	<li><a href="#">How to Join</a></li>
					        	<li><a href="#">How to partner</a></li>
					        	<li><a href="#">Player Profiles</a></li>
					        </ul> -->
				        </div>
									<div class="image_semi_large_2">
					        	<a href="#"><img src="http://gatewayscottsdale.tv/views/site/images/know_dropdown.jpg" alt="Image large" /></a>
									</div>
									<div class="image_small_2">
					        	<img src="http://gatewayscottsdale.tv/views/site/images/worship_dropdown.jpg" alt="Image large" />
									</div>
				        <div class="clear"></div>
					     </div>
							</div>
						</div>						
				  </li>
					<li class="last">
						<div class="nav_dropdown_wrap last">
						<a class="main_nav_link" href="#">Testimony<br />
								<span>praise him</span>
						</a>
				      <div class="nav_dropdown">
			    	    <div class="nav_triangle_5"></div>
					     <div class="nav_content">
				        <div class="nav_sub_links_4 home_nav_4">
					        <ul>
										<li><a href="#">What is a Testimony</a></li>
										<li><a href="#">Submit a Testimony</a></li>
										<li><a href="#">Look at Testimonies</a></li>
					        </ul>
				        </div>
					        <div class="image_large_2">
					        	<a href="#"><img src="http://gatewayscottsdale.tv/views/site/images/tithing_dropdown.jpg" alt="Image large" /></a>
					        </div>
				        <div class="clear"></div>
					     </div>
							</div>
						</div>						
					</li>
					<div class="clear"></div>
				</ul>
				<div class="clear"></div>
			</div> <!-- main_nav_container -->	
		<?php 
	}




}

