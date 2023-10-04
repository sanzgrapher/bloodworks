<?php


class Dash
{
    use Controller;

    public function index($a = "", $b = "", $c = "")
    {
        $loggedindata = $this->getUserData();
        $eventlist = $this->eventLists();
       
         
       
        $data = [
                "loggedinuser" => $loggedindata,
            "events" => $eventlist,
           

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



       
    }




}
