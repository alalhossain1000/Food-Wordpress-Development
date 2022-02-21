<?php

function menu_shortcode($one,$two){
    $menu_atts = shortcode_atts(array(
                'cat_name'  => '',
                'food_img'  => '',
                'food_title'  => '',
                'min_price'  => '',
                'max_price'  => '',
                'food_pac'  => '',
                
             
    ), $one, 'menu');
   ob_start();
   ?>
   <div class="wrap-col">
            <h3><?php echo $menu_atts['cat_name'] ?></h3>
            <?php 
               $food_data = vc_param_group_parse_atts($menu_atts['food_pac']);
           
               foreach( $food_data as $single_data ):
            ?>
            <div class="post">
                    <a href="#"><img src="<?php echo wp_get_attachment_image_url( $single_data['food_img'] )?>"/></a>
                    <div class="wrapper">
                      <h5><a href="#"><?php echo $single_data['food_title'] ?></a></h5>
                      <span>$<?php echo $single_data['min_price'] ?> - $<?php echo $single_data['max_price'] ?></span>
                    </div>
            </div>
           <?php endforeach ?>
    </div>          
			
   <?php
   return ob_get_clean();
}

add_shortcode('menu', 'menu_shortcode');
vc_map(array(
    'base'   => 'menu',
    'name'   => 'Food Menu',
    'category' => 'Zitalyfood',
    'icon'     => get_theme_file_uri().'/images/menu.png',
    'params'   =>array(
        array(
            'param_name'  => 'cat_name',
            'heading'     => 'Type Category Name ',
            'type'        => 'textfield',
        ),
        array(
            'param_name'  => 'food_pac',
            'heading'     => 'Add New',
            'type'        => 'param_group',
            'params'      =>array(
                        array(
                'param_name'  => 'food_img',
                'heading'     => 'Food Image',
                'type'        => 'attach_image',
                    ),
                    array(
                'param_name'  => 'food_title',
                'heading'     => 'Food Name',
                'type'        => 'textfield',
                    ),
                    array(
                'param_name'  => 'min_price',
                'heading'     => 'Food Min Price',
                'type'        => 'textfield',
                    ),
                 array(
                'param_name'  => 'max_price',
                'heading'     => 'Food Max Price',
                'type'        => 'textfield',
                    ),
                 
            ),
        ),
        
        
        
    ),
    
));

?>

