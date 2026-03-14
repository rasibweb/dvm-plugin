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



function dvm_magicwp_shortcode($atts) {
    // Extract and merge attributes with defaults
    if (!empty($atts)) {
        $atts = shortcode_atts(array(
            'label' => 'Button Label',
            'link' => 'http://localhost/testwp/'
        ), $atts, 'DVM_MAGICWP');
    } else {
        $atts = NULL;
    }

    // Start output buffering
    ob_start();

    // Your shortcode logic here
    
    echo '<div class="dvm-magicwp-shortcode">';
        if (!empty($atts)) {
            echo '<a href="' . esc_url($atts['link']) . '" class="dvm-magicwp-button">' . esc_html($atts['label']) . '</a>';
        } else {
            echo '<p>No attributes provided. Please add link and label to the shortcode.</p>';
        }
    echo '</div>';
    

    // Return the buffered content
    return ob_get_clean();
}
add_shortcode('DVM_MAGICWP', 'dvm_magicwp_shortcode');

// Usage example:
// [DVM_MAGICWP attr="value"]

/**
 * Project Meta Shortcode
 */

function dvm_project_meta_shortcode($atts){

    $atts = shortcode_atts(array(
        'id' => get_the_ID(),
        'link' => 'http://localhost/testwp/'
    ), $atts, 'DVM_PROJECT_META');

    $project_url = get_post_meta($atts['id'], 'project_url', true);
    $project_completion = get_post_meta($atts['id'], 'project_completion_duration', true);
    $project_cost = get_post_meta($atts['id'], 'project_estimated_cost', true);
    
    $html = '<div class="dvm-project-meta">';
        $html .= '<span>'. esc_html($project_url) . '</span><br>';
        $html .= '<span>'. esc_html($project_completion) . '</span><br>';
        $html .= '<span>'. esc_html($project_cost) . '</span><br>';
    $html .= '</div>';
    return $html;
}
add_shortcode('DVM_PROJECT_META', 'dvm_project_meta_shortcode');