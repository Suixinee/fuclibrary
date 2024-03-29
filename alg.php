<?php
echo "<pre>";

/**
 *
 * function SelectSort($arr = array()) {
 * $size = sizeof($arr);           //获取数组长度
 * for ($i=0; $i<$size; $i++) {        //外层循环控制比较的数值下标与轮询次数
 * $p=$i;
 * for ($j=$i+1; $j<$size; $j++) {     //内层循环控制比较次数
 * if ($arr[$p] > $arr[$j]) {
 * $p = $j;                   //记录下标
 * }
 * }
 * if ($p != $i){
 * $tmp = $arr[$i];
 * $arr[$i] = $arr[$p];
 * $arr[$p] = $tmp;
 * }
 * }
 * return $arr;
 * }
 **/

/*function SelectSort($arr = array())
{
    $size = sizeof($arr);           //获取数组长度
    for ($i = 0; $i < $size; $i++) {        //外层循环控制比较的数值下标与轮询次数
        $p = $i;
        for ($j = $i + 1; $j < $size; $j++) {     //内层循环控制比较次数
            if ($arr[$p] > $arr[$j]) {
                $p = $j;                   //记录下标
            }
        }
        if ($p != $i) {
            $tmp = $arr[$i];
            $arr[$i] = $arr[$p];
            $arr[$p] = $tmp;
        }
    }
    return $arr;
}*/

function select_sort($arr)
{
    if (!empty($arr) && is_array($arr)) {
        $len = count($arr);
        for ($i = 0; $i < $len; $i++) {
            $t = $i;
            for ($j = $i + 1; $j < $len; $j++) {
                if ($arr[$t] > $arr[$j]) {
                    $t = $j;
                }
            }
            if ($t != $i) {
                $tmp = $arr[$i];
                $arr[$i] = $arr[$t];
                $arr[$t] = $tmp;
            }
        }
    }
    return $arr;
}

var_dump(select_sort([3, 1, 5, 2]));


//function InsertSort(&$arr)
//{
//    for ($i = 1; $i < count($arr); $i++) {
//        // 带插入的值
//        $insertVal = $arr[$i];
//        // 要比较的位置下标
//        $insertIndex = $i - 1;
//        while ($insertIndex >= 0 && $insertVal < $arr[$insertIndex]) {
//            // 如果被比较数的下标大于等于0；插入的值比被比较的值小，则将被比较的值想后移
//            $arr[$insertIndex + 1] = $arr[$insertIndex];
//            $insertIndex--;
//        }
//        // 插入insertVal
//        if ($insertIndex + 1 != $i) {
//            $arr[$insertIndex + 1] = $insertVal;
//        }
//    }
//}
/*
 * function insert_sort($data)
{
	if(!empty($data) && is_array($data))
	{
		$len = count($data);
		for($i=1; $i<$len; $i++)
		{
			$tmp = $data[$i];
			for($j=$i-1; $j>=0; $j--)
			{
				if($data[$j] > $tmp)
				{
					$data[$j+1] = $data[$j];
					$data[$j] 	= $tmp;
				} else {
					break;
				}
			}
		}
	}
	return $data;
}
 * */
function insert_sort($arr)
{
    if (!empty($arr) && is_array($arr)) {
        $len = count($arr);
        for ($i = 1; $i < $len; $i++) {
            $tmp = $arr[$i];
            for ($j = $i - 1; $j >= 0; $j--) {
                if ($arr[$j] > $tmp) {
                    $arr[$j + 1] = $arr[$j];
                    $arr[$j] = $tmp;
                } else {
                    break;
                }
            }
        }
    }
    return $arr;

}

var_dump(insert_sort([11, 7, 5, 22]));


/*function quick_sort($data)
{
    if (!empty($data) && is_array($data)) {
        $len = count($data);
        if ($len <= 1) return $data;

        $base = $data[0];
        $left_array = array();
        $right_array = array();
        for ($i = 1; $i < $len; $i++) {
            if ($base > $data[$i]) {
                $left_array[] = $data[$i];
            } else {
                $right_array[] = $data[$i];
            }
        }
        if (!empty($left_array)) $left_array = quick_sort($left_array);
        if (!empty($right_array)) $right_array = quick_sort($right_array);

        return array_merge($left_array, array($base), $right_array);
    }
}*/

function quick_sort($data)
{
    if (!empty($data) && is_array($data)) {
        $len = count($data);
        if ($len <= 1) return $data;

        $base = $data[0];
        $left_array = $right_array = [];

        for ($i = 1; $i < $len; $i++) {
            if ($base > $data[$i]) {
                $left_array[] = $data[$i];
            } else {
                $right_array[] = $data[$i];
            }
        }
        if (!empty($left_array)) $left_array = quick_sort($left_array);
        if (!empty($right_array)) $right_array = quick_sort($right_array);

        return array_merge($left_array, [$base], $right_array);
    }
}

var_dump(quick_sort([3, 7, 9, 8]));


/*
 * 求出数组相邻数的最大差值
 *
 * */
function arr_diff_order($arr)
{
    $arr_diff =[];
    if(!empty($arr)&&is_array($arr)){
        $len = count($arr);
        if ($len<=1) return $arr;
        for($i=1;$i<$len;$i++){
            if($arr[$i]<$arr[$i-1]){
                $arr_diff[$arr[$i-1].'-'.$arr[$i]]=$arr[$i-1] - $arr[$i];
            }else{
                $arr_diff[$arr[$i-1].'-'.$arr[$i]]=$arr[$i] - $arr[$i-1];
            }
        }
    }
    $array_values = array_values($arr_diff);
    arsort($arr_diff);

    return [key($arr_diff)=>$arr_diff[key($arr_diff)]];
}

var_dump(arr_diff_order([1,7,5,3,9]));
















