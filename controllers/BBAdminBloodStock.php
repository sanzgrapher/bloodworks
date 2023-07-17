<?php

class  BBAdmin
{
    use Controller;

    public function index($a = "", $b = "", $c = "")
    { // default function should be in every class


        $loggedindata = $this->getUserData();

        $data = [
            "loggedinuser" => $loggedindata,

        ];
        


        $this->view('bbadmin/bloodstock' ,$data); // from controller class 

    }
    public function getUserData()
    {
        $getuserdata = new Model;
        $getuserdata->table = "blood_banks";
        $getuserdata->order_column = "bb_id";
        $getsessionid = getLoggedinUser('bb_id'); // functions file sends the session id
        if (!$getsessionid) {
            redirect("/login");
            die();
        }
        $data = [
            "bb_id" => "$getsessionid"
        ];
        $getuserdata = $getuserdata->where($data);
        return $getuserdata;
    }
}
