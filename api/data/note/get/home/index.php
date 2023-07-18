<?php
include('../../../../../core/config/func.php');
if(empty($_COOKIE['tokens']) || empty($_COOKIE["instance"])){
    APIResponse(false,"NO_LOGIN");
}
$info = returnUserinfo($_COOKIE['user']);
$ar = json_decode(APIRequest($info['instance'],"notes/timeline",json_encode(array("limit"=>1,"includeMyRenotes"=>true,"includeRenotedMyNotes"=>true,"includeLocalRenotes"=>true,"withFiles",false,"i"=>$info['token']))),true);
foreach($ar as $val){
    
}
?>