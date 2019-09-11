<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/9/10
 * Time: 15:09
 */
require('function.php');

$data = [
    [
        'id' => 5698,
        'first_name' => 'Bill',
        'last_name' => 'Gates',
    ],
    [
        'id' => 4767,
        'first_name' => 'Steve',
        'last_name' => 'Aobs',
    ],
    [
        'id' => 3809,
        'first_name' => 'Mark',
        'last_name' => 'Zuckerberg',
    ]
];
echo "<pre>";
var_dump(array_sort($data,'id','asc'));

var_dump(arr_multi2single($data));