<?php

return [
    'prefix' => 'admin',
    'filter' => [
        'auth' => [
            Pingpong\Admin\Middleware\Authenticate::class,
            Pingpong\Admin\Middleware\OnlyAdmin::class
        ],
        'guest' => Pingpong\Admin\Middleware\RedirectIfAuthenticated::class,
    ],
    'views' => [
        'layout' => 'admin::layouts.master',
        'post' => 'admin::article'
    ],
    'article' => [
        'model' => 'Pingpong\Admin\Entities\Article',
        'perpage' => 10
    ],
    'page' => [
        'perpage' => 10
    ],
    'user' => [
        'model' => 'Pingpong\Admin\Entities\User',
        'perpage' => 10
    ],
    'role' => [
        'model' => 'Pingpong\Admin\Entities\Role',
        'perpage' => 10
    ],
    'permission' => [
        'model' => 'Pingpong\Admin\Entities\Permission',
        'perpage' => 10
    ],
    'category' => [
        'model' => 'Pingpong\Admin\Entities\Category',
        'perpage' => 10
    ],
    'client' => [
        'model' => 'Pingpong\Admin\Entities\Client',
        'perpage' => 10
    ],
    'photo' => [
        'model' => 'Pingpong\Admin\Entities\Photo',
        'perpage' => 10
    ],    
    'service' => [
        'model' => 'Pingpong\Admin\Entities\Service',
        'perpage' => 10
    ],
    'employee' => [
        'model' => 'Pingpong\Admin\Entities\Employee',
        'perpage' => 10
    ],    
];
