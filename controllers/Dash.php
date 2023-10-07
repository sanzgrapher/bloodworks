<?php
include_once "User.php";

class Dash extends User
{
    use Controller;

    public function index($a = "", $b = "", $c = "")
    {
        $loggedindata = $this->getUserData();
        $eventlist = $this->eventLists();
        $user_totalDonated = $this->u_totalDonated(getLoggedinUser('userid'));
        $user_totalEvents = $this->totalUserEvents(getLoggedinUser('userid'), "count");
        $user_totalP2p = $this->totalP2Pdonated(getLoggedinUser('userid'), "count");
       $stat=[
              "totalDonated" => $user_totalDonated,
                "totalEvents" => $user_totalEvents,
                "totalp2p" => $user_totalP2p,
       ];
         
       
        $data = [
                "loggedinuser" => $loggedindata,
            "events" => $eventlist,
            "stats" => $stat,

           

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
