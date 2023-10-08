<?php

class BBAdmin
{
    use Controller;

    public function index($a = "", $b = "", $c = "")
    { // default function should be in every class

        $eveid = $b;
        
        $loggedindata = $this->getUserData();
        $eventlist = $this->eventDetail($eveid);
        $eventdonors = $this->eventPaticipatiants($eveid);

        $data = [
            "events" => $eventlist,
            "loggedinuser" => $loggedindata,
            "eventdonors" => $eventdonors

        ];

        if (isset($_POST['update-event'])) {

            $this->updateEvent($eveid);
        }
        if (isset($_POST['update_blood_unit'])) {

            $this->updateDonation($eveid);
        }


        $this->view('bbadmin/editevent', $data); // from controller class 



    }
    public function updateDonation($eve_id)
    {
        $updateeventdonors = new Model;
        $updateeventdonors->table = "event_participants";
        $participation_id = $_POST['participation_id'];
        // $u_id=$_POST['user_id'];

        $data = [

            "blood_unit" => $_POST['blood_unit'],
           
        ];


        $updateeventdonors = $updateeventdonors->update($participation_id, $data, 'participation_id');


        redirect(HOSTNAME . "bbadmin/editevent/$eve_id#update-donation");
    }


    public function eventPaticipatiants($eveid)
    {
        $geteventdonors = new Model;
        $geteventdonors->table = "event_participants";
        $geteventdonors->order_column = "participation_id";
        // // $getsessionid = getLoggedinUser('bb_id'); // functions file sends the session id
        // // if (!$getsessionid) {
        // //     redirect(HOSTNAME . "bbadmin/login");
        // //     die();
        // // }




        // $data = [
        //     "event_id" => "$eveid"
        // ];
        // $geteventdonors = $geteventdonors->where($data);


        $table1 = 'event_participants';
        $table2 = 'user';
        $columns = 'user.username,user.id,event_participants.blood_unit,event_participants.participation_id';
        $conditions = [
            'event_participants.user_id' => 'user.id',
            'event_participants.event_id' => $eveid, // Event ID 5
        ];

        $geteventdonors = $geteventdonors->joinTables($table1, $table2, $columns, $conditions);






 

        return $geteventdonors;

    }
 




    // public function getDonorsData()
    // {
    //     $getuserdata = new Model;
    //     $getuserdata->table = "user";
    //     $getuserdata->order_column = "id";
    //     $getsessionid = getLoggedinUser('userid');
    //     if (!$getsessionid) {
    //         redirect("../login");
    //         die();
    //     }
    //     $data = [
    //         "id" => "$getsessionid"
    //     ];
    //     $getuserdata = $getuserdata->where($data);
    //     return $getuserdata;
    // }







    public function getUserData()
    {
        $getuserdata = new Model;
        $getuserdata->table = "blood_banks";
        $getuserdata->order_column = "bb_id";
        $getsessionid = getLoggedinUser('bb_id'); // functions file sends the session id
        if (!$getsessionid) {
            redirect(HOSTNAME . "bbadmin/login");
            die();
        }
        $data = [
            "bb_id" => "$getsessionid"
        ];
        $getuserdata = $getuserdata->where($data);
        return $getuserdata;
    }


    private function eventDetail($eveid)
    {
        $eventlist = new Model;
        $eventlist->table = "event";
        $eventlist->order_column = "event_id";
        $getsessionid = getLoggedinUser('bb_id');

        $data = [
            "bb_id" => "$getsessionid",
            "event_id" => $eveid
        ];

        $eventlist = $eventlist->where($data);
        return $eventlist;



        // Do something with the $eventlist data
        // For example, you can pass it to the view or perform further operations
    }

    public function updateEvent()
    {
        
        $updateEvent = new Model;
        $updateEvent->table = "event";
        $eveid = $_POST['event_id'];

        $data = [

            "event_name" => $_POST['event_name'],
            "event_location" => $_POST['event_location'],
            "event_date" => $_POST['event_date'],
            "event_desc" => $_POST['event_desc'],
            "organizer" => $_POST['organizer'],
            "contact_info" => $_POST['contact_info'],
        ];


        $updateEvent = $updateEvent->update($eveid, $data, 'event_id');

       

        if (!$updateEvent) {
            echo "<script>alert('Event not updated');</script>";
        }

        redirect(HOSTNAME . "bbadmin/events");
    }
}
