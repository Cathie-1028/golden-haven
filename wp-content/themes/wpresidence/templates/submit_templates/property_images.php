<?php
global $action;
global $edit_id;
global $wpestate_submission_page_fields;
global $attchs;
$images='';
$thumbid='';
$attachid='';
$use_floor_plans                =   get_post_meta($edit_id, 'use_floor_plans', true);



if(   is_array($wpestate_submission_page_fields) && in_array('attachid', $wpestate_submission_page_fields)) {

    if(is_array($attchs)){
        $attachid= implode(',', $attchs);
    }

    if ($action=='edit'){
        wp_reset_postdata();
        wp_reset_query();
        $max_images             =   intval   ( wpresidence_get_option('wp_estate_prop_image_number','') );

        $current_user           =   wp_get_current_user();
        $userID                 =   $current_user->ID;
        $parent_userID          =   wpestate_check_for_agency($userID);
        $paid_submission_status =   esc_html ( wpresidence_get_option('wp_estate_paid_submission','') );
        if( $paid_submission_status == 'membership'){
            $user_pack              =   get_the_author_meta( 'package_id' , $parent_userID );
                $max_images         =   get_post_meta($user_pack, 'pack_image_included', true);
        }

        if($max_images==0){
            $max_images=100;
        }

        $arguments = array(
            'post_type'         =>  'attachment',
            'posts_per_page'    =>  $max_images,
            'page'              =>  1,
            'post_status'       =>  'any',
            'post_parent'       =>  $edit_id,
            'orderby'           =>  'menu_order',
            'order'             =>  'ASC'
        );


        $post_attachments   = get_posts($arguments);
        $post_thumbnail_id  = $thumbid = get_post_thumbnail_id( $edit_id );
        $attachid='';
        foreach ($post_attachments as $attachment) {
            $attachid.= ','.$attachment->ID;
        }
    }



    if( isset( $_POST['attachid'] ) ) {
        $attachid = rtrim( $_POST['attachid'],',' );
        $attachid = ltrim( $attachid,',' );
    }

    if(isset($_POST['attachthumb'])){
      $thumbid=intval($_POST['attachthumb']);
    }
?>


<div class="profile-onprofile row">
      <div class="wpestate_dashboard_section_title"><?php esc_html_e('Listing Media','wpresidence');?></div>

                <div class="submit_container">
                    <div id="upload-container">
                        <div id="aaiu-upload-container">
                            <div id="aaiu-upload-imagelist">
                                <ul id="aaiu-ul-list" class="aaiu-upload-list"></ul>
                            </div>

                            <div id="imagelist">
                                <?php
                                 $ajax_nonce = wp_create_nonce( "wpestate_image_upload" );
                                print'<input type="hidden" id="wpestate_image_upload" value="'.esc_html($ajax_nonce).'" />    ';
                                if($images!=''){
                                    print trim($images);
                                }

//&& $action!='edit'
                                if ( $attachid!='' ){
                                    $attchs=explode(',',$attachid);
                                    $attachid='';

                                    foreach($attchs as $att_id){
                                        if( $att_id!='' && is_numeric($att_id) ){
                                            $attachid .= $att_id.',';
                                            $preview =  wp_get_attachment_image_src($att_id, 'user_picture_profile');

                                            if($preview[0]!=''){
                                                $images .=  '<div class="uploaded_images" data-imageid="'.esc_attr($att_id).'"><img src="'.esc_url($preview[0]).'" alt="'.esc_html__('user image','wpresidence').'" /><i class="far fa-trash-alt"></i>';
                                                if($thumbid==$att_id){
                                                  $images .= '<i class="fa thumber fa-star"></i>';
                                                }
                                            }else{
                                                $images .=  '<div class="uploaded_images" data-imageid="'.esc_attr($att_id).'"><img src="'.get_theme_file_uri('/img/pdf.png').'" alt="'.esc_html__('user image','wpresidence').'" /><i class="far fa-trash-alt"></i>';

                                            }
                                            $images .='</div>';
                                        }
                                    }
                                    print trim($images);
                                }
                            ?>
                            </div>


                    <div id="drag-and-drop" class="rh_drag_and_drop_wrapper ">
                             <div class="drag-drop-msg"><i class="fas fa-cloud-upload-alt"></i><?php esc_html_e('Drag and Drop Images or ', 'wpresidence');?></div>
                             <button id="aaiu-uploader"  class="wpresidence_button wpresidence_success">
                                <?php esc_html_e('Select Media','wpresidence');?>
                            </button>
                    </div>



                            <p class="full_form full_form_image">
                                <?php
                                esc_html_e('* At least 1 image is required for a valid submission.Minimum size is 500/500px.','wpresidence');
                                $current_user           =   wp_get_current_user();
                                $userID                 =   $current_user->ID;
                                $parent_userID          =   wpestate_check_for_agency($userID);

                                $max_images             =   intval   ( wpresidence_get_option('wp_estate_prop_image_number','') );
                                $paid_submission_status =   esc_html ( wpresidence_get_option('wp_estate_paid_submission','') );
                                if( $paid_submission_status == 'membership'){
                                $user_pack              =   get_the_author_meta( 'package_id' , $parent_userID );
                                if($user_pack!=''){
                                    $max_images         =   get_post_meta($user_pack, 'pack_image_included', true);
                                }else{
                                     $max_images        = intval   ( wpresidence_get_option('wp_estate_free_pack_image_included','') );
                                }
                            }

                                if($max_images!=0){
                                    printf( esc_html__(' You can upload maximum %s images','wpresidence'),$max_images);
                                }
                                print '</br>';
                                esc_html_e('** Double click on the image to select featured.','wpresidence');print '</br>';
                                esc_html_e('*** Change images order with Drag & Drop.','wpresidence');print '</br>';
                                esc_html_e('**** PDF files upload supported as well.','wpresidence');print '</br>';
                                esc_html_e('***** Images might take longer to be processed.','wpresidence');print '</br>';?>
                            </p>

                            <input type="hidden" name="attachid" id="attachid" value="<?php echo esc_html($attachid);?>">
                            <input type="hidden" name="attachthumb" id="attachthumb" value="<?php echo esc_html($thumbid);?>">

                        </div>
                </div>


</div>
</div>


<?php }?>
