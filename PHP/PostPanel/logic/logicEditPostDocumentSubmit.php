<?php

  $documentId = mysqli_real_escape_string($dbc,trim($_GET['documentId']));
  $postId = mysqli_real_escape_string($dbc,trim($_GET['postId']));
  $postTitle = $_GET['postTitle'];

  // $postId = $_GET['postId'];
  // $postTitle = $_GET['postTitle'];


  if (!empty($documentId)) {
    $_SESSION['editDocumentDocumentId'] = $documentId;
    $_SESSION['editDocumentPostId'] = $postId;
    $_SESSION['editDocumentPostTitle'] = $postTitle;

    echo "
    <script type=\"text/javascript\">
        $(window).load(function(){
            $('#editDocumentModal').modal('show');
        });
    </script>
    ";
  }
?>
