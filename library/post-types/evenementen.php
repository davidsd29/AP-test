<?php
defined('ABSPATH') || exit('Forbidden');

$args = [
    'labels' => [
        'name'          => __('Evenementen', '_SBB'),
        'singular_name' => __('Evenement', '_SBB'),
    ],

    'menu_icon'     => fontawesomeBase64('far fa-calendar-star'),
    'menu_position' => 22,

    'public'      => true,
    'has_archive' => false,
    'supports'    => ['title', 'editor', 'thumbnail', 'excerpt'],
    'rewrite' => [
        'slug' => (site_url('', 'relative') === '/en') ? 'events' : 'evenementen'
    ],

    'show_in_rest' => false,
];

register_post_type('evenementen', $args);
