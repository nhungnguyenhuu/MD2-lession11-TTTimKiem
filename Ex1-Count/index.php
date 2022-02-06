<?php
function find($arr, $number){
    $count = 0;
    for($i = 0; $i<count($arr); $i++){
        if($arr[$i]==$number){
            $count++;
        }
    }
    return $count;
}
$arr = [1, 4, 2, 3, 2, 4, 6, 8, -1];
$number = 2;
$number2 = 9;

if(find($arr, $number)==0){
    echo "phan tu ".$number." khong co trong mang.";
}else{
    echo "phan tu ".$number." xuat hien ".find($arr, $number)." trong mang.";
}
echo "<br>";
if(find($arr, $number2)==0){
    echo "phan tu ".$number." khong co trong mang";
}else{
    echo "phan tu ".$number2." xuat hien ".find($arr, $number2)." trong mang.";
}