<?php
require_once("database.php");

$db= new database();

$password = $_POST['pass'];
$npassword = $_POST['pass1'];
$cpassword = $_POST['pass2'];
$userame = $_GET['username'];

$getpass = $db->getPasssword($userame);

if((empty($password)&&empty($npassword)&&empty($cpassword))||empty($password)||empty($npassword)||empty($cpassword))
{
    header("location:/FinalWebDevelopmentProject/changepassword.php?msg=7");
}
else {
  if ($getpass != $password)
    {
    header("location:/FinalWebDevelopmentProject/changepassword.php?msg=8");
    }
    elseif ($npassword != $cpassword)
    {
    header("location:/FinalWebDevelopmentProject/changepassword.php?msg=9");
     }
else{
    $db->updatePassword($userame,$npassword);
        header("location:/FinalWebDevelopmentProject/changepassword.php?msg=10");
    }
}


?>