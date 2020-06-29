<!-- SignUp Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signupModal1">SignUp for an account</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form name="contact" method="post" action="/FinalWebDevelopmentProject/database/signup_success.php"><input type="hidden" name="csrfmiddlewaretoken" value="U9UXTmOamQichyZrfoZ5hQD2tuEEUMsFpeTo1aTVEY3t83OgJx1uDjueQFvRBngr">

                    <div class="form-group">
                        <label for="uname">Username</label>
                        <input type="text" class="form-control" id="uname" placeholder="Enter your Name" name="uname">
                    </div>
                    <div class="form-group">
                        <label for="password">Choose a password</label>
                        <input type="password" class="form-control" id="password" placeholder="Choose a password" name="password">
                    </div>
                    <div class="form-group">
                        <label for="password2">Retype a password</label>
                        <input type="password" class="form-control" id="password2" placeholder="Retype your password" name="password2">
                    </div>
                    <button type="submit" class="btn btn-dark mt-2" style="background-color: rgb(23, 162, 184)">SignUp</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
