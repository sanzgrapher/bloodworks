<?php
// class name should match the file name so we find the class file name


class _404 
{
    use Controller;

    public function index()
    { // default function should be in every class
        
        $this->view('404');// from controller class 

    }
}
