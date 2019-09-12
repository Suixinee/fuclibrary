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

var_dump(array_multi2single($data));

function insert_sort($arr){
    if(!empty($arr)&&is_array($arr)){
        $len = count($arr);
        for ($i=1;$i<$len;$i++){
            $tmp = $arr[$i];
            for ($j=$i-1;$j>=0;$j--){
                if($arr[$j]>$tmp){
                    $arr[$j+1] = $arr[$j];
                    $arr[$j] = $tmp;
                }
            }
        }
    }
    return $arr;
}
var_dump(insert_sort([7,5,4,11,2]));