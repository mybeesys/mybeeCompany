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
        'name' => 'Product_module',
        'url' => 'category',
        'icon' => 'fas fa-shopping-cart',
        'permission' => '',
        'subMenu' => [
            [

                'name' => 'Products',
                'url' => 'category',
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
            [
                'name' => 'journalEntry',
                'url' => 'journal-entry-index',
                'permission' => '',
            ],

        ]
    ],

    [
        'name' => 'establishments_module',
        'url' => 'dashboard',
        'permission' => '',
        'icon' => 'fas fa-building',
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

        'name' => 'employees_management_module',
        'url' => '/',
        'icon' => 'fas fa-id-card',
        'permission' => '',
        'subMenu' => [
            [
                'name' => 'employees-dashboard',
                'url' => '/employee/dashboard',
                'permission' => '',
            ],
            [
                'name' => 'employees',
                'url' => '/employee',
                'permission' => '',
            ],
            [
                'name' => 'roles',
                'url' => '/role',
                'permission' => '',
            ],
            [
                'name' => 'permissions',
                'url' => '/permission',
                'permission' => '',
            ],
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