
<nav class="navbar navbar-expand-lg navbar-dark bg-info">
    <a class="navbar-brand" href="/FinalWebDevelopmentProject/index.php" title="ProgrammerTechies">
        ProgrammerTechies</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/FinalWebDevelopmentProject/index.php" title="Home">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/FinalWebDevelopmentProject/Videos.php" title="Videos">Videos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/FinalWebDevelopmentProject/Blog.php" title="Blog">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/FinalWebDevelopmentProject/Contact.php" title="Contact Me">Contact Me</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0 mr-2" method="get" action="/FinalWebDevelopmentProject/Search.php">
            <input class="form-control mr-sm-2" type="search" name="query" placeholder="Search" aria-label="Search">
            <button class="btn  text-white bg-danger btn-outline-danger my-1 my-sm-0 mr-2" type="submit">Search</button>
        </form>
        <?php

        session_start();

        if(isset($_SESSION['logedin']))
        {

            setcookie('name','programerTechies',time()+4);

            if(isset($_COOKIE['name'])){

                echo "<h6 class='mr-3 text-white'>Welcome - <strong class='text-white'>".$_SESSION['username']."</strong></h6>";

            }
            else{
                echo "<h4> <span class=\"badge badge-secondary\">Loading...</span></h4>";

            }


            echo "
                    <div class='dropdown mr-4 pr-5'>
            <a class='text-white btn bg-danger dropdown-toggle ml-1' href='#' role='button' id='dropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
            Action</a>

            <div class='dropdown-menu' aria-labelledby='dropdownMenuLink'>
                <a class='dropdown-item' href='/FinalWebDevelopmentProject/changepassword.php'>change password</a>
                <a class='dropdown-item' href='/FinalWebDevelopmentProject/database/logout.php'>logout</a>
            </div>
        </div>";
        }
        else{
            echo '<div>
            <button type="button" class="btn  text-white bg-danger btn-outline-danger"  data-toggle="modal" data-target="#loginModal">Login</button>
            <button type="button" class="btn text-white bg-danger btn-outline-danger" data-toggle="modal" data-target="#signupModal">SignUp</button>
        </div>';
        }

        ?>





    </div>
</nav>
