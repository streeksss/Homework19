
<?php

/*Have Post*/

function deliver() {

    wp_enqueue_style('style', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', 'deliver');


/*Navigation*/


register_nav_menus(array(
    'header' => __('Deliver Head Menu'),
    'second-menu' => __('Second Menu'),
));

