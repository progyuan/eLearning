<!-- Modal -->
<div class="modal fade" id="teacherProfileModal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="padding:10px 20px;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4><span class="glyphicon glyphicon-user"></span> Profile</h4>
      </div>

      <div class="modal-body" style="padding:40px 50px;">

        <?php
         include('connection.php');
         $queryTeacher = mysqli_query($dbc, "SELECT * FROM `teacherprofile` WHERE `Register_Id` IN (SELECT `Register_Id` FROM `register` WHERE `UserName` LIKE '".$_SESSION['userName']."')");
         $numrowsTeacher = mysqli_num_rows($queryTeacher);
         if ($numrowsTeacher > 0) {
           $queryResultTeacher= mysqli_fetch_array($queryTeacher);
           $queryName = $queryResultTeacher['TeacherName'];
           $queryAddress = $queryResultTeacher['TeacherAddress'];
           $queryContactNumber = $queryResultTeacher['ContactNo'];
           $queryImagePath = "\"..\image\\tpp\\".$queryResultTeacher['ImageLink']."\"";
           $querySkill = $queryResultTeacher['Biography_Skill'];
         }
        ?>

        <div class="row">
          <div class="col-sm-6">
            <div class="well well-sm">

              <p class="bg-primary">
                Name :
              </p>
              <p class="text-info">
                <?php echo $queryName; ?>
              </p>

              <p class="bg-primary">
                Address :
              </p>
              <p class="text-info">
                <?php echo $queryAddress; ?>
              </p>

              <p class="bg-primary">
                Contact Number :
              </p>
              <p class="text-info">
                <?php echo $queryContactNumber; ?>
              </p>

            </div>
          </div>
          <div class="col-sm-6">
            <div class="well well-sm">
              <img src= <?php echo "$queryImagePath"; ?> class="img-responsive img-thumbnail img-rounded" style="max-height:200px;"/>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="well well-sm">
              <p class="bg-primary">
                Skill :
              </p>
              <p class="text-info">
                <?php echo $querySkill; ?>
              </p>
            </div>
          </div>
        </div>
      </div>


    </div>

  </div>
  <?php mysqli_close($dbc); ?>
</div>
