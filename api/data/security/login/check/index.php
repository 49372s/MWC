<?php
include('../../../../../core/config/func.php');
include(dr."/core/modules/misskey/uA.php");

$ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,"https://mi.tkngh.jp");
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    $header = [
        'Content-Type: application/json',
        'Accept-Charset: UTF-8',
    ];
        //curl_setopt($ch,CURLOPT_POST,true);
        //curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode(array("i"=>"09ZAl8ZIdNISjpolUlw8V2POd4vPvJ8M")));
        curl_setopt($ch,CURLOPT_HTTPHEADER,$header);
        $res = curl_exec($ch);
        echo $res;
        curl_close($ch);


exit();
if(empty($_COOKIE['tokens'])){
    APIResponse(false,"No login");
}
$expire = time() + 60 * 60 * 24 * 365;
if(empty($_COOKIE['user'])){
    setcookie("user","1",$expire,"/");
    $user = 0;
}else{
    $user = intval($_COOKIE['user']);
}
$userToken = explode(";",$_COOKIE['tokens'])[$user];

?>