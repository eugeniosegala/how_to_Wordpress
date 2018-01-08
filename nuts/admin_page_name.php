<?php

// CHANGE NAME ADMIN PAGE

function my_admin_title($admin_title, $title)
{
    return get_bloginfo('name').' &bull; '.$title;
}

add_filter('admin_title', 'my_admin_title', 10, 2);

?>
