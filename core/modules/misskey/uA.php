<?php
/** Misskey User Authenticate Module */

function loginCheck($instance,$token){
    return json_encode(array("body"=>APIRequest($instance,"i",json_encode(array("i"=>$token)))));
}