<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Code with ProgrammerTechies</title>
    <link rel="stylesheet" href="style/style.css" type="text/css"><style>
    </style>
    <!--    <script src="javascript/js.js"></script>-->
</head>
<body>

<?php include("components/header.php")
?>


<?php
if(isset($_GET['msg']))
{
    if($_GET['msg']==0)
    {
        echo '
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Warning!</strong> this username is already exist!
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
    }
else if($_GET['msg']==1)
{
    echo '
    <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> You sign up successfully!
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}
else if($_GET['msg']==2)
{
    echo '
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Warning!</strong>your password and re-type password is incorrect!
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';

}
else if($_GET['msg']==5)
{
    echo '
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Warning!</strong>plz insert data in all fields!
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}
else if($_GET['msg']==6)
{
    echo '
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Warning!</strong>plz insert valid username!
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}
else if($_GET['msg']==7)
{
    echo '
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Warning!</strong>password length always greater than 5!
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}
else if($_GET['msg']==3)
{
    echo '
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Warning!</strong> username and password incorrect!
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';

}

else if($_GET['msg']==4)
{
    echo '
    <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> you log in successfully!
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}

}
?>
<div class="jumbotron text-center mt-0" >
    <div class="container">
        <img src="images/prog.png" alt="logo" width="110" class="rounded-circle">
        <h1 class="jumbotron-heading">
            <marquee width="30%" direction="up" height="70px" style="color: green; font-family: 'Times New Roman'">
                <p style="color: red">Data Science !</p>
                <p >Machine Learning !</p>
                <p style="color: blue">Python !</p>
            </marquee>
        </h1>
        <p class="lead text-muted">Confused on which course to take? I have got you covered. Browse courses and find out
            the best course for you. Its free!<br>Code with World is my attempt to teach basics and those coding
            techniques to people in short time which took me ages to learn.</p>
        <p>
            <a href="Blog.php" class="btn btn-danger my-2">Browse Blog</a>
            <a href="Videos.php" class="btn btn-success my-2">Browse Video Tutorials</a>
            <a href="Contact.php" class="btn btn-primary my-2">Contact Me</a>
        </p>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="card mx-auto my-2 p-2" style="width: 18rem;">
            <img width="23px" height="245px" src="https://source.unsplash.com/1600x900/?programing" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Free Video Courses</h5>
                <p class="card-text">Get your programming career started with these free video courses. Source code is
                    available with all the videos for your better experience</p>
                <a href="Videos.php" class="btn btn-primary">Browse Video Courses</a>
            </div>
        </div>

        <div class="card mx-auto my-2 p-2" style="width: 18rem;">
            <img width="23px" height="245px" src="images/articles.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Coding Articles</h5>
                <p class="card-text">Some of the latest coding information compiled as coding articles. Keep your
                    programming knowledge up to date with our coding articles.</p>
                <a href="Blog.php" class="btn btn-primary">Go to Blog</a>
            </div>
        </div>

        <div class="card mx-auto my-2 p-2" style="width: 18rem;">
            <img width="23px" height="245px" src="images/python.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Contact Me</h5>
                <p class="card-text">Learn programming from our free courses. Examples are available with these
                    tutorials. You can contact me for any doubt and I will get back to you!</p>
                <a href="Contact.php" class="btn btn-primary">Contact Me</a>
            </div>
        </div>

    </div>

</div>
<?php include("components/loginModal.php")
?>

<?php include("components/signupModal.php")
?>
<?php include("components/footer.php")
?>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
