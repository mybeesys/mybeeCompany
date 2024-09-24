<?php
return [
    [
        'name' => 'Dashboard',
        'url' => '/',
        'icon' => 'fas fa-home',
        'permission' => '',
        'subMenu' => []
    ],
    [
        'name' => 'User_module',
        'url' => '/',
        'icon' => 'fas fa-user',
        'permission' => '',
        'subMenu' => [
            [
                'name' => 'users',
                'url' => '/',
                'permission' => '',
            ],
            [
                'name' => 'roles',
                'url' => '/',
                'permission' => '',
            ]
        ]
    ],
    [
        'name' => 'Product_module',
        'url' => '/',
        'icon' => 'fas fa-shopping-cart',
        'permission' => '',
        'subMenu' => [
            [
                'name' => 'products',
                'url' => '/',
                'permission' => '',
            ],
            [
                'name' => 'inventory',
                'url' => '/',
                'permission' => '',
            ]
        ]
    ],
    [
        'name' => 'accounting_module',
        'url' => '/',
        'icon' => 'fas fa-calculator',
        'permission' => '',
        'subMenu' => [
            [
                'name' => 'chart_of_accounts',
                'url' => '/',
                'permission' => '',
            ],
        ]
    ],
    [
        'name' => 'establishments_module',
        'url' => '/',
        'icon' => 'fas fa-building',
        'permission' => '',
        'subMenu' => []
    ],
    [
        'name' => 'crm',
        'url' => '/',
        'icon' => 'fas fa-cogs',
        'permission' => '',
        'subMenu' => []
    ],
    [
        'name' => 'employees_module',
        'url' => '/',
        'icon' => 'fas fa-id-card',
        'permission' => '',
        'subMenu' => [
            [
                'name' => 'chart_of_accounts',
                'url' => '/',
                'permission' => '',
            ]
        ]
    ],
    [
        'name' => 'reports_module',
        'url' => '/',
        'icon' => 'fas fa-bar-chart',
        'permission' => '',
        'subMenu' => []
    ],
];