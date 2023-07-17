<?php

class BBAdmin
{
    use Controller;

    public function index($a = "", $b = "", $c = "")
    { // default function should be in every class


        $eventlist = $this->eventDetail();
        $data = [
            "events" => $eventlist,

        ];
        if (isset($_POST['add-event'])) {

            $this->addEvent();
        }


        
        $this->view('bbadmin/events',$data);
        
       

    }
    private function eventDetail()
    {
        $eventlist = new Model;
        $eventlist->table = "event";
        $eventlist->order_column = "event_id";
        $getsessionid = getLoggedinUser('bb_id'); // functions file sends the session id

        $data = [
            "bb_id" => '18'
        ];

        $eventlist = $eventlist->where($data);
        return $eventlist;

    }

    public function addEvent()
    {
        
        $addEvent = new Model;
        $addEvent->table = "event";
        $getsessionid = getLoggedinUser('bb_id'); // functions file sends the session id
       
        $data = [
            "bb_id" => $getsessionid,
            "event_name" => $_POST['event_name'],
            "event_location" => $_POST['event_location'],
            "event_date" => $_POST['event_date'],
            "event_desc" => $_POST['event_desc'],
            "organizer" => $_POST['organizer'],
            "contact_info" => $_POST['contact_info'],
        ];

        $addEvent->insert($data);
        // send email;
        redirect(HOSTNAME."bbadmin");

    }
}
