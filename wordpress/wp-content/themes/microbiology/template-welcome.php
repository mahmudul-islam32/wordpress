<?php get_header();?>
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
      <div class="slider">
        <div class="container">
            <div class="row">
                  <div class="fix slider">
                <div class="col-md-12">
                
                 
     <div class="slider-wrapper theme-default">
   <div class="nivoSlider" id="slider">
<img src="<?php echo get_template_directory_uri();?>/images/mahmud.jpg" alt=""/>
<img src="<?php echo get_template_directory_uri();?>/images/mahmud1.jpg" alt=""/>
<img src="<?php echo get_template_directory_uri();?>/images/mahmud2.jpg" alt=""/>
<img src="<?php echo get_template_directory_uri();?>/images/mahmud3.jpg" alt="" title= "#htmlcaption"/>
</div>
 <div id="htmlcaption" class="nivo-html-caption">
                <p>this is rohan</p>
    </div>
</div>
                      </div>        
                
                </div>
            
            
            </div>
      
      </div>
      </div>
      <div class="maincontent">
      <div class="container">
          
          <div class="row">
              
              <div class="col-md-6">
                  <h3>Top news</h3>
                  
             <a href=""><h4>Traumatic forces</h4></a>

<p>Stanford researchers measure concussion forces in greatest detail yet.
</p>
              <img src="<?php echo get_template_directory_uri();?>/images/m1.jpg">              
             
<a href=""><h4>Traumatic forces</h4></a>

  <p>Stanford researchers measure concussion forces in greatest detail yet.
          </p>
              <img src="<?php echo get_template_directory_uri();?>/images/m2.jpg">              
              </div>
              <div class="col-md-6">
                  <h3>Trending research news</h3>
                  
         <a href=""><h4>Traumatic forces</h4></a>

   <p>Stanford researchers measure concussion forces in greatest detail yet.
  </p>
              <img src="<?php echo get_template_directory_uri();?>/images/m3.jpg">
                  <h3>More News</h3>
                  
                  <a href=""><h4>Traumatic forces</h4></a>
                  <a href=""><h4>Traumatic forces</h4></a>
                  <a href=""><h4>Traumatic forces</h4></a>
              </div>
          
          </div>
      
      </div>
      <?php get_footer();?>
             <script src="<?php echo get_template_directory_uri(); ?>/https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
 <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
 <script type ="/text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.9.0.min.js"></script>
<script type ="/text/javascript"  src="<?php echo get_template_directory_uri(); ?>/js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript">
       jQuery(window).load(function() {
        jQuery('#slider').nivoSlider();
    });
    </script>

          <?php  wp_footer(); ?>
  </body>
</html>