<?php

    $postID = mysqli_real_escape_string($dbc,trim($_REQUEST['postId']));
    if (!empty($postID)) {
      mysqli_query($dbc, "DELETE FROM `post` WHERE `Post_Id` =".$postID);
      $affectedRows = mysqli_affected_rows($dbc);
      if ($affectedRows != 1) {

        $_SESSION['strongMassage'] = "Chapter not delete!";
        $_SESSION['warningMassage'] = "Due to system error";

        echo "
        <script type=\"text/javascript\">
            $(window).load(function(){
                $('#loginAlerSuccess').modal('show');
            });
        </script>
        ";
      }
      else {
        $_SESSION['strongMassage'] = "Chapter Delete!";
        $_SESSION['warningMassage'] = "";

        echo "
        <script type=\"text/javascript\">
            $(window).load(function(){
                $('#loginAlertWrong').modal('show');
            });
        </script>
        ";
      }
    }
    header("location:postPanel.php");

?>
