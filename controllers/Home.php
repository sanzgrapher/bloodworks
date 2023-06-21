<?php 
// class name should match the file name so we find the class file name


class Home extends Controller{

    public function index($a= "",$b= "",$c= "" ){ // default function should be in every class
        
        // $user = new User;
 
        // $result = $user->findAll();
        show("home");

       
        
        $this->view('home');// from controller class 

    } 
  
}

