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
<?php include "components/header.php";?>

<?php
if(isset($_GET['msg']))
{
    if($_GET['msg']==7)
    {
        echo '
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Warning!</strong>plz insert data in fields!
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
    }
    if($_GET['msg']==8)
    {
        echo '
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Warning!</strong> Your old password is incorrect!
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
    }
    else if($_GET['msg']==9)
    {
        echo '
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Warning!</strong> your new password and confirm password are not matching!
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';

    }
    else if($_GET['msg']==10)
    {
        echo '
    <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong>your password update successfully!
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';

    }
}
?>


<div class="container">
    <div class="col-lg-12 my-2 mx-2">
        <h1>Change your password</h1>
        <form action="/FinalWebDevelopmentProject/database/update_password.php?username=<?php echo $_SESSION['username']?>" method="post">
            <input type="hidden" name="formType" value="changePass">
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="pass">Your Password</label>
                    <input type="password" class="form-control" id="pass" name="pass" placeholder="Your Password">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="pass1">New Password</label>
                    <input type="password" class="form-control" id="pass1" name="pass1" placeholder="New Password">
                </div>
                <div class="form-group col-md-6">
                    <label for="pass2">Confirm New Password</label>
                    <input type="password" class="form-control" id="pass2" name="pass2" placeholder="Confirm New Password">
                </div>
            </div>
            <button type="submit" class="btn btn-danger">Update</button>
        </form>
    </div>
</div>
<?php
include "components/footer.php";
?>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

