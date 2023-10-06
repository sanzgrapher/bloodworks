<?php
include('smtp/PHPMailerAutoload.php');
// $hostname = "http://localhost/bloodworks/";
function show($stuff)
{
    // printing anything sent as parameter
    echo "<pre>";
    print_r($stuff);
    echo "</pre>";
}
function redirect($data){
    header("Location: $data");

}

function getLoggedinUser($utype ){
    if(isset($_SESSION[$utype])){
        $utype = $_SESSION[$utype];
        return $utype;
    }
    else{
        return false;
    }

        
    
    

}

function checkIflLoggedIn(){
    if(isset($_SESSION['loggedin'])){

        return $_SESSION['u-type'];
    }
    else{
        return false;
    }
}

function smtp_mailer($to, $subject, $msg)
{
    $mail = new PHPMailer();
    $mail->SMTPDebug  = 0;
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587;
    $mail->IsHTML(true);
    $mail->CharSet = 'UTF-8';
    $mail->Username = "dbolar368@gmail.com";
    $mail->Password = "dfypckleorqhrpxr";
    $mail->SetFrom("dbolar368@gmail.com", "Bloodbank");
    $mail->Subject = $subject;
    $mail->Body = $msg;
    $mail->AddAddress($to);
    $mail->SMTPOptions = array('ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => false
    ));
    if (!$mail->Send()) {
        return False; 
    } else {
        return True;
    }
}

