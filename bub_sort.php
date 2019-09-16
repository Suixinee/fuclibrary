<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/9/16
 * Time: 9:29
 */

function bub_sort($arr)
{
    $len = count($arr);
    $flag = false;
    $count=0;
    for ($i = 0; $i < $len - 1; $i++) {
        $flag = false;
        for ($j = $len - 1; $j > $i; $j--) {
            if($arr[$j-1]>$arr[$j]){
                $tmp = $arr[$j-1];
                $arr[$j-1] = $arr[$j];
                $arr[$j] = $tmp;
                $count++;
                $flag = true;
            }
        }
        if(false==$flag) break;
    }
    $data = [
        'arr'=>$arr,
        'count'=>$count,
    ];
    return json_encode($data);
}

var_dump(bub_sort([7,6,5,4,3]));
