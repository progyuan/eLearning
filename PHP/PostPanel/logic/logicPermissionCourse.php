<?php

  $courseId = mysqli_real_escape_string($dbc,trim($_GET['courseId']));
  $coursePermission = mysqli_real_escape_string($dbc,trim($_GET['coursePermission']));

  // $postId = $_GET['postId'];
  // $postTitle = $_GET['postTitle'];


  if (!empty($courseId)) {

    if ($coursePermission == "visible") {

      mysqli_query($dbc, "UPDATE `course` SET `permission`= 'hidden' WHERE `Course_Id` = ".$courseId);
    }
    else {

      mysqli_query($dbc, "UPDATE `course` SET `permission`= 'visible' WHERE `Course_Id` = ".$courseId);

    }

  }
?>
