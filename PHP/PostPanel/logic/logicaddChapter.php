<?php

  $courseId = mysqli_real_escape_string($dbc,trim($_GET['courseId']));
  $courseName = mysqli_real_escape_string($dbc,trim($_GET['courseName']));

  // $postId = $_GET['postId'];
  // $postTitle = $_GET['postTitle'];


  if (!empty($courseId)) {
    $_SESSION['addChapterCourseId'] = $courseId;
    $_SESSION['addChapterCourseName'] = $courseName;

    echo "
    <script type=\"text/javascript\">
        $(window).load(function(){
            $('#addChapterModal').modal('show');
        });
    </script>
    ";
  }
?>
