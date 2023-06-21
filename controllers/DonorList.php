<?php
 

class Donorlist extends Controller
{

    public function index($a = "", $b = "", $c = "")
    {  
        show("home");



        $this->view('donor-list');
    }
}
