<?php

  $postId = mysqli_real_escape_string($dbc,trim($_GET['postId']));
  $postTitle = mysqli_real_escape_string($dbc,trim($_GET['postTitle']));

  // $postId = $_GET['postId'];
  // $postTitle = $_GET['postTitle'];


  if (!empty($postId)) {
    $_SESSION['addDocumentPostId'] = $postId;
    $_SESSION['addDocumentPostTitle'] = $postTitle;

    echo "
    <script type=\"text/javascript\">
        $(window).load(function(){
            $('#addDocumentModal').modal('show');
        });
    </script>
    ";
  }
?>
