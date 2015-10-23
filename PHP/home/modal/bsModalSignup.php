<div class="modal fade" id="signup_modal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="padding:5px 10px;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4><span class="glyphicon glyphicon-user"></span> Sign UP</h4>
      </div>
      <div class="modal-body" style="padding:40px 50px;">
        <form role="form" action="home.php" method="post">
          <div class="form-group">
            <label for="signupUsrname"><span class="glyphicon glyphicon-user"></span> Username</label>
            <input type="text" name="signupUsername" maxlength='30' class="form-control" id="signupUsrname" autofocus required placeholder="Enter username">
          </div>
          <div class="form-group">
            <label for="signupMail"><span class="glyphicon glyphicon-envelope"></span> Email</label>
            <input type="email" name="signupEmail" maxlength='30' class="form-control" id="signupMail" required placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="signupPassword"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
            <input type="password" name="signupPassword" maxlength='30' class="form-control" id="signupPassword" required placeholder="Enter password">
          </div>
            <button type="submit" name="signupSubmit" value="submit" class="btn btn-success btn-block btn-lg"><span class="glyphicon glyphicon-off"></span> Sign UP</button>
        </form>
      </div>

    </div>

  </div>
</div>
