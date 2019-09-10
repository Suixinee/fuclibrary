<?php
/**
 * 公共函数库
 */


/**
 * @param $arr
 * @param $key_name
 * 将数据库中查出的列表以指定的id 作为数组的键名
 */
function convert_arr_key($arr, $key_name)
{
    $arr2 = [];
    foreach ($arr as $key => $val) {
        $arr2[$val[$key_name]] = $val;
    }
    return $arr2;
}

/**
 * 获取数组中某一列的值
 * @param $arr 数组
 * @param $key_name 列名(字段)
 */
function get_arr_column($arr, $key_name)
{
    $arr2 = [];
    foreach ($arr as $key => $val) {

        $arr2[] = $val[$key_name];
    }
    return $arr2;
}

/**
 * 获取URL中各个参数
 * @param $str
 */
function parse_url_param($str)
{
    $data = [];
    $str = explode('?', $str);
    $str = end($str); //a=1&b=2
    $parameter = explode('&', $str);
    foreach ($parameter as $value) {
        $tmp = explode('=', $value);
        $data[$tmp[0]] = $tmp[1];
    }
    return $data;

}

/**
 * 二维数组排序
 * @param $arr
 * @param $key
 * @param string $type
 * @return array
 */
function array_sort($arr, $key, $type = 'desc')
{
    $key_value = $new_array = [];
    foreach ($arr as $k => $a) {
        $key_value[$k] = $a[$key];
    }
    if ($type == 'asc') {
        asort($key_value);
    } else {
        arsort($key_value);
    }
    reset($key_value);
    foreach ($key_value as $k => $v) {
        $new_array[$k] = $arr[$k];
    }
    return $new_array;
}
























