<?php
/*
Plugin Name: Custom Testimonial Block
Version: 1.0
*/
function custom_testimonial_block($atts) {
    // Shortcode attributes
    $atts = shortcode_atts(array(
        'test1'     => 'test1',
        'content1'  => 'content1',
        'content2'  => 'content2'
    ), $atts);

    // Load styling
    wp_register_style(
        'custom-testimonial-block-style',
        plugins_url('assets/style.css', __FILE__),
        array(),
        filemtime(plugin_dir_path(__FILE__) . 'assets/style.css')
    );

    // Process shortcode content
    $output = '<div class="custom-block">';
    $output .= 'Parameter 1: ' . esc_html($atts['test1']) . '<br>';
    $output .= 'Parameter 2: ' . esc_html($atts['content1']) . '<br>';
    $output .= 'Parameter 2: ' . esc_html($atts['content2']);
    $output .= '</div>';

    return $output;
}
add_shortcode('custom_block', 'custom_testimonial_block');

?>
