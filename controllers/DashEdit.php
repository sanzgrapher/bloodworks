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



        $this->view('dash/edit', $data); 

    }

    public function getUserData (){

    
        $getuserdata = new Model;
        $getuserdata->table = "user";
        $getuserdata->order_column = "id";
        
        $getsessionid = getLoggedinUser();
        $data = [
            "id" => "$getsessionid"
        ];


        $getuserdata = $getuserdata->where($data);
        return $getuserdata;
       
    }

    public function editBasic()
    {
        $id = getLoggedinUser();


        $editBasic = new Model;


        $editBasic->table = "user";
    $data = [
        
        "fname" => $_POST['fname'],
        "mname" => $_POST['mname'],
        "lname" => $_POST['lname'],
        "dateofbirth" => $_POST['dateofbirth'],
        "phone_no" => $_POST['phone_no'],
        "address" => $_POST['address'],
    ];
  
    $editBasic->update($id, $data, "id");
    redirect("http://bloodworks.local/dash/");
    

}




}
