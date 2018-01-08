<?php

function insert_author() {

    echo '<meta name="author" content="Eugenio Segala">\n';

}

/* Action Hook */
add_action( 'wp_head', 'insert_author' );

?>
