<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/9/16
 * Time: 14:46
 */

/*
 * 一群猴子排成一圈，按1,2,…,n依次编号。然后从第1只开始数，数到第m只,把它踢出圈，从它后面再开始数，再数到第m只，在把它踢出去…，
 * 如此不停的进行下去，直到最后只剩下一只猴子为止，那只猴子就叫做大王。要求编程模拟此过程，输入m、n, 输出最后那个大王的编号。用程序模拟该过程。
 */
/**
 * 无限循环数数M个并且删除第M个,返回最后一个的标识
 * @param $n 有个N个成员
 * @param $m 第M个成员删除
 * @return int  返回最后一个 成员
 */
function monkeyElection($n, $m)
{
    $arr = range(1, $n);
    $i = 1;
    while (count($arr) > 1) {
        if (($i % $m) !== 0) {
            array_push($arr, $arr[$i - 1]);
        }
        unset($arr[$i - 1]);
        $i++;
    }
    return [
        'num'=>$arr[$i - 1],
        '$i'=>$i,
    ];
}

var_dump(monkeyElection(29, 2));