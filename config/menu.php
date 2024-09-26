<?php
return [
    [
        'name' => 'Dashboard',
        'url' => 'dashboard',
        'icon' => 'fas fa-home',
        'permission' => '',
        'subMenu' => []
    ],
    [
        'name' => 'User_module',
        'url' => 'dashboard',
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
        'url' => 'category.index',
        'icon' => 'fas fa-shopping-cart',
        'permission' => '',
        'subMenu' => [
            [

                'name' => 'Products',
                'url' => 'category.index',
                'permission' => '' ,

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
        'url' => 'dashboard',
        'icon' => 'fas fa-calculator',
        'permission' => '',
        'subMenu' => [
            [
                'name' => 'accounting_dashboard',
                'url' => 'accounting-dashboard',
                'permission' => '',
            ],
            [
                'name' => 'chart_of_accounts',
                'url' => 'tree-of-accounts',
                'permission' => '',
            ],

        ]
    ],
    [
        'name' => 'establishments_module',
        'url' => 'dashboard',

        'permission' => '',
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
