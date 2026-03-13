<?php 
// Basic Shortcode Example
function dvm_test_shortcode() {
    return 'This is a TEST Shortcode!';
}
add_shortcode('DVM_TEST', 'dvm_test_shortcode');


// Enclosing Shortcode Example
function dvm_enclosing_shortcode($attr, $content) {
    $html = '<a href="http://localhost/testwp/">' . $content . '</a>';
    return $html;
} 
add_shortcode('DVM_ENCLOSING', 'dvm_enclosing_shortcode');

// Enclosing Shortcode Example
function dvm_parameters_shortcode($attr = array()) {
    $attr = shortcode_atts(array(
        'url' => 'http://localhost/testwp/',
        'label' => 'Click Here',
    ), $attr);

    $html = '<a href="'. esc_url($attr['url']).'">' . esc_html($attr['label']) . '</a>';
    return $html;
} 
add_shortcode('DVM_PARAMETERS', 'dvm_parameters_shortcode');