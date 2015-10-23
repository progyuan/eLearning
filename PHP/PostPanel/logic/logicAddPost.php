<?php

  $chapterId = mysqli_real_escape_string($dbc,trim($_GET['chapterId']));
  $chapterName = mysqli_real_escape_string($dbc,trim($_GET['chapterName']));

  // $postId = $_GET['postId'];
  // $postTitle = $_GET['postTitle'];


  if (!empty($chapterId)) {
    $_SESSION['addPostChapterId'] = $chapterId;
    $_SESSION['addPostChapterName'] = $chapterName;

    echo "
    <script type=\"text/javascript\">
        $(window).load(function(){
            $('#addPostModal').modal('show');
        });
    </script>
    ";
  }
?>
