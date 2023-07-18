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

        if (isset($_POST['edit-basic'])) {
            

            $this->editBasic();
        }
        if (isset($_POST['toogle'])) {
           
           
          
           
            $this->donorSwitch();
        }
       
  





        $this->view('dash/edit', $data); 

    }
    public function donorSwitch(){
      

       if(isset($_POST['availability'])  ){
           $availability = "Available";
        }
        else{
            $availability = "Unavailable";
        }
      

        $id = getLoggedinUser('userid');
        $donorSwitch = new Model;
        $donorSwitch->table = "user";
        $data = [
            "donor_availability" => $availability,
        ];
        
        $donorSwitch->update($id, $data, "id");
        redirect(HOSTNAME."dash");

    }

    public function getUserData()
    {
        $getuserdata = new Model;
        $getuserdata->table = "user";
        $getuserdata->order_column = "id";
        $getsessionid = getLoggedinUser('userid'); // functions file sends the session id
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

    public function editBasic()
    {
        $id = getLoggedinUser('userid');


        $editBasic = new Model;


        $editBasic->table = "user";
    $data = [
        
        "fname" => $_POST['fname'],
        "mname" => $_POST['mname'],
        "lname" => $_POST['lname'],
        "dateofbirth" => $_POST['dateofbirth'],
        "phone_no" => $_POST['phone_no'],
        "address" => $_POST['address'],
        "bloodgroup" => $_POST['bloodgroup'],
    ];
  
    $editBasic->update($id, $data, "id");
    redirect(HOSTNAME."dash");
    

}




}
