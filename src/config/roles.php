<?php

return [
    'super_admin' => [
        'permissions' => [
            'Page' => [
                'create',
                'update',
                'delete',
                'view'
            ],
            'Post' => [
                'create',
                'update',
                'delete',
                'view'
            ]
        ]
    ],
    'admin' => [],
    'manager' => [],
    'editor' => [],
    'member' => [],
    'banned' => []
];