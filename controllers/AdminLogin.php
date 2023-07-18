<?php

 

class Admin
{
    use Controller;

    public function index($a = "", $b = "", $c = "")
    {

        $this->view('admin/login');

        if (isset($_POST['login'])) {
            $this->validateLogin();
        }
        if (isset($_SESSION['loggedin'])) {
            redirect(HOSTNAME . $_SESSION['u-type']);
        }
    }

    public function validateLogin()
    {
        $admin_u = "admin";
        $admin_p = "admin";
        
        $username = $_POST['admin_username'];
        $password = $_POST['admin_password'];

        if ($username == $admin_u && $password == $admin_p) {
            $_SESSION['loggedin'] = true;
            $_SESSION['u-type'] = "admin";
            redirect(HOSTNAME . "admin");
        } else {
            $_SESSION['loggedin'] = false;
            $_SESSION['u-type'] = "";
            redirect(HOSTNAME . "admin/login");
        }

       

    }
}
