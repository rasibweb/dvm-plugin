<?php

/**
 * Actions 
 */

function dvm_footer_text(){
    echo '<p>Copyright &copy; ' . date("Y") . ' Devomodo, All Rights Reserved.</p>';
};

add_action( 'wp_footer', 'dvm_footer_text', 20 );

function dvm_meta_tags() {
    if ( is_singular('post') ) {
        echo '<meta property="og:title" content="' . esc_attr( get_the_title() ) . '" />' . "\n";
        $description = get_the_excerpt();
        echo '<meta property="og:description" content="' . esc_attr( $description ) . '" />' . "\n";
    }
}
add_action( 'wp_head', 'dvm_meta_tags', 10 );


/**
 * Filter 
 */
function dvm_emoji_title($title){
    $emoji = '📄';
    
    if ( is_singular('post') ) {
        return $emoji . ' ' . $title;
    }
    return $title;
}

add_filter('the_title', 'dvm_emoji_title');


function dvm_exerpt_length($excerpt){
    return 20;
}
add_filter('excerpt_length', 'dvm_exerpt_length', 999);

