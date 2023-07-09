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
?>