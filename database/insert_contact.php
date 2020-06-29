<?php
require_once("database.php");

$db= new database();

$username = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$data = array($username,$email,$phone,$message);

if(!empty($username)&&!empty($email)&&!empty($phone)&&!empty($message))
{
    if(ctype_alpha($username))
    {
        if(ctype_digit($phone)&&strlen($phone)<14)
        {
            $db->contact($data);
            header("location:/FinalWebDevelopmentProject/Contact.php?msg=5");
        }
        else{

            header("location:/FinalWebDevelopmentProject/Contact.php?msg=8");
        }


    }
    else{
        header("location:/FinalWebDevelopmentProject/Contact.php?msg=7");
    }


}
else{
    header("location:/FinalWebDevelopmentProject/Contact.php?msg=6");
}


?>