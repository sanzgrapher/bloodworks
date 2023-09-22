<?php
 

class Donorlist 
{
    use Controller;
    public function index($a = "", $b = "", $c = "")
    {  
   


        
        $donor = $this->donor();  
        $data = [
             
            "donors" => $donor
        ];
        
        if (isset($_POST['sendmail'])) {
            
            $this->sendemail();
        }

        $this->view('donor-list', $data); // Pass the $bloodbanklist to the view
    }
    public function sendemail()
    {

       smtp_mailer('narayandhakal443@gmail.com','Padandas.com',"email");
    //    smtp_mailer('to','subject',",'msg");

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
