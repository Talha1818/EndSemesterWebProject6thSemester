<?php
require_once("database.php");

$db = new database();

$username = $_POST['uname'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
if(!empty($username)&&!empty($password)&&!empty($password2))
{
    if(strlen($password)>5)
    {

        if ($password == $password2) {
            if (!ctype_digit($username)) {
                $res = $db->signup($username, $password);
                if ($res == false) {
                    header("location:/FinalWebDevelopmentProject/index.php?msg=0");
                } else {
                    header("location:/FinalWebDevelopmentProject/index.php?msg=1");
                }
            } else {
                header("location:/FinalWebDevelopmentProject/index.php?msg=6");
            }
        } else {
            header("location:/FinalWebDevelopmentProject/index.php?msg=2");
        }
    }
    else {
        header("location:/FinalWebDevelopmentProject/index.php?msg=7");
    }
}
else{
    header("location:/FinalWebDevelopmentProject/index.php?msg=5");
}



?>