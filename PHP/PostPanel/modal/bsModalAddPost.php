<!-- Modal -->
<div class="modal fade" id="addPostModal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="padding:5px 10px;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <p>
          <h2><span class="glyphicon glyphicon-plus"></span> Add Post</h2>
          <small> in
          <?php
            echo "\"".$_SESSION['addPostChapterName']."\"";
          ?>
        </small>
        </p>
      </div>
      <div class="modal-body" style="padding:40px 50px;">
        <form role="form" action="postPanel.php" method="post">

          <div class="form-group">
            <label for="postTitle">Title</label>
            <input type="text" name='postTitle' class="form-control" id="postTitle" autofocus required placeholder="Post Title" maxlength="30">
          </div>
            <button type="submit" name="addPostSubmit" class="btn btn-success btn-block btn-lg" value="addPost"><span class="glyphicon glyphicon-plus"></span> Add Post</button>
        </form>
      </div>

    </div>

  </div>
</div>
