<?php


class Dash 
{
    use Controller;

    public function index($a = "", $b = "", $c = "")
    {
        show("home");

        $loggedindata = $this->editUserData();

        $data = [
            "loggedinuser" => $loggedindata,
         
        ];



        $this->view('dash/edit', $data); 

    }

    public function editUserData (){

    
        $getuserdata = new Model;
        $getuserdata->table = "user";
        $getuserdata->order_column = "id";
        
        $getsessionid = getLoggedinUser();
        $data = [
            "id" => "$getsessionid"
        ];


        $getuserdata = $getuserdata->where($data);
        return $getuserdata;
       
    }
}
