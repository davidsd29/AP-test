<?php
defined('ABSPATH') || exit('Forbidden');

$args = [
    'labels' => [
        'name'          => __('Teams', '_SBB'),
        'singular_name' => __('team', '_SBB'),
    ],

    'menu_icon'     => fontawesomeBase64('far fa-sitemap'),
    'menu_position' => 22,

    'public'      => true,
    'has_archive' => false,
    'supports'    => ['title', 'editor', 'thumbnail'],
    'rewrite' => [
        'slug' => (site_url('', 'relative') === '/en') ? 'teams' : 'teams'
    ],
    'show_in_rest' => true,
];

register_post_type('teams', $args);
