<?php

class BBAdmin
{
    use Controller;

    public function index($a = "", $b = "", $c = "")
    { // default function should be in every class

        $loggedindata = $this->getUserData();

        $data = [
            "loggedinuser" => $loggedindata,

        ];
        if (isset($_POST['edit-bbdetail'])) {
            $this->editBBdetail();
        }
        


        $this->view('bbadmin/edit', $data); // from controller class 

    }
    public function editBBdetail(){
        $bb_name = $_POST['bb_name'];
        $bb_email = $_POST['bb_email'];
        $bb_username = $_POST['bb_username'];
        $bb_address = $_POST['bb_address'];
        $bb_phoneno = $_POST['bb_phoneno'];
        $bb_description = $_POST['bb_description'];
        $bb_id = $_POST['bb_id'];

        $bb = new Model;
        $bb->table = "blood_banks";

        $data = [
            "bb_name" => $bb_name,
             
             
            "bb_address" => $bb_address,
            "bb_phoneno" => $bb_phoneno,
            "bb_description" => $bb_description,
        ];
   
        $bb->update($bb_id,$data,"bb_id");
        if ($bb) {
            redirect(HOSTNAME . "bbadmin");
        }

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




}
