<?php
// class name should match the file name so we find the class file name


class _404 
{
    use Controller;

    public function index()
    { // default function should be in every class
        show( "404 controller");
        $this->view('404');// from controller class 

    }
}
