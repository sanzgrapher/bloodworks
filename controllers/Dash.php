<?php


class Dash
{
    use Controller;

    public function index($a = "", $b = "", $c = "")
    {
        $loggedindata = $this->getUserData();
        $data = [
                "loggedinuser" => $loggedindata,

            ];


        $this->view('dash/home', $data); 
      
    }
    public function getUserData()
    {


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
