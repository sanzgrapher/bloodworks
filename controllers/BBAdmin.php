<?php

class BBAdmin
{
    use Controller;

    public function index($a = "", $b = "", $c = "")
    { // default function should be in every class


        show("home");



        $this->view('bbadmin/home'); // from controller class 

    }
}
