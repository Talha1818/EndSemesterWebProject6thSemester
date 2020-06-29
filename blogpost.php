<?php



?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Blog Post</title>
    <link rel="stylesheet" href="style/style.css">
<!--    <script src="javascript/js.js"></script>-->
</head>
<body>
<?php include ("components/header.php")?>
<?php
if(isset($_GET['delete']))
{
    if($_GET['delete']=='d')
    {
        echo '
    <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong>your comment has been deleted successfully!
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
    }
}



?>

<?php include ("components/loginModal.php")?>
<?php include ("components/signupModal.php")?>


<?php
$id = $_GET['id'];
$name = $_GET['name'];
$title = $_GET['title'];
$desc = $_GET['desc'];
$created = $_GET['created'];
$image = $_GET['image'];

?>

<div class="container my-5">
    <div class="jumbotron">
<div class="blog-post">
    <h2 class="blog-post-title"><?php echo $title?></h2>
    <p class="blog-post-meta"><?php echo $created?> by <a href="#"><?php echo $name?></a></p>
    <img src="https://source.unsplash.com/1200x700/?<?php echo $image?>" width="100%">
    <h2><?php echo $title?></h2>
    <p><?php echo $desc?></p>
</div>
</div>
<!--    comment posting-->
 <h3>Post a comment</h3>
    <?php
    $flag = false;
    if(isset($_SESSION['logedin']))
    {
        $username = $_SESSION['username'];
        require_once ("database/database.php");
        $db = new database();

        $id=$_GET['id'];
        if($_SERVER['REQUEST_METHOD']=="POST")
        {
            $comment = $_POST['comment'];
            $data = array($comment,$id,$username);
            if(!empty($comment))
            {
                $db->insertComment($data);

            }

        }


        echo "
         <form action='' method='post'>
        <div class='form-group'>
            <textarea class='form-control' id='comment' name='comment' rows='3' placeholder='Write a comment'></textarea>
        </div>
        <button type='submit' class='btn btn-primary'>Post</button>
    </form>";



        $fetching = $db->loadAllDataFromComment($id);
        foreach ($fetching as $item)
        {
            $flag=true;
            echo "
    <div class='media mt-4'>
        <img class='border border-dark rounded-circle mr-3 my-2' src='images/user.png' width='50px' height='50px' class='mr-3' alt='...'>
        <div class='media-body'>
            <h5 class='mt-0'>$item[4] at $item[2] says</h5>
        <div>$item[1]</div>
        </div>
    </div>
        
  ";
            $commentID = $db->getCommentID($id,$username,$item[2]);
            if($_SESSION['username']==$item[4]) {
                echo "          
           <a class='btn btn-danger btn-sm my-1' href='/FinalWebDevelopmentProject/database/delete.php?commentid=$commentID&id=$id&name=$name&title=$title&desc=$desc&image=$image&created=$created' onclick=\"return confirm('Are you sure you want to delete this comment?')\">Delete</a>
           ";
            }
        }

    }
    else{


        echo "
    <div class=\"jumbotron\">
  <div class=\"container\">
    <h1 class=\"display-4\">You must login to post a comment</h1>
    <p class=\"lead\">you are the first one to posting a comment</p>
  </div>
</div>";
    }
    if($flag==false)
    {
        echo "
        <div class=\"jumbotron my-4\">
  <div class=\"container\">
    <h1 class=\"display-4\">No comments found</h1>
    <p class=\"lead\">you are the first one to posting a comment</p>
  </div>
</div>";
    }


    ?>


</div>

<!--SELECT comment_id from comments WHERE blog_post_id=3 and username='talha' and created_at ='2020-06-29 09:40:28';-->
<!-- FOOTER -->
<?php include ("components/footer.php")?>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>