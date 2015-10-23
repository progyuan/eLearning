<!-- Modal -->
<div class="modal fade" id="addChapterModal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="padding:5px 10px;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <p>
          <h2><span class="glyphicon glyphicon-plus"></span> Add Chapter</h2>
          <small> in
          <?php
            echo "\"".$_SESSION['addChapterCourseName']."\"";
          ?>
        </small>
        </p>
      </div>
      <div class="modal-body" style="padding:40px 50px;">
        <form role="form" action="postPanel.php" method="post">

          <div class="form-group">
            <label for="chapterName">Chapter Name</label>
            <input type="text" name='chapterName' class="form-control" id="chapterName" autofocus required placeholder="Chapter Name" maxlength="30">
          </div>
            <button type="submit" name="addChapterSubmit" class="btn btn-success btn-block btn-lg" value="addChapter"><span class="glyphicon glyphicon-plus"></span> Add Chapter</button>
        </form>
      </div>

    </div>

  </div>
</div>
