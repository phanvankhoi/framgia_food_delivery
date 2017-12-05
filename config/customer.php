<?php 
    
return [
    'link' => [
        'avatar' => 'images/avatar/',
    ],

    'category' => [
    	'paginate' => 4,
    ],

    'top_food' => [
    	'paginate' => 6,
    ],

    'product' => [
    	'is_top' => 1,
        'limit_qty' => 4,
        'default_qty' => 1,
    ],
    'order' => [
        'default_status' => 1,
        'pending' => 1,
        'confirmed' => 2,
        'delivery' => 3,
        'done' => 4,
    ],
    'user' => [
        'default_role' => 'admin',
    ],
];
