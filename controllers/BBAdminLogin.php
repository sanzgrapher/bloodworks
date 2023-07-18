<?php

use function PHPSTORM_META\type;

class BBAdmin
{
    use Controller;

    public function index($a = "", $b = "", $c = ""){

        $this->view('bbadmin/login');

        if (isset($_POST['login'])) {
            $this->validateLogin();
        }
        if (isset($_SESSION['loggedin'])) {
            redirect(HOSTNAME . $_SESSION['u-type']);
        }

    }

    public function validateLogin()
    {

        $username = $_POST['bb_username'];
        $password = $_POST['bb_password'];

        $user = new Model;
        $user->table = "blood_banks";
        $user->order_column = "bb_id";

        $data = [
            "bb_username" => $username,
            "bb_status" => "verified"
         

        ];

        $user_return = $user->where($data);
    //  check for empty array
    if (empty($user_return)) {

        die("user not found /  not verified");
    }


        if (count($user_return) == 1) {
              $userdata = $user_return[0];

  
           
            if ($password == $userdata->bb_password  ) {

                $_SESSION['bb_id'] = $userdata->bb_id;
                $_SESSION['loggedin'] = true;
                $_SESSION['u-type'] = 'bbadmin';

                redirect(HOSTNAME . "bbadmin");
            } else {
                echo "password not match";
                die();
            }
        } else {
            echo "user not found or not verified";
            die();
            
        }
    }



}
