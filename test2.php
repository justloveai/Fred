<?php


$sign="%@#$^&*%";

$params_arr['Agent']="DU888";
$params_arr['Currency']='RMB';
$params_arr['Lang']='cn';
$params_arr['Limit']='';
$params_arr['MaxWin']='0';
$params_arr['UserName']="fsystem2";

//要做簽名的參數
$sign_arr[]='Currency';
$sign_arr[]='Agent';
$sign_arr[]='UserName';
$sign_arr[]='Lang';
$sign_arr[]='MaxWin';

foreach ((array)$sign_arr AS $key=>$val){
    if($params_arr[$val]!=''){
        $sign=$sign.$params_arr[$val];
    }
}echo $sign;
if($sign!=''){
    $a = md5($sign);
}
//echo $a;
/*
$ip = '210.61.150.2';
$ip_long = ip2long($ip);
echo $ip_long."\n";  // -1062705820
echo '</br>';

echo long2ip( "-1761666987" ); // 192.168.101.100
*/
?>