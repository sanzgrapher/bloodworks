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

function getLoggedinUser($utype ){
    if(isset($_SESSION[$utype])){
        $utype = $_SESSION[$utype];
        return $utype;
    }
    else{
        return false;
    }

        
    
    

}
