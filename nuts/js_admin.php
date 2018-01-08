<?php

// JS ADMIN

function custom_admin_js() {

    $url = get_bloginfo('template_directory') . '/js/dem.js';
    echo '"<script type="text/javascript" src="'. $url . '"></script>"';

}

add_action('admin_footer', 'custom_admin_js');

?>
