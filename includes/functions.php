<?php

// $hostname = "http://localhost/bloodworks/";
function show($stuff)
{
    // printing anything sent as parameter
    echo "<pre>";
    print_r($stuff);
    echo "</pre>";
}
function redirect($data){
    header("Location: $data");

}

function getLoggedinUser(){
    $userid = $_SESSION['userid'];
    return $userid;
    

}
