<?php

function contact_box_shortcode($one,$two){
    $contact_box_atts = shortcode_atts(array(
                'contact_address'  => '',
                'mon_fri'          => '',
                'sat_sun'          => '',
                'email'            => '',
                'phone'            => '',
                'fax'              => '',
             
    ), $one, 'contact_box');
   ob_start();
   ?>
            
<div class="wrap-col">
        <h3>Address</h3>
        <p><?php echo $contact_box_atts['contact_address'] ?></p><br/>
        <h3>Hours Of Operation</h3>
        <p><span>MONDAY-FRIDAY: </span><?php echo $contact_box_atts['sat_sun'] ?></p>
        <p><span>SATURDAY-SUNDAY: </span><?php echo $contact_box_atts['contact_address'] ?></p><br/>
        <h3>Contact Info</h3>
        <p><span>EMAIL ADDRESS: </span><?php echo $contact_box_atts['email'] ?></p>
        <p><span>TELEPHONE: </span><?php echo $contact_box_atts['phone'] ?></p>
        <p><span>FAX: </span><?php echo $contact_box_atts['fax'] ?></p>
</div>
					
				
   <?php
   return ob_get_clean();
}

add_shortcode('contact_box', 'contact_box_shortcode');
vc_map(array(
    'base'   => 'contact_box',
    'name'   => 'Contact Box',
    'category' => 'Zitalyfood',
    'icon'     => get_theme_file_uri().'/images/contact_box.png',
    'params'   =>array(
        array(
            'param_name'  => 'contact_address',
            'heading'     => 'Your Address',
            'type'        => 'textarea',
        ),
        array(
            'param_name'  => 'mon_fri',
            'heading'     => 'Mon-Friday Warking Time',
            'type'        => 'textfield',
        ),
        array(
            'param_name'  => 'sat_sun',
            'heading'     => 'Sat-Sunday Warking Time',
            'type'        => 'textfield',
        ),
        array(
            'param_name'  => 'email',
            'heading'     => 'Email',
            'type'        => 'textfield',
        ),
        array(
            'param_name'  => 'phone',
            'heading'     => 'Phone',
            'type'        => 'textfield',
        ),
        array(
            'param_name'  => 'fax',
            'heading'     => 'Fax',
            'type'        => 'textfield',
        ),
        
        
        
    ),
    
));

?>

