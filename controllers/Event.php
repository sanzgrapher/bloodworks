<?php
// class name should match the file name so we find the class file name


class Event
{
    use Controller;

    public function index($a = "", $b = "", $c = "")
    {
        $event_id=$a;

        $uid = getLoggedinUser('userid');
        $eventDetails = $this->eventDetails($event_id);
        $checkin = $this->isCheckIn($event_id, $uid);

        $data = [
            "isCheckIn" => $checkin,
            "eventData" => $eventDetails,

        ];
        if (isset($_POST['eventCheckIn-btn'])) {




            $this->eventCheckIn($event_id, $uid);
        }



        $this->view("event", $data); // from controller class 


    }
    public function isCheckIn($event_id, $uid) // check is already turned in

    {
 
         
        $isCheckIn = new Model;
        $isCheckIn->table = "event_participants";
        $isCheckIn->order_column = "participation_id";

        $data = [
            "event_id" => $event_id,
            "user_id" => $uid,
        ];
        


        $isCheckIn = $isCheckIn->where($data);
       
        if (empty($isCheckIn)) {
            return false; // not checked in
        } else {
            return true; // checked in
        }
  
   
         
      

    }
    public function eventCheckIn($event_id, $uid){


        


        $eventCheckIn = new Model;
        $eventCheckIn->table = "event_participants";
        
        $data = [
            "event_id" => $event_id,
            "user_id" => $uid,
        ];
        show($data);
        $eventCheckIn->insert($data);
        if ($eventCheckIn) {
            redirect(HOSTNAME . "event/$event_id");
        } else {
            echo "user not registered";
        }
 
   


    }

    public function eventDetails($event_id){
        $eventDetails = new Model;
        $eventDetails->table = "event";
        $eventDetails->order_column = "event_id";
        $data = [
            "event_id" => $event_id
        ];

        $eventDetails = $eventDetails->where($data);
        return $eventDetails;
    }
    

}
