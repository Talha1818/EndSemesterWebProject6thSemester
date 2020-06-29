<?php
require_once ("database/database.php");
$db = new database();

$query = $_GET['query'];

?>



<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
    #firstcontainer.container{
        min-height: 80vh;
    }
</style>
    <title>Search</title>
    <link rel="stylesheet" href="style/style.css">
<!--    <script src="javascript/js.js"></script>-->
</head>
<body>
<?php include ("components/header.php")?>
<?php include ("components/loginModal.php")?>
<?php include ("components/signupModal.php")?>
<div class="container my-4" id="firstcontainer">
    <h2>Search results for <em>" { <?php echo $query ?> } "</em></h2>
    <?php
    $flag = true;
    $fetching = $db->searchResult($query);
    foreach ($fetching as $row) {
        $flag=false;
echo "
    <div class=\"results mt-3\">
        <h4><a href=\" /FinalWebDevelopmentProject/blogpost.php?id=$row[0]&name=$row[1]&title=$row[2]&desc=$row[3]&image=$row[4]&created=$row[5]\"  class=\"text-dark\" >$row[2] </a></h4>
        <p>$row[3]</p>
    </div>
";
    }


    if($flag)
    {
        echo "
        <div class=\"jumbotron my-4\">
  <div class=\"container\">
    <h1 class=\"display-4\">No results found</h1>
        <p class='lead'>Suggestions:</p>
    <ul>
   
            <li>Make sure that all words are spelled correctly.</li>
            <li>Try different keywords.</li>
            <li>Try more general keywords.</li>
    </ul>
  </div>
</div>";
    }
    ?>


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