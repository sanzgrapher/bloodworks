<?php

class BBAdmin
{
    use Controller;

    public function index($a = "", $b = "", $c = "")
    { // default function should be in every class
        $this->view('bbadmin/login'); // from controller class 

    }
}
