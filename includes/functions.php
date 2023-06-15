<?php

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

$hostname = "http://localhost/bloodworks/";

