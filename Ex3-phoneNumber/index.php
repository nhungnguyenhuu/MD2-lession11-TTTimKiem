<?php
function searchPhoneNumber($phoneNumber){
    $arr = str_split($phoneNumber);
    if(!count($arr==10)|| !$arr[0]==0){
        return "So dien thoai khong dung";
    }else{
        if($arr[1]==3){
            if($arr[2]==2||$arr[2]==3||$arr[2]==4||$arr[2]==5||$arr[2]==6||$arr[2]==7||$arr[2]==8||$arr[2]==9){
                return "Dau so viettel";
            }else{
                return "so dien thoai khong co";
            }
        }elseif ($arr[1] ==7){
            if($arr[2]==0||$arr[2]==6||$arr[2]==7||$arr[2]==8||$arr[2]==9){
                return "dau so mobifone";
            }else{
                return "So dien thoai khong dung";
            }
        }elseif ($arr[1]==8){
            if($arr[2]==1||$arr[2]==2||$arr[2]==3||$arr[2]==4||$arr[2]==5){
                return "dau so vinaphone";
            }else{
                return "so dien thoai khong dung";
            }
        }else{
            return "so dien thoai khong dung";
        }
    }
}
$phoneNumber = "1234567891";
$phoneNumber1 = "0345678913";
$phoneNumber2 = "0794567891";
echo "<pre>";
echo searchPhoneNumber($phoneNumber);
echo searchPhoneNumber($phoneNumber1);
echo searchPhoneNumber($phoneNumber2);