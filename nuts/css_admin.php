<?php

// CSS ON ADMIN

function my_custom_css() {
  echo '<style>
        body {
          font-size: 22px;
        }
        </style>';
}

add_action('admin_head', 'my_custom_css');

?>
