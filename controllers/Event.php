<?php
// class name should match the file name so we find the class file name


class Event
{
    use Controller;

    public function index()
    { // default function should be in every class

        $this->view("event"); // from controller class 

    }
}
