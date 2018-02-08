<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/teamsreleases/user/config/groups.yaml',
    'modified' => 1517532077,
    'data' => [
        'Teams' => [
            'groupname' => 'Teams',
            'readableName' => 'Teams',
            'description' => 'Toutes les personnes qui font partie d\'une Team :)',
            'access' => [
                'admin' => [
                    'super' => 'false',
                    'login' => 'false',
                    'cache' => 'false',
                    'configuration' => 'false',
                    'configuration_system' => 'false',
                    'configuration_site' => 'false',
                    'configuration_media' => 'false',
                    'configuration_info' => 'false',
                    'settings' => 'false',
                    'pages' => 'false',
                    'maintenance' => 'false',
                    'statistics' => 'false',
                    'plugins' => 'false',
                    'themes' => 'false',
                    'users' => 'false'
                ],
                'admin-addon-user-manager' => [
                    'users' => 'false',
                    'groups' => 'false',
                    'users_expert' => 'false'
                ]
            ]
        ],
        'Admins' => [
            'groupname' => 'Admins',
            'readableName' => 'Admins',
            'access' => [
                'admin' => [
                    'super' => 'true',
                    'login' => 'true',
                    'cache' => 'true',
                    'configuration' => 'true',
                    'configuration_system' => 'true',
                    'configuration_site' => 'true',
                    'configuration_media' => 'true',
                    'configuration_info' => 'true',
                    'settings' => 'true',
                    'pages' => 'true',
                    'maintenance' => 'true',
                    'statistics' => 'true',
                    'plugins' => 'true',
                    'themes' => 'true',
                    'users' => 'true'
                ],
                'admin-addon-user-manager' => [
                    'users' => 'true',
                    'groups' => 'true',
                    'users_expert' => 'true'
                ]
            ]
        ]
    ]
];
