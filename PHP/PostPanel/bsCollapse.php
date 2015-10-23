<?php include('connection.php'); ?>
<div class="container-fluid">
  <div class="panel-group" id="accordion">
    <div class="panel panel-default hide">
      <button type="button" class="btn btn-info btn-block btn-lg" data-toggle="collapse" data-parent="#accordion" href="#urCourseDetail">All Course</button>
      <div id="urCourseDetail" class="panel-collapse collapse">
        <div class="panel-body">
          <?php include('postPanel/Table/courseDetail.php'); ?>
        </div>
      </div>
    </div>
    <div class="panel panel-default hide">
      <button type="button" class="btn btn-info btn-block btn-lg" data-toggle="collapse" data-parent="#accordion" href="#urChapterDetail">All Chapter</button>
      <div id="urChapterDetail" class="panel-collapse collapse">
        <?php include('postPanel/Table/chapterDetail.php'); ?>
      </div>
    </div>
    <div class="panel panel-default hide">
      <button type="button" class="btn btn-info btn-block btn-lg" data-toggle="collapse" data-parent="#accordion" href="#urPostDetail">All Post</button>
      <div id="urPostDetail" class="panel-collapse collapse">
        <?php include('postPanel/Table/postDetail.php'); ?>
      </div>
    </div>
    <!-- <div class="panel panel-default"> -->
    <div class="panel panel-default">
      <button type="button" class="btn btn-success btn-block btn-lg" data-toggle="collapse" data-parent="#accordion">All Document</button>
      <div id="urDocumentDetail" class="panel-collapse collapse in">
        <?php include('postPanel/Table/documentDetail.php'); ?>
      </div>
    </div>
</div>
<?php mysqli_close($dbc); ?>
