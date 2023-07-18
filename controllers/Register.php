<?php

class Register
{
    use Controller;

    public function index($a = "", $b = "", $c = "")
    { // default function should be in every class


        

        if (isset($_POST['register'])) {
            $this->registerUser();
          
        }

        $this->view('register');

    }
    public function registerUser(){

        $fname = $_POST['fname'];
        $mname = $_POST['mname'];
        $lname = $_POST['lname'];
        $dateofbirth = $_POST['dateofbirth'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $username = $_POST['username'];
        $bloodgroup = $_POST['bloodgroup'];
        $address = $_POST['address'];
        $phone_no = $_POST['phone_no'];

        $user = new Model;
        $user->table = "user";

        $data = [
            "fname" => $fname,
            "mname" => $mname,
            "lname" => $lname,
            "dateofbirth" => $dateofbirth,
            "email" => $email,
            "password" => $password,
            "username" => $username,
            "bloodgroup" => $bloodgroup,
            "address" => $address,
            "phone_no" => $phone_no
        ];

        $user->insert($data);

        if ($user) {
            redirect(HOSTNAME."login");
            } else {
            echo "user not registered";
        }


    }



}
