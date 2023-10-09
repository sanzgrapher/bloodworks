<?php


class AddBloodBank

{
    use Controller;
    public function index($a = "", $b = "", $c = "")
    {
        $this->view('add-bloodbank');

        if (isset($_POST['add-bloodbank'])) {
         
            $this->addBloodBanks();
        }

    }

    public function addBloodBanks(){
        $addBloodBank = new Model;
        $addBloodBank->table = "blood_banks";
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
            "bb_name" => $_POST['bb_name'],
            "bb_email" => $_POST['bb_email'],
            "bb_username" => $_POST['bb_username'],
            "bb_password" => password_hash($_POST['bb_password'], PASSWORD_DEFAULT),
            "bb_phoneno" => $_POST['bb_phoneno'],
            "bb_address" => $_POST['bb_address'],
            "bb_status" => 'not-verified',
            "bb_description" => $_POST['bb_description'],
            "bb_image" => $fileName,
        ];
        $addBloodBank->insert($data);
        redirect(HOSTNAME."/bloodbanks");

    }



}
