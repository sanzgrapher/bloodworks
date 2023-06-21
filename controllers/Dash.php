<?php


class Dash extends Controller
{

    public function index($a = "", $b = "", $c = "")
    {
        show("home");



        $this->view('dash/home');
    }
}
