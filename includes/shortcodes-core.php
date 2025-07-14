<?php
// [current_year]
add_shortcode('current_year', function () {
    return date('Y');
});

// [br count="2"]
add_shortcode('br', function ($atts) {
    $count = isset($atts['count']) ? intval($atts['count']) : 1;
    return str_repeat('<br>', $count);
});

// [button url="https://example.com" text="Click Me"]
add_shortcode('button', function ($atts) {
    $a = shortcode_atts([
        'url' => '#',
        'text' => 'Click',
        'target' => '_self',
    ], $atts);
    return '<a href="' . esc_url($a['url']) . '" class="simple-btn" target="' . esc_attr($a['target']) . '">' . esc_html($a['text']) . '</a>';
});

// [highlight text="Important" color="yellow"]
add_shortcode('highlight', function ($atts) {
    $a = shortcode_atts([
        'text' => '',
        'color' => 'yellow',
    ], $atts);
    return '<span style="background-color:' . esc_attr($a['color']) . ';">' . esc_html($a['text']) . '</span>';
});

// [divider type="dashed"]
add_shortcode('divider', function ($atts) {
    $a = shortcode_atts(['type' => 'solid'], $atts);
    return '<hr style="border-top: 2px ' . esc_attr($a['type']) . ' #ccc;" />';
});

// [icon name="check" color="#000" size="16px"]
add_shortcode('icon', function ($atts) {
    $a = shortcode_atts([
        'name' => 'check',
        'color' => '#000',
        'size' => '16px'
    ], $atts);
    return '<i class="fa fa-' . esc_attr($a['name']) . '" style="color:' . esc_attr($a['color']) . '; font-size:' . esc_attr($a['size']) . ';"></i>';
});

// [youtube id="dQw4w9WgXcQ"]
add_shortcode('youtube', function ($atts) {
    $a = shortcode_atts([
        'id' => '',
        'width' => '560',
        'height' => '315'
    ], $atts);
    return '<div class="youtube-wrapper"><iframe width="' . esc_attr($a['width']) . '" height="' . esc_attr($a['height']) . '" src="https://www.youtube.com/embed/' . esc_attr($a['id']) . '" frameborder="0" allowfullscreen></iframe></div>';
});

// [note type="info"]Content[/note]
add_shortcode('note', function ($atts, $content = '') {
    $a = shortcode_atts(['type' => 'info'], $atts);
    return '<div class="note note-' . esc_attr($a['type']) . '">' . do_shortcode($content) . '</div>';
});
