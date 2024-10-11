<div class="property_details_type1_wrapper">
    <?php
    $property_size      =   wpestate_get_converted_measure( $post->ID, 'property_size' );
    $property_rooms     =   get_post_meta($post->ID,'property_rooms',true);
    $property_bathrooms =   get_post_meta($post->ID,'property_bathrooms',true);
    $prop_id            =   $post->ID;  
   
    if($property_rooms!=''  && $property_rooms!=0){
        print ' <span class="property_details_type1_rooms"><span class="property_details_type1_value">'.$property_rooms.'</span>'.__('Rooms','wpresidence').'</span>';
    }

    if($property_bathrooms!=''  && $property_bathrooms!=0){
        print '<span class="property_details_type1_baths"><span class="property_details_type1_value">'.$property_bathrooms.'</span>'.__('Baths','wpresidence').'</span>';
    }
    
    
    if($prop_id !=''  && $prop_id!=0 ){
        print ' <span class="property_details_type1_id">'.__('ID','wpresidence').' <span class="property_details_type1_value">'.$prop_id.'</span></span>';
    }

    if($property_size!=''  && $property_size!=0 ){
        print ' <span class="property_details_type1_size"><span class="property_details_type1_value">'.$property_size.'</span>';
    }

    ?>           

</div>
        