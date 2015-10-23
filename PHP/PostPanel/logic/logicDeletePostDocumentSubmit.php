<?php

    $documentId = mysqli_real_escape_string($dbc,trim($_REQUEST['documentId']));
    if (!empty($documentId)) {
      mysqli_query($dbc, "DELETE FROM `document` WHERE `Document_ID` =".$documentId);
      $affectedRows = mysqli_affected_rows($dbc);
      if ($affectedRows != 1) {

        $_SESSION['strongMassage'] = "Document not delete!";
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
        $_SESSION['strongMassage'] = "Document Delete!";
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
