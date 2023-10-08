<?php

class Admin
{
    use Controller;

    public function index($a = "", $b = "", $c = "")
    { // default function should be in every class
        $count =$this->count();



        
        
        if (!isset($_SESSION['loggedin'] ) || $_SESSION['u-type'] != "admin") {
            redirect(HOSTNAME . "admin/login");
            die();
        }

        $this->view('admin/home',$count); // from controller class 
      
    }

    public function count(){
        $totalusers = $this->totalusers();
        
        $totalbloodbanks = $this->totalbloodbanks();
        $totalvusers = $this->totalVusers(); // donors avaiabble
        
        $data = [
            "totalusers" => $totalusers,
            "totalbloodbanks" => $totalbloodbanks,
            "totalvusers" => $totalvusers,
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
    private function totalVusers()
    {
        $totalvusers = new Model;
        $totalvusers->table = "user";
        $totalvusers->order_column = "id";
        $data = [
            "donor_availability" => "avaiable"
        ];
        $totalvusers = $totalvusers->where($data);
        if($totalvusers!=null){
            $totalvusers = count($totalvusers);
        }
        return $totalvusers =0;
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
       

        if($totalbloodbanks!=null){
            $totalbloodbanks = count($totalbloodbanks);
            return $totalbloodbanks;
        }else{
            $totalbloodbanks = 0;

        }
        
        
    }

}
