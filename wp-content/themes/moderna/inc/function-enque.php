<?php /**
 * Enqueue scripts and styles.
 */

function moderna_scripts()
{

    /*
    <!-- css -->
     */
    wp_enqueue_style('moderna-navigation-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), _S_VERSION, "all");
    wp_enqueue_style('moderna-navigation-jquery', get_template_directory_uri() . '/css/fancybox/jquery.fancybox.css', array(), _S_VERSION, "all");
    wp_enqueue_style('moderna-navigation-jcarousel', get_template_directory_uri() . '/css/jcarousel.css', array(), _S_VERSION, "all");
    wp_enqueue_style('moderna-navigation-flexslider', get_template_directory_uri() . '/css/flexslider.css', array(), _S_VERSION, "all");
    wp_enqueue_style('moderna-navigation-style', get_template_directory_uri() . '/css/style.css', array(), _S_VERSION, "all");
    wp_enqueue_style('moderna-navigation-default', get_template_directory_uri() . '/skins/default.css', array(), _S_VERSION, "all");

    wp_enqueue_script('moderna-jquery', get_template_directory_uri() . '/js/jquery.js', array(), _S_VERSION, true);
    wp_enqueue_script('bootstrap-min', get_template_directory_uri() . '/js/bootstrap.min.js', array(), _S_VERSION, true);
    wp_enqueue_script('jquery-fancybox.pack', get_template_directory_uri() . '/js/jquery.fancybox.pack.js', array(), _S_VERSION, true);
    wp_enqueue_script('fancybox-media', get_template_directory_uri() . '/js/jquery.fancybox-media.js', array(), _S_VERSION, true);
    wp_enqueue_script('google-code-prettify', get_template_directory_uri() . '/js/google-code-prettify/prettify.js', array(), _S_VERSION, true);
    wp_enqueue_script('portfolio', get_template_directory_uri() . '/js/portfolio/jquery.quicksand.js', array(), _S_VERSION, true);
    wp_enqueue_script('portfolio-setting', get_template_directory_uri() . '/js/portfolio/setting.js', array(), _S_VERSION, true);
    wp_enqueue_script('jquery-flexslider', get_template_directory_uri() . '/js/jquery.flexslider.js', array(), _S_VERSION, true);
    wp_enqueue_script('animate', get_template_directory_uri() . '/js/animate.js', array(), _S_VERSION, true);
    wp_enqueue_script('custom', get_template_directory_uri() . '/js/custom.js', array(), _S_VERSION, true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'moderna_scripts'); ?>