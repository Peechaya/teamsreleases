<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/teamsreleases/user/plugins/twigfeeds/blueprints.yaml',
    'modified' => 1518023426,
    'data' => [
        'name' => 'Twig Feeds',
        'version' => '3.3.0',
        'description' => 'Parse RSS and Atom feeds with Twig.',
        'icon' => 'feed',
        'author' => [
            'name' => 'Ole Vik',
            'email' => 'git@olevik.me',
            'url' => 'http://olevik.me'
        ],
        'homepage' => 'https://github.com/olevik/grav-plugin-twigfeeds',
        'keywords' => 'avatar, avatars, identicon, identicons',
        'bugs' => 'https://github.com/olevik/grav-plugin-twigfeeds/issues',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.1.17'
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin Status',
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'cache' => [
                    'type' => 'toggle',
                    'label' => 'Cache Feeds',
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'static_cache' => [
                    'type' => 'toggle',
                    'label' => 'Static Cache',
                    'description' => 'Saves feeds in /user/data rather than in /cache.',
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'debug' => [
                    'type' => 'toggle',
                    'label' => 'Debug',
                    'description' => 'Enables Debug-mode, which logs to Grav\'s Debugger and log-file.',
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'silence_security' => [
                    'type' => 'toggle',
                    'label' => 'Silence security errors',
                    'description' => 'Silently ignores security errors, such as missing certificates.',
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'twig_feeds' => [
                    'name' => 'twig_feeds',
                    'type' => 'list',
                    'array' => true,
                    'style' => 'vertical',
                    'label' => 'Feeds',
                    'fields' => [
                        '.source' => [
                            'type' => 'text',
                            'label' => 'Source',
                            'description' => 'URL to RSS or Atom feed.',
                            'validate' => [
                                'required' => true
                            ]
                        ],
                        '.name' => [
                            'type' => 'text',
                            'label' => 'Name',
                            'description' => 'Name of the feed.'
                        ],
                        '.category' => [
                            'type' => 'text',
                            'label' => 'Category',
                            'description' => 'Pays d\'origine'
                        ],
                        '.type' => [
                            'type' => 'text',
                            'label' => 'Type',
                            'description' => 'Dramas, Animes, Scantras'
                        ],
                        '.start' => [
                            'type' => 'text',
                            'label' => 'Item start',
                            'description' => 'Start of feed results. Must be a number between 0 and 500.',
                            'validate' => [
                                'type' => 'int',
                                'min' => 0,
                                'max' => 500
                            ]
                        ],
                        '.end' => [
                            'type' => 'text',
                            'label' => 'Item end',
                            'description' => 'End of feed results. Must be a number between 0 and 500.',
                            'validate' => [
                                'type' => 'int',
                                'min' => 0,
                                'max' => 500
                            ]
                        ],
                        '.cache_time' => [
                            'type' => 'text',
                            'label' => 'Cache Time',
                            'description' => 'Time, in seconds, to wait before caching data again.',
                            'validate' => [
                                'type' => 'int',
                                'min' => 0
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
