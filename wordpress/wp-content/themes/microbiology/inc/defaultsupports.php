<?php
add_theme_support('post-formats',array('aside','audio','video'));
add_theme_support('post-thumbnails');
add_theme_support('custom-background',array('default-color' => '','default-image'=> '',));
add_image_size( 'slide-image', 850, 400, true ); //(cropped)