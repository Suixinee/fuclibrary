<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/9/16
 * Time: 10:26
 */
/*
 *
 *
 *
 *
 *
 *
 *
 *
 *
 * */
$a = true && false;
$b = true and false;

var_dump($a);
var_dump($b);

$a = 1;

$b = $a + $a + $a = 2;
var_dump($b);

$a = 2;
$b = $a + $a = 1;
var_dump($b);