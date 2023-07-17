<?php

class Admin
{
    use Controller;

    public function index($a = "", $b = "", $c = "")
    { // default function should be in every class


        show("home");



        $this->view('admin/home'); // from controller class 

    }
}
