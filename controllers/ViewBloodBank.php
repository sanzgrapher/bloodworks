<?php

class ViewBloodBank
{
    use Controller;

    public function index($a = "", $b = "", $c = "")
    { // default function should be in every class


        show("home");



        $this->view('bloodbankinfo'); // from controller class 

    }
}
