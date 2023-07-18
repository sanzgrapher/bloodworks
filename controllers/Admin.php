<?php

class Admin
{
    use Controller;

    public function index($a = "", $b = "", $c = "")
    { // default function should be in every class
        $count =$this->count();
     
     
        $this->view('admin/home',$count); // from controller class 



    }

    public function count(){
        $totalusers = $this->totalusers();
        
        $totalbloodbanks = $this->totalbloodbanks();
        
        
        $data = [
            "totalusers" => $totalusers,
            "totalbloodbanks" => $totalbloodbanks
        ];

        return $data;


    }
    // total user
    private function totalusers()
    {
        $totalusers = new Model;
        $totalusers->table = "user";
        $totalusers->order_column = "id";
        $totalusers = $totalusers->findAll();

        
        return count($totalusers);
    }

    // total blood banks
    private function totalbloodbanks()
    {
        $totalbloodbanks = new Model;
        $totalbloodbanks->table = "blood_banks";
        $totalbloodbanks->order_column = "bb_id";
        $data = [
            "bb_status" => "verified"
        ];
        $totalbloodbanks = $totalbloodbanks->where($data);
        
        return count($totalbloodbanks);
    }

}
