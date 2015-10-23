<?php

  $chapterId = mysqli_real_escape_string($dbc,trim($_GET['chapterId']));
  $chapterPermission = mysqli_real_escape_string($dbc,trim($_GET['chapterPermission']));

  // $postId = $_GET['postId'];
  // $postTitle = $_GET['postTitle'];


  if (!empty($chapterId)) {

    if ($chapterPermission == "visible") {

      mysqli_query($dbc, "UPDATE `Chapter` SET `permission`= 'hidden' WHERE `Chapter_Id` = ".$chapterId);
    }
    else {

      mysqli_query($dbc, "UPDATE `Chapter` SET `permission`= 'visible' WHERE `Chapter_Id` = ".$chapterId);

    }

  }
?>
