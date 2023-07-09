<?php
include('../../../../../core/config/func.php');
require('../../../../../core/modules/uuid/uuid.php');
#Misskey API Request.

#Check instance URL
##If empty
if(empty($_POST['instance'])){
    APIResponse(false,"Error code: 100");
}
##varidation
if(strpos($_POST['instance'],"/")!=false || strpos($_POST['instance'],":")!=false){
    APIResponse(false,"Error code: 103");
}
#Generate session id
$session = UuidV4Factory::generate();

#request parameters
$request = "?name=Note Deck Web&callback=https://mi.tkngh.jp/api/security/login/callback/&permission=read:account,write:account,read:blocks,write:blocks,read:drive,write:drive,read:favorites,write:favorites,read:following,write:following,read:messaging,write:messaging,read:mutes,write:mutes,write:notes,read:notifications,write:notifications,write:reactions,write:votes,read:pages,write:pages,write:page-likes,read:page-likes,write:gallary-likes,read:gallary-likes";

#url
$url = "https://".$_POST['instance']."/miauth/".$session.$request;

header('Location: '.$url);
exit();
?>