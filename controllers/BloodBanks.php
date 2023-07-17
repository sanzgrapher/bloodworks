<?php
class BloodBanks 
{
use Controller;

    public function index($a = "", $b = "", $c = "")
    {
  

        $bloodbanklist = $this->bloodbanklist(); // Call the private method within the class and capture the returned value
        
        $data = [
            "bloodbanklist" => $bloodbanklist,
             
        ];

        $this->view('blood-banks', $data); // Pass the $bloodbanklist to the view
    }

    private function bloodbanklist()
    {
        $bloodbanklist = new Model;
        $bloodbanklist->table = "blood_banks";
        $bloodbanklist->order_column = "bb_id";
        $data = [
            "bb_status" => "verified"
        ];

        $bloodbanklist = $bloodbanklist->where($data);
        return $bloodbanklist;

        

        // Do something with the $bloodbanklist data
        // For example, you can pass it to the view or perform further operations
    }
     
}
