<?php

class Login
{
    use Controller;

    public function index($a = "", $b = "", $c = "")
    { // default function should be in every class

        $this->view('login');
        if (isset($_POST['login'])) {
            $this->validateLogin();
        }
    }

    public function validateLogin()
    {

        $username = $_POST['username'];
        $password = $_POST['password'];

        $user = new Model;
        $user->table = "user";

        $data = [
            "username" => $username
        ];

        $user_return = $user->where($data);
         if (empty($user_return)) {
        
        die("user not found");
    }


        $userdata = $user_return[0];

    
       

        
       
        if (count($user_return) == 1) {

           
            // if (password_verify($password, $user->password)) {
            if ($password == $userdata->password) {
                
                $_SESSION['userid'] = $userdata->id;
                $_SESSION['loggedin'] = true;
                $_SESSION['u-type'] = 'dash';
               
                redirect(HOSTNAME."dash");  
               
        
            }else{
                echo "password not match";
            }

        } else {
            echo "user not found";
        }
    }
}
