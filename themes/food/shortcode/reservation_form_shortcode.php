<?php

function reservation_form_shortcode($one,$two){
    $reservation_form_atts = shortcode_atts(array(
              
        
    ), $one, 'reservation_form');
   ob_start();
   ?>
<div class="wrap-col">
                <div class="contact">
                        <div id="contact_form">
                            
                       
                                <form name="contact" id="contact" method="post" action="#">
                                        <label class="row">
                                                <div class="col-1-2">
                                                        <div class="wrap-col">
                                                                <input type="text" name="name" id="name" placeholder="Enter name"  />
                                                        </div>
                                                </div>
                                                <div class="col-1-2">
                                                        <div class="wrap-col">
                                                                <input type="email" name="email" id="email" placeholder="Enter email"  />
                                                        </div>
                                                </div>
                                        </label>
                                        <label class="row">
                                                <div class="col-2-4">
                                                        <div class="wrap-col">
                                                        <input type="text" name="subject" id="subject" placeholder="Subject"  />
                                                        </div>
                                                </div>
                                                <div class="col-1-4">
                                                        <div class="wrap-col">
                                                        <input type="date"  name="date" id="date" placeholder="Date"/>
                                                        </div>
                                                </div>
                                                <div class="col-1-4">
                                                        <div class="wrap-col">
                                                        <input type="time"  name="time" id="time" placeholder="Time"/>
                                                        </div>
                                                </div>											
                                        </label>
                                        <label class="row">
                                                <div class="wrap-col">
                                                        <textarea name="message" id="message" class="form-control" rows="4" cols="25" 
                                                        placeholder="Message"></textarea>
                                                </div>
                                        </label>
                                        <center><input class="sendButton" type="submit" name="submit" value="Submit"></center>
                                </form>                            
                        </div>
                </div>
        </div>			
   <?php
   return ob_get_clean();
}

add_shortcode('reservation_form', 'reservation_form_shortcode');
vc_map(array(
    'base'   => 'reservation_form',
    'name'   => 'Reservation Form',
    'category' => 'Zitalyfood',
    'icon'     => get_theme_file_uri().'/images/reservation.png',
    
    
));

?>

