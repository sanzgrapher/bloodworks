<?php
// class name should match the file name so we find the class file name


class BloodBank
{
    use Controller;

    public function index()
    { // default function should be in every class

        $this->view("bloodbank"); // from controller class 

    }
}
