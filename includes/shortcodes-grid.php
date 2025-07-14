<?php
// [grid] and [col] shortcode for simple layout
add_shortcode('grid', function ($atts, $content = '') {
    return '<div class="simple-grid">' . do_shortcode($content) . '</div>';
});

add_shortcode('col', function ($atts, $content = '') {
    return '<div class="simple-col">' . do_shortcode($content) . '</div>';
});
