<?php

defined('ABSPATH') || exit('Forbidden');

acf_add_local_field_group([
    'key'    => 'events_settings',
    'title'  => __('Evenementen instellingen', '_SBB'),
    'fields' => [
        [
            'key' => 'event_settings_date',
            'label' => __('Datum van het evenement', '_SBB'),
            'type' => 'date_picker',
            'name' => 'event_date',
            'display_format' => 'd/m/Y',
            'return_format' => 'Y-m-d',
        ],

        [
            'key' => 'event_settings_starttime',
            'label' => __('Start tijd van het toornooi', '_SBB'),
            'type' => 'text',
            'name' => 'start_time',
            'wrapper' => [
                'width' => '50%',
            ],
        ],

        [
            'key' => 'event_settings_endtime',
            'label' => __('Eind tijd van het toornooi', '_SBB'),
            'type' => 'text',
            'name' => 'end_time',
            'wrapper' => [
                'width' => '50%',
            ],
        ],

        [
            'key' => 'event_settings_location',
            'label' => __('Locatie van het toornooi', '_SBB'),
            'type' => 'text',
            'name' => 'location',
        ],
    ],
    'location' => [
        [
            [
                'param'    => 'post_type',
                'operator' => '==',
                'value'    => 'evenementen',
            ],
        ],
    ],
]);
