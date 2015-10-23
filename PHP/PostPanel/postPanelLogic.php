<?php
  if ($_SESSION['userAs'] == "Student" && $_SESSION['userName'] != "nayeem") {
    header("location:home.php");
  }

  include('connection.php');

  if ($_SERVER["REQUEST_METHOD"] == 'POST' || $_SERVER["REQUEST_METHOD"] == 'GET') {
    if (!empty($_REQUEST['addPostDetailSubmit'])) {

      include('logic\logicAddPostDetail.php');
    }
    else if (!empty($_REQUEST['addPostDocumentSubmit'])) {

      include('logic\logicAddPostDocumentSubmit.php');

    }
    else if (!empty($_REQUEST['deletePostDetailSubmit'])) {

      include('logic\logicDeletePostDocumentSubmit.php');

    }
    else if (!empty($_REQUEST['editPostDetailSubmit'])) {

      include('logic\logicEditPostDocumentSubmit.php');

    }
    else if (!empty($_REQUEST['editPostDocumentSubmit'])) {

      include('logic\logicEditPostDocumentSubmitClick.php');

    }
    else if (!empty($_REQUEST['addPost'])) {

      include('logic\logicAddPost.php');

    }
    else if (!empty($_REQUEST['addPostSubmit'])) {

      include('logic\logicAddPostSubmit.php');

    }
    else if (!empty($_REQUEST['permissionPost'])) {

      include('logic\logicPermissionPost.php');

    }
    else if (!empty($_REQUEST['addChapter'])) {

      include('logic\logicAddChapter.php');

    }
    else if (!empty($_REQUEST['addChapterSubmit'])) {

      include('logic\logicAddChapterSubmit.php');

    }
    else if (!empty($_REQUEST['addCourse'])) {

      include('logic\AddCourse.php');

    }
    else if (!empty($_REQUEST['addCourseSubmit'])) {

      include('logic\AddCourseSubmit.php');

    }
    else if (!empty($_REQUEST['deleteCourseSubmit'])) {

      include('logic\logicDeleteCourseSubmit.php');

    }
    else if (!empty($_REQUEST['deleteChapterSubmit'])) {

      include('logic\logicDeleteChapterSubmit.php');

    }
    else if (!empty($_REQUEST['deletePostSubmit'])) {

      include('logic\logicDeletePostSubmit.php');

    }
    else if (!empty($_REQUEST['permissionChapter'])) {

      include('logic\logicPermissionChapter.php');

    }
    else if (!empty($_REQUEST['permissionCourse'])) {

      include('logic\logicPermissionCourse.php');

    }
  }

  mysqli_close($dbc);
?>
