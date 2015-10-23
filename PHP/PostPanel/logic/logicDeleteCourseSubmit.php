<?php

    $courseId = mysqli_real_escape_string($dbc,trim($_REQUEST['courseId']));
    if (!empty($courseId)) {
      mysqli_query($dbc, "DELETE FROM `course` WHERE `Course_Id` =".$courseId);
      $affectedRows = mysqli_affected_rows($dbc);
      if ($affectedRows != 1) {

        $_SESSION['strongMassage'] = "Course not delete!";
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
        $_SESSION['strongMassage'] = "Course Delete!";
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
