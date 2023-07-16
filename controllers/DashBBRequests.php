<?php


class Dash
{
    use Controller;

    public function index($a = "", $b = "", $c = "")
    {
        // check for admin or not 

        $bb_requests = $this->getBloodBankRequests();
       
        $data = [
            "bloodbanks" => $bb_requests,

        ];

        if (isset($_POST['approve'])) {
            $this->acceptBloodBanks();
        }else if(isset($_POST['reject'])){
            $this->rejectBloodBanks();
        }
        
        
        
        $this->view('dash/bbrequests', $data);
    }
    
    // get bloodbank requests data from table blood_banks where status - not-verified
    public function getBloodBankRequests(){
       
        $getBloodBankRequests = new Model;
        $getBloodBankRequests->table = "blood_banks";
        $getBloodBankRequests->order_column = "bb_id";
        $data = [
            "bb_status" => "not-verified"
        ];
        $getBloodBankRequests = $getBloodBankRequests->where($data);
        // $getBloodBankRequests = $getBloodBankRequests->findAll();
 
        return $getBloodBankRequests;
    }

    // accept bloodbank requests

    public function acceptBloodBanks(){
        $id = $_POST['bb_id'];
        $acceptBloodBanks = new Model;
        $acceptBloodBanks->table = "blood_banks";
        $data = [
            "bb_status" => "verified"
        ];
        $acceptBloodBanks->update($id,$data, 'bb_id');
        redirect("http://bloodworks.local/dash/bbrequests");
    }

    // reject bloodbank requests

    public function rejectBloodBanks(){
        $bb_id = $_POST['bb_id'];
        $rejectBloodBanks = new Model;
        $rejectBloodBanks->table = "blood_banks";
        
        $rejectBloodBanks->delete($bb_id , 'bb_id');
        redirect("http://bloodworks.local/dash/bbrequests");
    }


    
}
