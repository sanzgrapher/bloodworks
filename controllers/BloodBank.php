<?php
// class name should match the file name so we find the class file name


class BloodBank
{
    use Controller;

    public function index($a = "", $b = "", $c = "")
    { // default function should be in every class
           $bb_id=$a;




        $bbDetails = $this->bbDetails($bb_id); 

        $data = [
            "bbData" => $bbDetails,

        ];

        $this->view('bloodbank', $data); 





    }
    public function bbDetails($bb_id){
        $bbDetails = new Model;
        $bbDetails->table = "blood_banks";
        $bbDetails->order_column = "bb_id";
        $data = [
            "bb_id" => $bb_id
        ];

        $bbDetails = $bbDetails->where($data);
        return $bbDetails;


    }


}
