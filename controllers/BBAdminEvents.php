<?php

include_once "Bloodbank.php";

class BBAdmin extends BloodBank
{
    use Controller;

    public function index($a = "", $b = "", $c = "")
    { // default function should be in every class


        $loggedindata = $this->getUserData();
        $bb_id = getLoggedinUser('bb_id'); // functions file sends the session id

        $eventlist = $this->eventDetail($bb_id);
        $data = [
            "events" => $eventlist,
            "loggedinuser" => $loggedindata,

        ];

        




        if (isset($_POST['add-event'])) {

            $this->addEvent();
        }


        
        $this->view('bbadmin/events',$data);
        
       

    }

    public function getUserData()
    {
        $getuserdata = new Model;
        $getuserdata->table = "blood_banks";
        $getuserdata->order_column = "bb_id";
        $getsessionid = getLoggedinUser('bb_id'); // functions file sends the session id
        if (!$getsessionid) {
            redirect(HOSTNAME."bbadmin/login");
            die();
        }
        $data = [
            "bb_id" => "$getsessionid"
        ];
        $getuserdata = $getuserdata->where($data);
        return $getuserdata;
    }


    

    public function addEvent()
    {
        
        $addEvent = new Model;
        $addEvent->table = "event";
        $getsessionid = getLoggedinUser('bb_id'); // functions file sends the session id

        if (isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
            // Define the target directory where you want to store uploaded images
            $targetDir = "./assets/images/";

            // Get the file name and path
            $fileName = basename($_FILES["image"]["name"]);
            $targetFilePath = $targetDir . $fileName;

            // Check if the file already exists
            if (file_exists($targetFilePath)) {
                echo "Sorry, the file already exists.";
            } else {
                // Move the uploaded file to the target directory
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)) {
                    echo "The file " . $fileName . " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }

            }

        } else {
            echo "Error: Please select a valid image file.";
        }



       
        $data = [
            "bb_id" => $getsessionid,
            "event_name" => $_POST['event_name'],
            "event_location" => $_POST['event_location'],
            "event_date" => $_POST['event_date'],
            "event_desc" => $_POST['event_desc'],
            "organizer" => $_POST['organizer'],
            "contact_info" => $_POST['contact_info'],
            "image" => $fileName,
        ];

        $addEvent->insert($data);
        // send email;
        redirect(HOSTNAME."bbadmin");

    }
    
}
