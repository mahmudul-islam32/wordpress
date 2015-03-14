<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <!-- Bootstrap -->
       
      

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
 <?php wp_head(); ?>
  </head>
  <body>
      <div class="header">
          <div class="container">
           
              <div class="row">
                   <div class="headermain">
                  <div class=col-md-8>
                      <img src="<?php echo get_template_directory_uri();?>/images/NSTU_Logo.jpg">
                      <h1>Department of Microbiology</h1>
                  
                  </div>
                  </div>
                  <div class="col-md-4">
                  <div class="headerside">
                  <form>
                              <div class="form-group">
   
                              <input type="search" class="form-control" id="searchweb" placeholder="search web or people">
                              </div>
                      </form>
                      </div>
                  
                  </div>
                  
              
              </div>
          
          
          </div>
      
      
      
      
      
      
      </div>