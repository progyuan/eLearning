<!-- Modal -->
<div class="modal fade" id="teacherRegistrationModal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="padding:10px 20px;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3><span class="glyphicon glyphicon-book"></span> Teacher Registration</h3>
      </div>
      <div class="modal-body" style="padding:40px 50px;">
        <form role="form" action="home.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="teacherName">Name :</label>
            <input type="text" name='teacherName' class="form-control" id="teacherName" required autofocus placeholder="Full Name" maxlength="30">
          </div>
          <div class="form-group">
            <label>Profile Picture :</label>
            <div class="input-group" >
                <span class="input-group-btn">
                    <span  class="btn btn-primary btn-file">
                        Browse&hellip; <input type="file" name="file" accept="image/*">
                    </span>
                </span>
                <input type="text" class="form-control"  readonly>
            </div>
          </div>

          <div class="form-group">
            <label for="teacherAddress">Address :</label>
            <input type="text" name="teacherAddress" class="form-control" id="teacherAddress" placeholder="Address" maxlength="30">
          </div>
          <div class="form-group">
            <label for="teacherContactNumber">Contact Number :</label>
            <input type="text" name="teacherContactNumber" class="form-control" id="teacherContactNumber" placeholder="Address" maxlength="30">
          </div>
          <div class="form-group">
            <label for="teacherSkill">Skill :</label>
            <textarea name="teacherSkill" class="form-control" rows="5" id="teacherSkill"></textarea>
          </div>

            <button type="submit" name="teacherProfileRegistrationSubmit" class="btn btn-success btn-block btn-lg" value="teacherProfileRegistration">Create A Teacher Profile</button>
        </form>
      </div>

    </div>

  </div>
</div>
