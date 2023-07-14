<?php
 

class Donorlist 
{
    use Controller;
    public function index($a = "", $b = "", $c = "")
    {  
        show("home");



        
        $donor = $this->donor();  
        $data = [
             
            "donors" => $donor
        ];

        $this->view('donor-list', $data); // Pass the $bloodbanklist to the view
    }
    private function donor()
    {
        $donorlist = new Model;
        $donorlist->table = "user";
        $data = [
                "donor_availability" => "Available"
            ];
        $donor_list = $donorlist->where($data);




        return $donor_list;
        // Do something with the $bloodbanklist data
        // For example, you can pass it to the view or perform further operations
    }
}
