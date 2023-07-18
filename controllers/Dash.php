<?php


class Dash
{
    use Controller;

    public function index($a = "", $b = "", $c = "")
    {
        $loggedindata = $this->getUserData();
        $eventlist = $this->eventLists();
        $requestlist = $this->requestlist();
         
       
        $data = [
                "loggedinuser" => $loggedindata,
            "events" => $eventlist,
            "requests" => $requestlist,

            ];


        $this->view('dash/home', $data); 
      
    }

    
    public function getUserData()
    {
         $getuserdata = new Model;
        $getuserdata->table = "user";
        $getuserdata->order_column = "id";
        $getsessionid = getLoggedinUser('userid');
        if (!$getsessionid) {
        redirect("../login");
        die();  
        }
        $data = [
            "id" => "$getsessionid"
        ];
        $getuserdata = $getuserdata->where($data);
        return $getuserdata;
    }
    private function eventLists()
    {
        $eventlist = new Model;
        $eventlist->table = "event";
        $eventlist->order_column = "event_id";
        // $data = [
        //     "bb_status" => "verified"
        // ];

        $eventlist = $eventlist->findAll();
        return $eventlist;



        // Do something with the $eventlist data
        // For example, you can pass it to the view or perform further operations
    }
    private function requestlist()
    {
        $requestlist = new Model;
        $requestlist->table = "request_list";
        $requestlist->order_column = "req_id";
        $getsessionid = getLoggedinUser('userid');
        if (!$getsessionid) {
            redirect("../login");
            die();
        }
        $data = [
            "user_id" => "$getsessionid"
        ];
        $requestlist = $requestlist->where($data);
        return $requestlist;

        


        // Do something with the $eventlist data
        // For example, you can pass it to the view or perform further operations
    }



}
