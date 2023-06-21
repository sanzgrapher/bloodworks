<?php


class BloodBanks extends Controller
{

    public function index($a = "", $b = "", $c = "")
    { 
        show("home");



        $this->view('blood-banks'); // from controller class 

    }
}
