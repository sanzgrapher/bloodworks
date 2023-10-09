<?php

class Register
{
    use Controller;

    public function index($a = "", $b = "", $c = "")
    { // default function should be in every class


        

        if (isset($_POST['register'])) {
            $this->registerUser();
          
        }
        if (isset($_SESSION['loggedin'])) {
            redirect(HOSTNAME . $_SESSION['u-type']);
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
       
        $age = date_diff(date_create($dateofbirth), date_create('today'))->y;

        $user = new Model;
        $user->table = "user";

        $data = [
            "fname" => $fname,
            "mname" => $mname,
            "lname" => $lname,
            "dateofbirth" => $dateofbirth,
            "email" => $email,
            "password" => password_hash($password, PASSWORD_DEFAULT),
            "username" => $username,
            "bloodgroup" => $bloodgroup,
            "address" => $address,
            "phone_no" => $phone_no,
            "donor_availability" => "Unavailable",
            "age" => $age
        ];

        $user->insert($data);

        if ($user) {
            redirect(HOSTNAME."login");
            } else {
            echo "user not registered";
        }


    }



}
