<?php
// class name should match the file name so we find the class file name


class _404 extends Controller
{

    public function index()
    { // default function should be in every class
        echo "404 controller";
        $this->view('home');// from controller class 

    }
}
