<?php


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
function insert_sort($arr){
    if(!empty($arr)&&is_array($arr)){
        $len = count($arr);
        for ($i=1;$i<$len;$i++){
            $tmp = $arr[$i];
            for ($j = $i-1;$j>=0;$j--){
                if($arr[$j]>$tmp){
                    $arr[$j+1]=$arr[$j];
                    $arr[$j]=$tmp;
                }else{
                    break;
                }
            }
        }
    }
    return $arr;

}

var_dump(insert_sort([11,7,5,22]));

















