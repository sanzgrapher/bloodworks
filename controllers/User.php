<?php


class User
{
    use Controller;

    public function index($a = "", $b = "", $c = "")
    {
        
    
    }



    public function getUserData()
    {
        $getuserdata = new Model;
        $getuserdata->table = "user";
        $getuserdata->order_column = "id";
        $getsessionid = getLoggedinUser('userid');
        // if (!$getsessionid) {
        //     redirect("../login");
        //     die();
        // }
        $data = [
            "id" => "$getsessionid"
        ];
        $getuserdata = $getuserdata->where($data);
        return $getuserdata;
    }
    
}
