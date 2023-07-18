<?php
include('../../../../../core/config/func.php');
if(empty($_GET['session']) || empty($_COOKIE['instances'])){
    APIResponse(false,"Error code: 100");
}
$ar = json_decode(APIRequest($_COOKIE['instances'],"miauth/".$_GET['session']."/check",json_encode(array())));

if(empty($_COOKIE['tokens']) || empty($_COOKIE['instance'])){
    $nt = "";
    $ni = "";
}else{
    $nt = $_COOKIE['tokens'];
    $ni = $_COOKIE['instance'];
}

if($ar->ok == true){
    $expire = time() + 60 * 60 * 24 * 365;
    setcookie("tokens",$nt.$ar->token.";",$expire,"/");
    setcookie("instance",$ni.$_COOKIE['instances'].";",$expire,"/");
    echo("認証に成功しました。");
}else{
    echo("認証に失敗しました。");
}
?>
<html>
    <head>
        <title>認証確認 | Note Deck Web</title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <hr>
        <button onclick="location.href='/';">サービスに戻る</button>
    </body>
</html>