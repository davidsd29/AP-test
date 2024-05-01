<?php
defined('ABSPATH') || exit('Forbidden');

$args = [
    'labels' => [
        'name'          => __('Publicatie & blogs', '_SBB'),
        'singular_name' => __('Publicatie & blogs', '_SBB'),
    ],

    'menu_icon'     => fontawesomeBase64('far fa-newspaper'),
    'menu_position' => 22,

    'public'      => true,
    'has_archive' => false,
    'supports'    => ['title', 'editor', 'thumbnail', 'excerpt'],
    'rewrite' => [
        'slug' => (site_url('', 'relative') === '/en') ? 'publication-blogs' : 'publicatie-blogs'
    ],
    'show_in_rest' => true,
];

register_post_type('nieuws', $args);

$argsNews = [
    'labels' => [
        'name'          => __('Nieuws', '_SBB'),
        'singular_name' => __('Nieuws', '_SBB'),
    ],

    'menu_icon'     => fontawesomeBase64('far fa-newspaper'),
    'menu_position' => 22,

    'public'      => true,
    'has_archive' => false,
    'supports'    => ['title', 'editor', 'thumbnail', 'excerpt'],
    'rewrite' => [
        'slug' => (site_url('', 'relative') === '/en') ? 'news' : 'nieuws'
    ],
    'show_in_rest' => true,
];

register_post_type('nieuws-artikel', $argsNews);
