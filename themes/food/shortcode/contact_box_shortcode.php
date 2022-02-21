<?php

function stuff_shortcode($one,$two){
    $stuff_atts = shortcode_atts(array(
                'stuff_image'  => '',
                'stuff_name'  => '',
                'stuff_fb'  => '',
                'stuff_tw'  => '',
                'stuff_li'  => '',
                'stuff_in'  => '',
        
    ), $one, 'stuff');
   ob_start();
   ?>
            <div class="chef">

                    <div class="wrap-col">
                            <div class="zoom-container">
                                    <a href="#">
                                            <img src="<?php echo wp_get_attachment_image_url($stuff_atts['stuff_image'],'full') ?>" />
                                    </a>
                            </div>
                            <h3><?php echo $stuff_atts['stuff_name']?></h3>
                            <ul class="social t-center">
                                    <li><a href="<?php echo $stuff_atts['stuff_fb']?>"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="<?php echo $stuff_atts['stuff_tw']?>"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="<?php echo $stuff_atts['stuff_li']?>"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="<?php echo $stuff_atts['stuff_in']?>"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                    </div>				
             </div>

					
				
   <?php
   return ob_get_clean();
}

add_shortcode('stuff', 'stuff_shortcode');
vc_map(array(
    'base'   => 'stuff',
    'name'   => 'Stuff',
    'category' => 'Zitalyfood',
    'icon'     => get_theme_file_uri().'/images/stuff.png',
    'params'   =>array(
        array(
            'param_name'  => 'stuff_image',
            'heading'     => 'Upload Stuff Image',
            'type'        => 'attach_image',
        ),
        array(
            'param_name'  => 'stuff_name',
            'heading'     => 'Stuff Name',
            'type'        => 'textfield',
        ),
        array(
            'param_name'  => 'stuff_fb',
            'heading'     => 'Facebook',
            'type'        => 'textfield',
        ),
        array(
            'param_name'  => 'stuff_tw',
            'heading'     => 'Twitter',
            'type'        => 'textfield',
        ),
        array(
            'param_name'  => 'stuff_li',
            'heading'     => 'Linkedin',
            'type'        => 'textfield',
        ),
        array(
            'param_name'  => 'stuff_in',
            'heading'     => 'Instagram',
            'type'        => 'textfield',
        ),
    ),
    
));

?>

