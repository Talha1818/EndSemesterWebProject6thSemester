<?php
require_once ("database.php");
$db = new database();
$commentID = $_GET['commentid'];
echo $commentID;
$id = $_GET['id'];
$name = $_GET['name'];
$title = $_GET['title'];
$desc = $_GET['desc'];
$created = $_GET['created'];
$image = $_GET['image'];


$db->deletedComment($commentID);
header("location:/FinalWebDevelopmentProject/blogpost.php?id=$id&name=$name&title=$title&desc=$desc&image=$image&created=$created&delete=d");


?>
