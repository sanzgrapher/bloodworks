<?php

class  BBAdmin
{
    use Controller;

    public function index($a = "", $b = "", $c = "")
    { // default function should be in every class


        echo "home";



        $this->view('bbadmin/bloodstock'); // from controller class 

    }
}
