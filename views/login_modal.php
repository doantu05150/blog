<div id="login-modal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title text-lg-center">Log in</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form" method="POST" action="/login"> 
                    <div class="form-group">
                        <label for="email" class="sr-only">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="abc@gmail.com">
                    </div>
                    <div class="form-group">
                        <label for="key" class="sr-only">Password</label>
                        <input type="password" name="pwd" id="key" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <input type="submit" id="btn-login" class="btn btn-primary btn-lg btn-block" value="Log in">
                        <span class="glyphicon glyphicon-eye-open"></span>
                    </div>
                    
                </form>
            </div>
            <div class="modal-footer text-xs-center">
                Don't have an account? <a href="register">  Sign up »</a>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->