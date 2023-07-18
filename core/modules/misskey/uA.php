<?php
/** Misskey User Authenticate Module */

function loginCheck($instance,$token){
    return APIRequest($instance,"i",json_encode(array("i"=>$token)));
}