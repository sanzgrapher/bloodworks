<?php


class AddBloodBank

{
    use Controller;
    public function index($a = "", $b = "", $c = "")
    {
        $this->view('add-bloodbank');

        if (isset($_POST['add-bloodbank'])) {
         
            $this->addBloodBanks();
        }

    }

    public function addBloodBanks(){
        $addBloodBank = new Model;
        $addBloodBank->table = "blood_banks";
        $data = [
            "bb_name" => $_POST['bb_name'],
            "bb_email" => $_POST['bb_email'],
            "bb_username" => $_POST['bb_username'],
            "bb_password" => $_POST['bb_password'],
            "bb_phoneno" => $_POST['bb_phoneno'],
            "bb_address" => $_POST['bb_address'],
            "bb_status" => 'not-verified',
            "bb_description" => $_POST['bb_description'],
        ];
        $addBloodBank->insert($data);
        redirect(HOSTNAME."/bloodbanks");

    }



}
