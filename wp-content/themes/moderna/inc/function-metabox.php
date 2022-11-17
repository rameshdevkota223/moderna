<?php 
/**
* Register Metabox
*/
function prefix_add_meta_boxes(){
    add_meta_box(
        'moderna-card',      // Unique ID
        esc_html__( 'Icons', 'Icons' ),    // Title
        'wpdocs_my_display_callback',   // Callback function
        'card',         // Admin page (or post type)
        'normal',         // Context
        'default'         // Priority
      );
}
add_action('add_meta_boxes', 'prefix_add_meta_boxes' );



/**
 * Meta box display callback.
 *
 * @param WP_Post $post Current post object.
 */
function wpdocs_my_display_callback( $post ) {
    wp_nonce_field( 'custom_nonce_action', 'wp_owt_cpt_nonce' );
	?>

    <div>
        <label for="">Icon Name:</label>
        <?php 
           $icon_name=get_post_meta($post->ID,"card_icon_name", true);
        ; ?>
        <input type="text" name="iconName" value="<?php echo $icon_name; ?>">
    </div>
    <?php
}

/**
 * Save meta box content.
 *
 * @param int $post_id Post ID
 */

add_action( 'save_post', 'wpdocs_save_meta_box',10,2);

function wpdocs_save_meta_box($post_id, $post){
    
   if (!isset($_POST['wp_owt_cpt_nonce']) || !wp_verify_nonce($_POST['wp_owt_cpt_nonce'],'custom_nonce_action')){
         return $post_id;
   }

   $post_slug ="card";
   if ($post_slug!==$post->post_type){
    return;
   }

   $pub_name ='';
   if (isset($_POST['iconName'])) {
      $pub_name = sanitize_text_field($_POST['iconName']);
   }else{
    $pub_name='';
   }
   update_post_meta($post_id,"card_icon_name",$pub_name);

}




 ?>

