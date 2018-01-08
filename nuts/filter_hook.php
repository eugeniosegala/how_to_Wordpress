<?php

function signature( $content ) {

    $content .= 'Powered by Itaka.it' . "\n";
    return $content;

}

/* Filter Hook*/
add_filter( 'signature', 'am_inserisci_firma' );

?>
