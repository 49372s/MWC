<?php

//define variables
define("dr",$_SERVER['DOCUMENT_ROOT']);

//functions

//Connection DataBase
function cdb(){
    include(dr."/core/config/vars.php");
    return new PDO('mysql:host='.$DATABASE_HOST.';dbname='.$DATABASE_NAME.';charset=utf-8',$DATABASE_USER,$DATABASE_PASS);
}

//API Response function
function APIResponse($flug,$data=null){
    header('Content-Type: application/json;charset=UTF-8;');
    if($data==null){
        echo json_encode(array("result"=>$flug));
    }else{
        echo json_encode(array("result"=>$flug,"data"=>$data));
    }
    exit();
}

function APIRequest($instance,$dir,$data,$mode = 0){
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,"https://$instance/api/$dir");
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    if($mode==0){
        //post
        $header = [
            'Content-Type: application/json',
            'Accept-Charset: UTF-8',
        ];
        curl_setopt($ch,CURLOPT_POST,true);
        curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
        curl_setopt($ch,CURLOPT_HTTPHEADER,$header);
    }else{
        return "Error";
    }
    $res = curl_exec($ch);
    if(empty($res)){
        curl_close($ch);
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL,"http://$instance/api/$dir");
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        if($mode==0){
            //post
            $header = [
                'Content-Type: application/json',
                'Accept-Charset: UTF-8',
            ];
            curl_setopt($ch,CURLOPT_POST,true);
            curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
            curl_setopt($ch,CURLOPT_HTTPHEADER,$header);
        }else{
            return "Error";
        }
        $res = curl_exec($ch);
    }
    return $res;
    curl_close($ch);
}

function returnUserinfo($user){
    $user = intval($user);
    $userToken = explode(";",$_COOKIE['tokens'])[$user];
    $instances = explode(";",$_COOKIE["instance"])[$user];
    return array("token"=>$userToken,"instance"=>$instances);
}
?>