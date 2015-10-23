<!-- Modal -->
<div class="modal fade" id="login_modal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="padding:5px 10px;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4><span class="glyphicon glyphicon-log-in"></span> Login</h4>
      </div>
      <div class="modal-body" style="padding:40px 50px;">
        <form role="form" action="home.php" method="post">
          <div class="form-group">
            <label for="loginUsrname"><span class="glyphicon glyphicon-user"></span> Username / <span class="glyphicon glyphicon-envelope"></span> Email</label>
            <input type="text" name='loginName' class="form-control" id="loginUsrname" required autofocus placeholder="Enter email or username" maxlength="30">
          </div>
          <div class="form-group">
            <label for="loginPassword"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
            <input type="password" name="loginPassword" class="form-control" id="loginPassword" required placeholder="Enter password" maxlength="30">
          </div>
            <button type="submit" name="loginSubmit" class="btn btn-success btn-block btn-lg" value="login"><span class="glyphicon glyphicon-off"></span> Login</button>
        </form>
      </div>

    </div>

  </div>
</div>
