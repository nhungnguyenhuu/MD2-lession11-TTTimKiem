<?php
function findMinMax($arr){
    $min = $arr[0];
    $max = $arr[1];
    for($i = 0; $i<count($arr); $i++){
        if($arr[$i]<$min){
            $min = $arr[$i];
        }
        if($arr[$i]>$max){
            $max = $arr[$i];
        }
    }
    return "so lon nhat trong mang la: ".$max."<br>"."so nho nhat la: ".$min;
}
$arr = [1, 4, 2, 3, 6, 8, 11, 31, 32, -1];
echo findMinMax($arr);