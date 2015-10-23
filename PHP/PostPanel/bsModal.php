<?php
  include('connection.php');

  include('postPanel\modal\bsModalAddDocument.php');
  include('postPanel\modal\bsModalEditDocument.php');
  include('postPanel\modal\bsModalAddPost.php');
  include('postPanel\modal\bsModalAddChapter.php');
  include('postPanel\modal\bsModalAddCourse.php');


  include('home/modal/bsModalAlertSuccess.php');
  include('home/modal/bsModalAlertWarning.php');

  mysqli_close($dbc);
?>
