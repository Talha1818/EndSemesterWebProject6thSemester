<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModal1">Login using your credentials</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/FinalWebDevelopmentProject/database/login_success.php" method="post"><input type="hidden" name="csrfmiddlewaretoken" value="U9UXTmOamQichyZrfoZ5hQD2tuEEUMsFpeTo1aTVEY3t83OgJx1uDjueQFvRBngr">
                    <div class="form-group">
                        <label for="lusername">Username</label>
                        <input type="text" class="form-control" id="luname" placeholder="Enter your username" name="uname">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="lpassword" placeholder="Enter your password" name="password">
                    </div>

                    <button type="submit" class="btn btn-dark text-white mt-2" id="loginsubmit" style="background-color: rgb(23, 162, 184)">Login</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>