<?php

class BBAdmin
{
    use Controller;

    public function index($a = "", $b = "", $c = "")
    { // default function should be in every class

        $loggedindata = $this->getUserData();
        $bloodrequests = $this->requestlist();




        $data = [
            "loggedinuser" => $loggedindata,
            "requests" => $bloodrequests


        ];
        
       



        $this->view('bbadmin/home',$data); // from controller class 

    }
    public function getUserData()
    {
        $getuserdata = new Model;
        $getuserdata->table = "blood_banks";
        $getuserdata->order_column = "bb_id";
        $getsessionid = getLoggedinUser('bb_id'); // functions file sends the session id
        if (!$getsessionid) {
            redirect(HOSTNAME . "bbadmin/login");
            die();
        }
        $data = [
            "bb_id" => "$getsessionid"
        ];
        $getuserdata = $getuserdata->where($data);
        return $getuserdata;
    }

    private function requestlist()
    {
        $requestlist = new Model;
        $requestlist->table = "request_list";
        $requestlist->order_column = "req_id";


        $data = [
            "transaction_status" => "pending"
        ];
        $requestlist = $requestlist->where($data);
        return $requestlist;




        // Do something with the $eventlist data
        // For example, you can pass it to the view or perform further operations
    }



}
