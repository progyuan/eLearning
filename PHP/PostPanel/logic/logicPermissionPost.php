<?php

  $postId = mysqli_real_escape_string($dbc,trim($_GET['postId']));
  $postPermission = mysqli_real_escape_string($dbc,trim($_GET['postPermission']));

  // $postId = $_GET['postId'];
  // $postTitle = $_GET['postTitle'];


  if (!empty($postId)) {

    if ($postPermission == "visible") {

      mysqli_query($dbc, "UPDATE `post` SET `permission`= 'hidden' WHERE `Post_Id` = ".$postId);
    }
    else {

      mysqli_query($dbc, "UPDATE `post` SET `permission`= 'visible' WHERE `Post_Id` = ".$postId);

    }

  }
?>
