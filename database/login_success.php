<?php
require_once("database.php");

$db= new database();

$username = $_POST['uname'];
$password = $_POST['password'];

$check_login = $db->login($username,$password);
if($check_login==false)
{
    header("location:/FinalWebDevelopmentProject/index.php?msg=3");
}
else{
    header("location:/FinalWebDevelopmentProject/index.php?msg=4");
    session_start();
    $_SESSION['logedin'] = true;
    $_SESSION['username'] = $username;
    $_SESSION['username'] = $check_login;
    setcookie("blog",'blogpost',time()+180);
}


?>