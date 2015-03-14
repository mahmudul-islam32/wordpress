<?php

 

get_header(); ?>
 
 <div class="mainmenu">
          <div class="container">
              <div class="row">
                  <div class="col-md-8">
                       <div id="cssmenu">
                          
                      <?php wp_nav_menu(array(

                        'theme_location' =>'main_menu',
                        'menu_id' =>'cssmenu',
                        'fallback_cb' =>'microbiology_fallback_leftmenu',
                        'container'  =>'',

                         ))
                      
                      
                      
                      ?>
               
                      </div>
                   
                     </div>
                  <div class="col-md-4">
                      <div class="mainmenu-right">
                  
                      <?php wp_nav_menu(array(

                         'theme_location' =>'right_menu',
                          'menu_class' =>'mainmenu-right',

                       'fallback_cb' =>'microbiology_fallback_rightmenu',

                         ))
                      
                      
                      
                      ?>
                      </div>
                  
                  </div>
                    
              
              
              
              </div>
          
          
          </div>
      
      
      
      </div>
	
	<!-- BEGIN INTRO -->
	<div class="container">
              <div class="row">
                  <div class="col-md-12">
					<?php if(have_posts()) : ?><?php while(have_posts())  : the_post(); ?>
						<div class="post" id="post-<?php the_ID(); ?>">
															
							<div id="post-title" class="clearfix full">
								<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>			
							</div> <!-- end div .post-title -->
							
							<div class="entry">
							
								<?php the_content(); ?> 
								
								<div class="space"></div>
								
								<?php get_template_part( 'postmeta' ); // Post Meta (postmeta.php) ?>
								<?php wp_link_pages(); ?> 
								<!-- <?php trackback_rdf(); ?> -->
							
							</div> <!-- end div .entry -->
							
							<?php comments_template( '', true ); ?>								
								
						</div> <!-- end div .post -->

					<?php endwhile; ?>

					<?php else : ?>
						<div class="post">
							<h3><?php _e('404 Error&#58; Not Found', 'brightpage'); ?></h3>
						</div>
					<?php endif; ?>
			      										
				</div> <!-- end div .in30 -->
			</div> 
</div>
			

<?php wp_footer(); ?>

<?php get_footer();?>


