<?php
return [
    'backend' => [
        'frontName' => 'admin'
    ],
    'queue' => [
        'consumers_wait_for_messages' => 1
    ],
    'crypt' => [
        'key' => '7a172dd6e15cb9ae68ea935e7ba00db6'
    ],
    'db' => [
        'table_prefix' => 'm2_',
        'connection' => [
            'default' => [
                'host' => 'mysql',
                'dbname' => 'maksymoliynik_local',
                'username' => 'maksymoliynik_local',
                'password' => 'maksymoliynik_local',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1',
                'driver_options' => [
                    1014 => false
                ]
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'developer',
    'session' => [
        'save' => 'files'
    ],
    'cache' => [
        'frontend' => [
            'default' => [
                'id_prefix' => '69d_'
            ],
            'page_cache' => [
                'id_prefix' => '69d_'
            ]
        ],
        'allow_parallel_generation' => false
    ],
    'lock' => [
        'provider' => 'db',
        'config' => [
            'prefix' => null
        ]
    ],
    'cache_types' => [
        'config' => 1,
        'layout' => 1,
        'block_html' => 1,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'compiled_config' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'full_page' => 1,
        'config_webservice' => 1,
        'translate' => 1,
        'vertex' => 1
    ],
    'downloadable_domains' => [
        'maksymoliynik.local'
    ],
    'install' => [
        'date' => 'Fri, 23 Oct 2020 09:59:30 +0000'
    ],
    'system' => [
        'default' => [
            'web' => [
                'unsecure' => [
                    'base_url' => 'https://maksymoliynik.local/',
                    'base_link_url' => '{{unsecure_base_url}}',
                    'base_static_url' => 'https://maksymoliynik.local/static/',
                    'base_media_url' => 'https://maksymoliynik.local/media/'
                ],
                'secure' => [
                    'base_url' => 'https://maksymoliynik.local/',
                    'base_link_url' => '{{secure_base_url}}',
                    'base_static_url' => 'https://maksymoliynik.local/static/',
                    'base_media_url' => 'https://maksymoliynik.local/media/'
                ],
            ],
        ],
        'websites' => [
            'additional_website' => [
                'web' => [
                    'unsecure' => [
                        'base_url' => 'https://maksymoliynik-additional.local/',
                        'base_link_url' => 'https://maksymoliynik-additional.local/',
                        'base_static_url' => 'https://maksymoliynik-additional.local/static/',
                        'base_media_url' => 'https://maksymoliynik-additional.local/media/'
                    ],
                    'secure' => [
                        'base_url' => 'https://maksymoliynik-additional.local/',
                        'base_link_url' => 'https://maksymoliynik-additional.local/',
                        'base_static_url' => 'https://maksymoliynik-additional.local/static/',
                        'base_media_url' => 'https://maksymoliynik-additional.local/media/'
                    ]
                ]
            ]
        ]
    ]
];
