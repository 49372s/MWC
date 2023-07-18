<?php
include('../../../../../core/config/func.php');
include(dr."/core/modules/misskey/uA.php");

if(empty($_COOKIE['tokens']) || empty($_COOKIE["instance"])){
    APIResponse(false,"NO_LOGIN");
}
$expire = time() + 60 * 60 * 24 * 365;
if(empty($_COOKIE['user'])){
    setcookie("user","1",$expire,"/");
    $user = 0;
}else{
    $user = intval($_COOKIE['user']);
}
$userToken = explode(";",$_COOKIE['tokens'])[$user];
$instances = explode(";",$_COOKIE["instance"])[$user];
APIResponse(true,loginCheck($instances,$userToken));
?>