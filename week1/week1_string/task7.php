<?php


function getPassword($v,$number) {
    $password = str_shuffle($v);
    $number= implode("",$number);
    $randNum = str_shuffle($number);
    echo (substr($password, 0, $randNum[0]));
}
$num = array(5,6,7,8,9);

$str = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz";
getPassword($str,$num);

?>
