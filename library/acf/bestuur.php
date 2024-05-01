<?php

defined('ABSPATH') || exit('Forbidden');

acf_add_local_field_group([
    'key'    => 'board_settings',
    'title'  => __('Instellingen', '_SBB'),
    'fields' => [
        [
            'key' => 'board_settings_email',
            'label' => __('Email', '_SBB'),
            'type' => 'text',
            'name' => 'email',
        ],
        [
            'key' => 'board_settings_linkedin',
            'label' => __('Linkedin', '_SBB'),
            'type' => 'link',
            'name' => 'linkedin',
        ],
        [
            'key' => 'board_settings_last_name',
            'label' => __('Achternaam', '_SBB'),
            'type' => 'text',
            'name' => 'last_name',
        ],
        [
            'key' => 'board_settings_phone',
            'label' => __('Telefoonnummer', '_SBB'),
            'type' => 'text',
            'name' => 'phone',
        ],
        [
            'key' => 'board_settings_mobile',
            'label' => __('Mobiele nummer', '_SBB'),
            'type' => 'text',
            'name' => 'mobile',
        ],
        [
            'key' => 'board_settings_hide_overview',
            'label' => __('Verberg deze persoon op de overzichts pagina.', '_SBB'),
            'type' => 'true_false',
            'name' => 'hide_overview',
            'ui' => true,
            'default_value' => false,
        ],
    ],
    'position' => 'side',
    'location' => [
        [
            [
                'param'    => 'post_type',
                'operator' => '==',
                'value'    => 'bestuur',
            ],
        ],
    ],
]);
