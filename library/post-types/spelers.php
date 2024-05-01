<?php
defined('ABSPATH') || exit('Forbidden');

$args = [
    'labels' => [
        'name'          => __('Spelers', '_SBB'),
        'singular_name' => __('speler', '_SBB'),
    ],

    'menu_icon'     => fontawesomeBase64('fas fa-person'),
    'menu_position' => 22,

    'public'      => true,
    'has_archive' => false,
    'supports'    => ['title', 'editor', 'thumbnail'],
    'rewrite' => [
        'slug' => (site_url('', 'relative') === '/en') ? 'players' : 'spelers'
    ],
    'show_in_rest' => true,
];

register_post_type('spelers', $args);

