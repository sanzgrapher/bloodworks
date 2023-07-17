<?php

class BBAdmin
{
    use Controller;

    public function index($a = "", $b = "", $c = "")
    { // default function should be in every class

        $eveid=$b;

      
       
        $eventlist = $this->eventDetail($eveid);
        $data = [
            "events" => $eventlist,

        ];

        if (isset($_POST['update-event'])) {

            $this->updateEvent($eveid);
        }


        $this->view('bbadmin/editevent', $data); // from controller class 


    }
    private function eventDetail($eveid)
    {
        $eventlist = new Model;
        $eventlist->table = "event";
        $eventlist->order_column = "event_id";
        $data = [
            "bb_id" => "18",
            "event_id" => $eveid
        ];

        $eventlist = $eventlist->where($data);
        return $eventlist;



        // Do something with the $eventlist data
        // For example, you can pass it to the view or perform further operations
    }

    public function updateEvent(){
        $updateEvent = new Model;
        $updateEvent->table = "event";
        $eveid=$_POST['event_id'];
         
        $data = [
            
            "event_name" => $_POST['event_name'],
            "event_location" => $_POST['event_location'],
            "event_date" => $_POST['event_date'],
            "event_desc" => $_POST['event_desc'],
            "organizer" => $_POST['organizer'],
            "contact_info" => $_POST['contact_info'],
        ];
    
       
        $updateEvent = $updateEvent->update($eveid, $data, 'event_id');
       if(!$updateEvent){
              echo "<script>alert('Event not updated');</script>";
       }

        redirect(HOSTNAME . "bbadmin/events");
       
    }


}
