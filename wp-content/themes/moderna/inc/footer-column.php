<?php 
function moderna_widgets_init()
{
    register_sidebar(
        array(
            'name' => esc_html__('Sidebar', 'moderna'),
            'id' => 'sidebar-1',
            'description' => esc_html__('Add widgets here.', 'moderna'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
        ));

    register_sidebar(
        array(
            'name' => __('Footer column 1', 'textdomain'),
            'id' => 'sidebar-2',
            'description' => __('pages.', 'textdomain'),
            'before_widget' => '<ul id="%1$s" class="link-list">',
            'after_widget' => '</ul>',
            'before_title' => '<h4 class="widgetheading">',
            'after_title' => '</h4>',
            'class' => '',
        ));

    register_sidebar(
            array(
                'name' => __('Footer column 2', 'textdomain'),
                'id' => 'sidebar-3',
                'description' => __('pages.', 'textdomain'),
                'before_widget' => '<ul id="%1$s" class="link-list">',
                'after_widget' => '</ul>',
                'before_title' => '<h4 class="widgetheading">',
                'after_title' => '</h4>',
                'class' => '',
            ));

     register_sidebar(
                array(
                    'name' => __('Footer column 3', 'textdomain'),
                    'id' => 'sidebar-4',
                    'description' => __('pages.', 'textdomain'),
                    'before_widget' => '<ul id="%1$s" class="link-list">',
                    'after_widget' => '</ul>',
                    'before_title' => '<h4 class="widgetheading">',
                    'after_title' => '</h4>',
                    'class' => '',
                ));
    
      register_sidebar(
                    array(
                        'name' => __('Footer column 4', 'textdomain'),
                        'id' => 'sidebar-5',
                        'description' => __('pages.', 'textdomain'),
                        'before_widget' => '<ul id="%1$s" class="link-list">',
                        'after_widget' => '</ul>',
                        'before_title' => '<h4 class="widgetheading">',
                        'after_title' => '</h4>',
                        'class' => '',
                    ));

                    register_sidebar(
                        array(
                            'name' => __('Categories', 'textdomain'),
                            'id' => 'sidebar-6',
                            'description' => __('pages.', 'textdomain'),
                            'before_widget' => '<ul id="%1$s" class="cat">',
                            'after_widget' => '</ul>',
                            'before_title' => '<h5 class="widgetheading">',
                            'after_title' => '</h5>',
                            'class' => '',
                        ));

                        register_sidebar(
                            array(
                                'name' => __('Popular Tag', 'textdomain'),
                                'id' => 'sidebar-7',
                                'description' => __('pages.', 'textdomain'),
                                'before_widget' => '<ul id="%1$s" class="tags">',
                                'after_widget' => '</ul>',
                                'before_tags' => '<h5 class="widgetheading">',
                                'after_tags' => '</h5>',
                                //'class' => 'tags',
                            ));
    

}
add_action('widgets_init', 'moderna_widgets_init');


; ?>