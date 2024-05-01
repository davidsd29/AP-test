<?php
defined('ABSPATH') || exit('Forbidden');

$args = [
    'labels' => [
        'name'          => __('Bestuur', '_SBB'),
        'singular_name' => __('bestuurs lid', '_SBB'),
    ],

    'menu_icon'     => fontawesomeBase64('far fa-user-tie'),
    'menu_position' => 22,

    'public'      => true,
    'has_archive' => false,
    'supports'    => ['title', 'editor', 'thumbnail'],
    'rewrite' => [
        'slug' => (site_url('', 'relative') === '/en') ? 'board' : 'bestuur'
    ],
    'show_in_rest' => true,
];

register_post_type('bestuur', $args);

