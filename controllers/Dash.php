<?php


class Dash
{
    use Controller;

    public function index($a = "", $b = "", $c = "")
    {
        show("home");



        $this->view('dash/home');
    }
}
