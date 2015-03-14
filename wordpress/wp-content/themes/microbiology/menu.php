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