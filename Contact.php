<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Contact</title>
    <link rel="stylesheet" href="style/style.css">
    <script src="javascript/js.js"></script>
</head>
<body>
<?php include ("components/header.php")?>
<?php
if(isset($_GET['msg']))
{
if($_GET['msg']==5)
{
echo '
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong> You data has been inserted successfully!
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>';
}
else if($_GET['msg']==6)
{
echo '
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Warning!</strong> Plz insert data in all fields!
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>';

}
else if($_GET['msg']==7)
{
    echo '
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Warning!</strong>Digits are not allowed in username!
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';

}
else if($_GET['msg']==8)
{
    echo '
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Warning!</strong>plz insert valid phone number and length always less than 14 digits!
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';

}

}
?>



<?php include ("components/loginModal.php")?>
<?php include ("components/signupModal.php")?>

<div class="container-fluid my-4">
    <div class="row">
        <div class="col-lg-6 offset-lg-2">

            <!-- THE CONTACT FORM IS HERE -->
            <h2>Contact me!</h2>
            <form action="/FinalWebDevelopmentProject/database/insert_contact.php" method="post">
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter your Name" name="name">
                </div>
                <div class="form-group">
                    <label for="email">Your Email</label>
                    <input type="email" class="form-control" id="cemail" placeholder="Enter your Email" name="email">
                </div>
                <div class="form-group">
                    <label for="phone">Your Phone Number (e.g 92XXXXX)</label>
                    <input type="text" class="form-control" id="phone" placeholder="Enter your Phone Number" name="phone">
                </div>
                <div class="form-group">
                    <label for="description">Describe what you want to contact me for here</label>
                    <textarea type="text" class="form-control" id="message" placeholder="Your message" name="message"></textarea>
                </div>
                <button type="submit" class="btn  text-white bg-danger btn-outline-danger mt-2" style="background-color: rgb(23, 162, 184)">Submit</button>
            </form>

        </div>
        <hr>

        <!-- SIDE WIDGET IS HERE -->
        <div class="col-md-4">
            <div class="col-md-8">
                <div class="my-4">
                    <h2 style="color: darkgreen">ProgrammerTechies</h2>
                </div>
                <div class="my-4">
                    <div class="my-2">
                        <ul type="square">
                            <a href=""><li><h4>Muhammad Talha</h4></li></a>
                            <a href=""><li><h4> Mohsin Iqbal</h4></li>
                                <a href=""><li><h4> Behzad Ahmed<h4></li></a>
                                <a href=""><li><h4> Waleed Saleh</h4></li></a>
                        </ul>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- FOOTER -->
<?php include ("components/footer.php")?>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>