<?php
return [
    'POST_ALL' => [
        'pattern' => '/post/all/',
        'controller' => 'PostController',
        'action' => 'getAll',
        'method' => 'GET'
    ],

    'POST_ONE' => [
        'pattern' => '/post/(\d+)/',
        'controller' => 'PostController',
        'action' => 'getOne',
        'method' => 'GET',
        'params' => ['id']
    ]
];
?>
