<?php
require_once ("database/database.php");
$db = new database();


?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Blog</title>
    <link rel="stylesheet" href="style/style.css">
<!--    <script src="javascript/js.js"></script>-->
</head>
<div>
<?php include ("components/header.php")?>
<?php include ("components/loginModal.php")?>
<?php include ("components/signupModal.php")?>
    <div class="container mt-4">
        <div class="row">

<!--<div class="card-deck">-->
    <?php
$fetching = $db->loadAllDataFromBlogPost();

    foreach ($fetching as $item) {
        $slice = substr($item[3],0,150);
        echo "
        <div class=\"col-md-4 mt-2\">
    <div class=\"card\">
        <img class=\"card-img-top\" src=\"https://source.unsplash.com/1200x500/?$item[4]\" alt=\"Card image cap\" height=\"300px\" width= \"100px\"  >
        <div class=\"card-body\">
            <h5 class=\"card-title\">$item[2]</h5>
            <p class=\"card-text\">$slice........</p>
            <p class=\"card-text\"><a href='blogpost.php?id=$item[0]&name=$item[1]&title=$item[2]&desc=$item[3]&image=$item[4]&created=$item[5]'> <button class='btn btn-danger'>Reading More</button></a></p>
        </div>
    </div>
    </div>

";
}

        ?>
<!--</div>-->

</div>
    </div>
</div>



<!--<div class='card-columns'>-->
<!--    <div class='card'>-->
<!--        <img class='card-img-top' src='https://source.unsplash.com/1600x900/?$item[4]' alt='Card image cap' height='200px'>-->
<!--        <div class='card-body'>-->
<!--            <h5 class='card-title'>$item[2]</h5>-->
<!--            <p class='card-text'>-->
<!--                $slice........-->
<!--            </p>-->
<!--            <a href='blogpost.php?$item[0]'> <button class='btn btn-primary'>Reading More</button></a>-->
<!--        </div>-->
<!--    </div>-->

<?php include ("components/footer.php")?>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>