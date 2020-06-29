<?php


class database
{
    public function __construct()
    {
        $this->conn = new PDO("mysql:localhost=host;dbname=finalprojectcorephp",$username = "root",$password="");

    }

    public function login($username,$password)
    {
        $sql = $this->conn->prepare("SELECT username FROM user WHERE username='$username' AND password = '$password'");
        $sql->execute();
        if($sql->rowCount()>0)
        {
            $row = $sql->fetch();
            return $row[0];
        }
        else{
            return false;
        }
    }


    public function signup($username,$password)
    {
        $sql = $this->conn->prepare("INSERT INTO user(username,password) VALUES('$username','$password')");
        if($sql->rowCount()>0)
        {
            return false;
        }
        else{
            return $sql->execute();
        }

    }

    public function contact($data)
    {
        $sql = $this->conn->prepare("INSERT INTO contactuser(user_name,user_email,user_phone,user_message) VALUES(?,?,?,?)");
        $sql->execute($data);
    }


    public function getPasssword($username)
    {
        $sql = $this->conn->prepare("SELECT password FROM user WHERE username='$username'");
        $sql->execute();
        if($sql->rowCount()>0)
        {
            $row = $sql->fetch();
            return $row[0];
        }
        else{
            return false;
        }
    }
    public function updatePassword($username,$pass)
    {
        $sql = $this->conn->prepare("UPDATE user SET password = '$pass' WHERE username='$username'");
        $sql->execute();
    }
    public function loadAllDataFromBlogPost()
    {
        $sql = $this->conn->query("SELECT * FROM blogpost");
        $fetchingRow = $sql->fetchAll();
        return $fetchingRow;
    }

    public function insertComment($data)
    {
        $sql = $this->conn->prepare("INSERT INTO comments(comment_desc,blog_post_id,username) VALUES(?,?,?)");
        $sql->execute($data);
    }
    public function loadAllDataFromComment($id)
    {
        $sql = $this->conn->query("SELECT * FROM comments WHERE blog_post_id = '$id'");
        $fetchingRow = $sql->fetchAll();
        return $fetchingRow;
    }

    public function deletedComment($id)
    {
        $sql = $this->conn->prepare("DELETE FROM `comments` WHERE `comments`.`comment_id` = ?");
        $sql->execute(array($id));
    }
    public function getCommentID($blogpostID,$username,$created)
    {
        $sql = $this->conn->prepare("SELECT comment_id FROM comments WHERE blog_post_id='$blogpostID' AND username='$username' AND created_at ='$created'");
        $sql->execute();
        if($sql->rowCount()>0)
        {
            $row = $sql->fetch();
            return $row[0];
        }
        else{
            return false;
        }
    }





    public function searchResult($query)
    {
        $sql = $this->conn->query("SELECT * FROM `blogpost` WHERE MATCH(title,description) against ('$query');");
        $fetchingRow = $sql->fetchAll();
        return $fetchingRow;
    }





}
?>